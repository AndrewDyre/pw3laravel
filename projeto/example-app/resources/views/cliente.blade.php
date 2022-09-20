@extends('template.default')
@section('content')

<section>
    <h1> cliente </h1>
</section>
<section>

 <form action="{{url('/cliente/inserir')}}" method="post">
  {{csrf_field()}}
  
  <div>
  <input type="text" name="txNome" placeholder="Nome" value="nome do cliente" />
  </div>
  
  <div>
  <input type="text" name="txEmail" placeholder="E-mail" value="email teste" />
  </div>
  
  <div>
  <input type="text" name="txFone" placeholder="Telefone" value="fone teste" />
  </div>

  <div>
  <input type="text" name="txdataNas" placeholder="data" value="data" />
  </div>
  
  <div>
  <input type="text" name="txestadoCiv" placeholder="Estado civil" value="Estado civil" />
  </div>

  <div>
  <input type="text" name="txendereco" placeholder="Endereço" value="Endereço" />
  </div>

  <div>
  <input type="text" name="txnumero" placeholder="número" value="Número da residência" />
  </div>

  <div>
  <input type="text" name="txcomplemento" placeholder="complemento" value="complemento da residência" />
  </div>

  <div>
  <input type="text" name="txcep" placeholder="CEP" value="CEP" />
  </div>

  <div>
  <input type="text" name="txcidade" placeholder="Cidade" value="cidade" />
  </div>

  <div>
  <input type="text" name="txestado" placeholder="Estado" value="estado" />
  </div>

  <div>
  <input type="text" name="txRg" placeholder="Rg" value="Rg" />
  </div>

  <div>
  <input type="text" name="txcpf" placeholder="CPF" value="CPF" />
  </div>

  <div>
  <input type="text" name="txcelular" placeholder="Celular" value="Número de celular" />
  </div>
  
  <div>
  <input type="submit" value="Salvar" />
  </div>
 </form> 

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