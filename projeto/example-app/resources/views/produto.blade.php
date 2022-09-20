@extends('template.default')
@section('content')

<section>
    <h1> produtos </h1>
</section>
<section>

 <form action="{{url('/produto/inserir')}}" method="post">
  {{csrf_field()}}
  
  <div>
  <input type="text" name="txidcatprod" placeholder="Categoria" value="Categoria" />
  </div>
  
  <div>
  <input type="text" name="txProduto" placeholder="Produto" value="Produto" />
  </div>
  
  <div>
  <input type="text" name="txValor" placeholder="Valor" value="Valor" />
  </div>
  
  <div>
  <input type="submit" value="Salvar" />
  </div>
 </form> 

</section>
<section>
@foreach($produto as $prod)
    <h1> {{$prod->idProduto}}</h1>
    <p> {{$prod->produto}}</p>
    <p> {{$prod->idCategoriaPed}} </p>
    <P>{{$prod->valor}}<p>
    @endforeach
</section>

@endsection