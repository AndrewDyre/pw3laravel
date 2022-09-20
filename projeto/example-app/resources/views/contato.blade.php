@extends('template.default')
@section('content')

<section> 
    <h1>Nosso contato</h1>
</section>
<section>
@foreach($contato as $c)
    <h1> {{$c->idContato}} </h1>
    <p> {{$c->nome}} </p>
    {{$c->email}}
@endforeach
</section>
@endsection