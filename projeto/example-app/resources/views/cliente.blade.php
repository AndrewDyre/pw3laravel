@extends('template.default')
@section('content')

<section>
    <h1> cliente </h1>
</section>

<section>
@foreach($cliente as $cli)
    <h1> {{$cli->idCliente}} </h1>
    <p> {{$cli->nome}} </p>
    <p> {{$cli->dtNasc}} </p>
    <p> {{$cli->estadoCivil}} </p>
    <p> {{$cli->endereco}} </p>
    <p> {{$cli->numero}} </p>
    <p> {{$cli->complemento}} </p>
    <p> {{$cli->cep}} </p>
    <p> {{$cli->cidade}} </p>
    <p> {{$cli->estado}} </p>
    <p> {{$cli->Rg}} </p>
    <p> {{$cli->cpf}} </p>
    <p> {{$cli->email}} </p>
    <p> {{$cli->fone}} </p>
    <p> {{$cli->celular}} </p>
    @endforeach
</section>

@endsection