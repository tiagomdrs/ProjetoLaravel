@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° ID</th>
      <th scope="col">Placa</th>
      <th scope="col">Cor</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($caminhoes as $caminhao)
    <tr>
      <th scope="row">{{$caminhao->id}}</th>
      <td>{{$caminhao->placa}}</td>
      <td>{{$caminhao->cor}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection 