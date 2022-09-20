<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbPedido";
    protected $fillable = ['idCategoria','idProduto']; //campos da tabela
    public $timestamps = false;
}
