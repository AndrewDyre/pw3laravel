<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbProduto";
    protected $fillable = ['idCategoria','produto','valor']; //campos da tabela
    public $timestamps = false;
}
