@extends('template.default')
@section('content')

<section>
    <h1> Pedido </h1>
</section>
<section>

 <form action="{{url('/pedido/inserir')}}" method="post">
  {{csrf_field()}}
  
  <div>
  <input type="text" name="txcatped" placeholder="Categoria" value="1234" />
  </div>
  
  <div>
  <input type="text" name="txidprodped" placeholder="Produto" value="Produto" />
  </div>
  
  <div>
  <input type="submit" value="Salvar" />
  </div>
 </form> 

</section>
<section>
    @foreach($pedido as $ped)
    <h1> {{$ped->idPedido}} </h1>
    <p> {{$ped->idProdutop}} </p>
    <p> {{$ped->idCategoriaPed}} </p>
    @endforeach
</section>

@endsection