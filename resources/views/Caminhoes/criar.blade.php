@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success mb-3">
                <div class="card-header"><center>{{ __('Cadastrar Caminhão') }}</center></div>

                <div class="card-body">
                    <form method="POST" action="{{route('caminhoes.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-md-right">{{ __('Cor') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="cor" class="form-control" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">{{ __('Placa') }}</label>

                           	<div class="col-md-6">
                                <input type="text" name="placa" class="form-control" required>
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
