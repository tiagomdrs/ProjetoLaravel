@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-10">
			<center><h3>Sobre o aplicativo</h3></center>
			<br>
			<div class="row">
				<p>Coleta Digital é um projeto que visa otimizar a coleta de lixo na região do Seridó, 
				onde a prestação desse serviço público há um certo tempo é um problema na região. 
				Isso acontecerá com base no monitoramento dos veículos de coleta de lixo,
				informando as rotas e percursos desses transportes nos dias e horários corretos. O projeto visa facilitar o dia-a-dia 
				da população, mantendo-a informada, para que o lixo residencial e 
				comercial seja sempre posto para a coleta. 
				O projeto pode ajudar a vida dos usuários com funcionalidades como: Data e horário da coleta, 
				locais de descarte de lixo reciclável e eletrônico e rotas de caçambas públicas usadas para a 
				coleta, além disso fornece dados para que os órgãos ou empresa responsável pela coleta de lixo 
				no município gerencie de forma eficaz o serviço.</p>
				
				<p>Os objetivos de nosso aplicativo são:</p>
			</div>

			<div class="row">
				<ul>
					<li>Mostrar possíveis rotas do veículo;</li>
					<li>Mostrar dia e horários médios da coleta de lixo aos usuários;</li>
					<li>Mostrar pontos onde há coleta de lixo descartável e eletrônico; </li>
					<li>Mostrar gráficos como: quantidade de lixo recolhida, etc; </li>
					<li>Alertar sobre imprevistos no percurso ou se por algum motivo o caminhão não irá passar.  </li>
				</ul> 
			</div>

			<div class="row">
				<p>O descarte e coleta de lixo efetuados corretamente, não é apenas uma questão de estética 
				do município ou apenas satisfação da população, é principalmente uma questão de saúde pública.
				O descarte em locais irregulares como terrenos baldios acarreta a formação de locais de poluição 
				do solo e da água e aglomeração de animais indesejados que podem acarretar doenças, como ratos e 
				moscas. Além disso, a falta de informação de dados como o horário e data da coleta de lixo nas ruas
				de uma determinada cidade, faz com que a população deposite seu lixo com muita antecedência em 
				lixeiras ou nas próprias calçadas novamente ocasionando problemas de saúde pública. </p>
			</div>
		</div>	
	</div>
</div>
@endsection
