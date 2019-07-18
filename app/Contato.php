<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function listar()
    {
        return [
            ["nome"=>"Rafael", "fone"=>"123456"],
            ["nome"=>"João", "fone"=>"123456"]
        ];;
    }
}
