<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {

        $contato = new Contato();

        $contatos = $contato->listar();

        return view("contato.index", compact('contatos'));
    }

    public  function  buscarContatoPorId()
    {
        return "Método de busca de contato por id";
    }

    public function  criarContato()
    {
        return "Método para criar contato";
    }

    public  function  editarContato()
    {
        return "Método para editar contato";
    }
}
