@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>Administrador - Cadastros</center></div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-group">

                    	<div class="card">
                        	<img class="card-img-top" src="http://www.emecservice.com.br/painel/arquivos/servicos/161120041115caminhao-lixo.jpg" alt="Card image cap">
	                        <div class="card-body">
	                            <center>
	                                <h5 class="card-title">Caminhões</h5>
	                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                                <a href="{{ route('caminhoes.create') }}" class="btn btn-outline-success">Cadastrar</a>
	                                <a href="{{ route('caminhoes.index') }}" class="btn btn-outline-primary">Ver</a>

	                            </center>
	                        </div>
                    	</div>

                    	<div class="card" >
	                        <img class="card-img-top" src="https://www.cgd.pt/Investor-Relations/Informacao-Financeira/Noticias/PublishingImages/Noticias_480x380.jpg" alt="Card image cap">
	                        <div class="card-body">
	                            <center>
	                                <h5 class="card-title">Notícias</h5>
	                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                                <a href="{{ route('noticias.create') }}" class="btn btn-outline-success">Cadastrar</a>

	                                <a href="{{ route('noticias.index') }}" class="btn btn-outline-primary">Ver</a> 
	                                
	                            </center>
	                        </div>
                    	</div>

	                    <div class="card" >
	                        <img class="card-img-top" src="http://blog.seguridade.com.br/wp-content/uploads/2016/09/quando-e-hora-de-demitir-um-funcionario-810x627.jpeg" alt="Card image cap">
	                        <div class="card-body">
	                            <center>
	                                <h5 class="card-title">Motoristas</h5>
	                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                                <a href="{{ route('motoristas.create') }}" class="btn btn-outline-success">Cadastrar</a>

	                                <a href="{{ route('motoristas.index') }}" class="btn btn-outline-primary">Ver</a>
	                            </center>
	                        </div>
	                    </div>
	                    <br>

                    </div>
             
                    <br>

                    <div class="card mb-3">
			    		<img class="card-img-top" src="http://ecotrainning.com.br/wp-content/uploads/2016/09/banner-parametrizacao.jpg" alt="Card image cap">
					  	<div class="card-body">
					  		<center>
							    <h5 class="card-title">Rotas</h5>
							    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    <a href="#" class="btn btn-outline-success">Cadastrar</a>
							    <a href="#" class="btn btn-outline-primary">Ver</a>
							</center>
					  	</div>
					</div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection