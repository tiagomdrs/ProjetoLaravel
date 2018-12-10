@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Administrador
                    <ul>
                        <li>
                             <a href="{{ route('caminhoes.create') }}">{{ __('Caminhões') }}</a>
                        </li>

                        <li>
                             <a href="{{ route('motoristas.create') }}">{{ __('Motoristas') }}</a>
                        </li>
                        <li>
                             <a href="{{ route('noticias.create') }}">{{ __('Notícias') }}</a>
                        </li>
                        <li>
                             <a href="#">{{ __('Rotas') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection