@extends('template.default')
@section('content')

<section>
    <h1> Pedido </h1>
</section>

<section>
    @foreach($pedido as $ped)
    <h1> {{$ped->idPedido}} </h1>
    <p> {{$ped->idProdutop}} </p>
    <p> {{$ped->idCategoriaPed}} </p>
    @endforeach
</section>

@endsection