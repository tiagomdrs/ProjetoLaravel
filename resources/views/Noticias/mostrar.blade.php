@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($noticias as $noticia)
    <tr>
      <th scope="row">{{$noticia->id}}</th>
      <td>{{$noticia->tt_principal}}</td>
      <td>
        <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST">
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