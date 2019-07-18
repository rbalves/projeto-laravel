@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <table>
        <thead>
            <th>Nome</th>
            <th>Fone</th>
        </thead>
        @foreach($contatos as $contato)
            <tr>
                <td>{{ $contato['nome'] }}</td>
                <td>{{ $contato['fone'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection