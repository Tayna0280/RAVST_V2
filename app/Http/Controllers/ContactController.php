<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'message'  => 'required',
            'category' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }

    public function porCategoria()
    {
        $categorias = Contact::select('category')->distinct()->get();

        return view('pag.contatoCategorias', compact('categorias'));
    }

    public function verCategoria($categoria)
    {
        $contatos = Contact::where('category', $categoria)->get();

        return view('pag.listaContatos', compact('contatos', 'categoria'));
    }
}
