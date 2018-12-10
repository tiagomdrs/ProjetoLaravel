@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            TELA PARA NOTÍCIAS CADASTRADAS (FUNCIONANDO!)
            @foreach ($noticias as $noticia)
                <div class="card border-success mb-3">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <h3 class="card-title">{{$noticia->tt_principal}}</h3>
                            <p >{{$noticia->tt_auxiliar}}</p>
                            <p class="card-text">{{$noticia->corpo}}</p>
                            <a href="#" class="btn btn-outline-success">Ver mais</a>

                        </div>
                    </div>
                </div>
            @endforeach 

        </div>
    </div>
</div>
@endsection
