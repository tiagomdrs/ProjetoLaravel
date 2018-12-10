@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<center><h3>Tipos de lixo</h3></center>
			<br>

			<div class="row">
				<p>Os lixos podem ter propriedades diferentes, para tratar de forma específica cada uma delas, os lixos são divididos 
				em tipos, sendo os principais deles:</p></br>
			</div>

			<div class="row">
				<h4>Lixo orgânico</h4>

				<p>É o lixo derivado dos resíduos orgânicos. 
				São gerados principalmente nas residências, restaurantes e estabelecimentos 
				comerciais que atuam na área de alimentação. Devem ser separados dos outros 
				tipos de lixo, pois são destinados,principalmente, aos aterros sanitários das 
				cidades.Exemplos: cascas de frutas e legumes; restos de verduras, de arroz 
				e de feijão; restos de carnes e ovos.</p>
			</div>

			<div class="row">
				<h4>Lixo reciclável</h4>

				<p>É todo lixo material que pode ser utilizado no processo de transformação de outros materiais
				ou na fabricação de matéria-prima. São gerados nas residências, comércios e indústrias. Devem ser separados e destinados 
				a coleta seletiva. São usados por cooperativas e empresas de reciclagem. A separação para a reciclagem deste tipo de 
				resíduo sólido é de extrema importância, pois além de gerar empregos e renda, também contribuí para o meio ambiente. 
				Isto ocorre, pois este lixo não vai gerar poluição em rios, solo e mar.
				Exemplos: embalagens de plástico, papelão, potes de vidro, garrafas PET, jornais e revistas usadas e objetos de metal.</p>
			</div>

			<div class="row">
				<h4>Lixo industrial</h4>

				<p>São os resíduos, principalmente sólidos, originários no processo de produção das
				indústrias. Geralmente é composto por sobras de matérias-primas, destinados à reciclagem ou reuso no processo industrial.
				Exemplos: retalhos de tecido, sobras e retalhos de metal, embalagens de matéria-prima, sobras de vidro e etc.</p>
			</div>

			<div class="row">
				<h4>Lixo hospitalar</h4>
				
				<p>São os resíduos originados em hospitais e clínicas médicas. São perigosos, pois podem 
				apresentar contaminação e transmitir doenças para as pessoas que tiverem contato. Devem ser tratados segundo padrões 
				estabelecidos, com todo cuidado possível. São destinados para empresas especializadas no tratamento deste tipo de lixo,
				onde geralmente são incinerados.Exemplos: curativos, seringas e agulhas usadas, material cirúrgico usado, 
				restos de medicamentos e até mesmo partes do corpo humano extraídos em procedimentos cirúrgicos.</p>
			</div>

			<div class="row">
				<h4>Lixo verde</h4>

				<p>É aquele que resulta, principalmente, da poda de árvores, galhos,
				troncos, cascas e folhas que caem nas ruas. Por se tratar de matéria orgânica,
				poderia ser utilizado para compostagem, produção de adubo orgânico e até confecção
				de objetos de artesanato. Infelizmente, no Brasil, ele é destinado quase 
				exclusivamente aos aterros sanitários.</p>
			</div>


			<div class="row">
				<h4>Lixo eletrônico</h4>

				<p>São os resíduos gerados pelo descarte de produtos eletroeletrônicos que não funcionam mais 
				ou que estão muito superados. Exemplos: televisores, rádios, impressoras, computadores, geladeiras, micro-ondas, 
				telefones e etc. </p></br>
			</div>

		</div>	
	</div>
</div>

@endsection
