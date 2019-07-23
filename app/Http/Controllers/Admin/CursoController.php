<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
      $registros = Curso::all();
      return view('admin/cursos/index', compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request)
    {
      $dados = $request->all();

      $dados['publicado'] = (isset($dados['publicado'])) ? "sim" : "nao" ;

      if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        $numeroAleatorio = rand(1111,9999);
        $diretorio = "img/cursos/";
        $extensaoArquivo = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$numeroAleatorio.".".$extensaoArquivo;
        $imagem->move($diretorio, $nomeImagem);
        $dados['imagem'] = $diretorio."/".$nomeImagem;
      }

      Curso::create($dados);

      return redirect()->route('admin.cursos');

    }

    public function editar($id)
    {

      $registro = Curso::find($id);
      return view('admin.cursos.editar',compact('registro'));

    }

    public function atualizar(Request $request, $id)
    {
      $dados = $request->all();

      $dados['publicado'] = (isset($dados['publicado'])) ? "sim" : "nao" ;

      if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        $numeroAleatorio = rand(1111,9999);
        $diretorio = "img/cursos/";
        $extensaoArquivo = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$numeroAleatorio.".".$extensaoArquivo;
        $imagem->move($diretorio, $nomeImagem);
        $dados['imagem'] = $diretorio."/".$nomeImagem;
      }

      Curso::find($id)->update($dados);

      return redirect()->route('admin.cursos');

    }

    public function deletar($id)
    {
      Curso::find($id)->delete();
      return redirect()->route('admin.cursos');
    }
}
