<div>
	<div>
		<h3>Cadastrar Caminhão</h3>
		<form method="POST" action="{{route('caminhoes.store')}}">
			{{csrf_field()}}
			<div>
				<label>Cor:</label> 
				<div>
					<input type="text" name="cor" placeholder="Digite a cor do veículo" required></input>
				</div>
			</div>	

			<div>
				<label>Placa:</label>
				<div>
					<input type="text" name="placa" placeholder="Digite o número da placa" required>
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