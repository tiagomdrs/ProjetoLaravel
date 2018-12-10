<div>
	<div>
		<h3>Cadastrar Notícia</h3>
		<form method="POST" action="{{route('noticias.store')}}">
			{{csrf_field()}}
			<div>
				<label>Título:</label>
				<div>
					<input type="text" name="titulo" placeholder="Título" class="form-control" required>
				</div>
			</div>	 

			<div>
				<label>Pré-notícia:</label>
				<div>
					<textarea name="auxiliar" placeholder="Pré-Notícia" class="form-control" rows ="5" required></textarea>
				</div>
			</div>	

			<div>
				<label>Notícia:</label>
				<div>
					<textarea name="corpo" placeholder="Notícia" class="form-control" rows ="5" required></textarea>
				</div>
			</div>	
			<br>
			<div>
				<div>
					<button>Cadastrar</button>
				</div>
			</div>	
		</form>
	</div>	
</div>