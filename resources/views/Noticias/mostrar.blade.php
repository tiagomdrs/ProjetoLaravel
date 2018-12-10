@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° ID</th>
      <th scope="col">Titulo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($noticias as $noticia)
    <tr>
      <th scope="row">{{$noticia->id}}</th>
      <td>{{$noticia->tt_principal}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection