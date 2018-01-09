@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				<label style="text-align: center;width: 100%; font-weight: 800;">	
					SISTEMA DE GESTÃO EMPRESARIAL VERSÃO ALPHA.
					<br>
					Escolha uma opção no menu superior.
					<br>
					<br>
					Usuário: {{ Auth::user()->name }}
				</label>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

