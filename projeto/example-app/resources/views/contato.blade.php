@extends('template.default')
@section('content')

<section> 
    <h1>Nosso contato</h1>
</section>
<section>

 <form action="{{url('/contato/inserir')}}" method="post">
  {{csrf_field()}}
  
  <div>
  <input type="text" name="txNome" placeholder="Nome" value="nome teste" />
  </div>
  
  <div>
  <input type="text" name="txEmail" placeholder="E-mail" value="email teste" />
  </div>
  
  <div>
  <input type="text" name="txFone" placeholder="Telefone" value="fone teste" />
  </div>
  
  <div>
  <input type="text" name="txAssunto" placeholder="Assunto" value="assunto teste" />
  </div>
  
  <div>
  <textarea name="txMensagem" placeholder="Mensagem"></textarea>
  </div>
  
  <div>
  <input type="submit" value="Salvar" />
  </div>
 </form> 

</section>
<section>
@foreach($contato as $c)
    <h1> {{$c->idContato}} </h1>
    <p> {{$c->nome}} </p>
    {{$c->email}}
@endforeach
</section>
@endsection