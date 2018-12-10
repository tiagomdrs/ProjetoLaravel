@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success mb-3">
                <div class="card-header"><center>{{ __('Cadastrar Notícia') }}</center></div>

                <div class="card-body">
                    <form method="POST" action="{{route('noticias.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-md-right">{{ __('Título') }}</label>

                            <div class="col-md-9">
                                <input id="titulo" type="text" class="form-control" name="titulo" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('Pré-notícia') }}</label>

                            <div class="col-md-9">
                                <textarea name="auxiliar" class="form-control" rows ="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('Notícia') }}</label>

                            <div class="col-md-9">
                                <textarea name="corpo" class="form-control" rows ="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-outline-success">
                                   <center>{{ __('Cadastrar') }}</center> 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection