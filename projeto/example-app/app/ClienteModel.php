<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbCliente";
    protected $fillable = ['nome','dtNasc','estadoCivil','endereco','numero','complemento','cep','cidade','estado','Rg','cpf','email','fone','celular']; //campos da tabela
    public $timestamps = false;
}
