@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° ID</th>
      <th scope="col">Placa</th>
      <th scope="col">Cor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($caminhoes as $caminhao)
    <tr>
      <th scope="row">{{$caminhao->id}}</th>
      <td>{{$caminhao->placa}}</td>
      <td>{{$caminhao->cor}}</td>
      <td>
        <form action="{{ route('caminhoes.destroy', $caminhao->id) }}" method="POST">
          @csrf
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-outline-danger"> Excluir</button>
        </form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection 