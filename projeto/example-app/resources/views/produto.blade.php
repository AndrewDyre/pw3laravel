@extends('template.default')
@section('content')

<section>
    <h1> produtos </h1>
</section>

<section>
@foreach($produto as $prod)
    <h1> {{$prod->idProduto}}</h1>
    <p> {{$prod->produto}}</p>
    <p> {{$prod->produto}} </p>
    <p> {{$prod->idCategoriaPed}} </p>
    <P>{{$prod->valor}}<p>
    @endforeach
</section>

@endsection