@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">CNH</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($motoristas as $motorista)
    <tr>
      <th scope="row">{{$motorista->id}}</th>
      <td>{{$motorista->name}}</td>
      <td>{{$motorista->email}}</td>
      <td>{{$motorista->cnh}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection