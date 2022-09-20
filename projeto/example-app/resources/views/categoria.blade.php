@extends('template.default')
@section('content')

<section>
    <h1> categoria</h1>
</section>
<section>

 <form action="{{url('/categoria/inserir')}}" method="post">
  {{csrf_field()}}
  
  <div>
  <input type="text" name="txcatcat" placeholder="Categoria" value="Categoria" />
  </div>

  <div>
  <input type="submit" value="Salvar" />
  </div>
 </form> 

</section>
<section>
@foreach($categoria as $cat)
 <h1> {{$cat->idCategoria}} </h1>
    <p> {{$cat->categoria}} </p>
    @endforeach
</section>

@endsection
