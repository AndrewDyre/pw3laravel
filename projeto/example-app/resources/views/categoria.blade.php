@extends('template.default')
@section('content')

<section>
    <h1> categoria</h1>
</section>

<section>
@foreach($categoria as $cat)
 <h1> {{$cat->idCategoria}} </h1>
    <p> {{$cat->categoria}} </p>
    @endforeach
</section>

@endsection
