<div>
	<div>
		<h3>Cadastrar Funcionário</h3>
		<form method="POST" action="{{route('motoristas.store')}}">
			{{csrf_field()}}
			<div>
				<label>Nome:</label>
				<div>
					<input type="text" name="nome" placeholder="Digite o nome do funcionário">
				</div>
			</div>	  

			<div>
				<label>Email:</label>
				<div>
					<input type="text" name="email" placeholder="Digite o email do funcionário">
				</div>
			</div>	

			<div>
				<label>CNH:</label>
				<div>
					<input type="number" name="cnh" placeholder="Digite o CNH do funcionário">
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