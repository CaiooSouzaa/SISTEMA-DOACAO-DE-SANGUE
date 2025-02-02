<!DOCTYPE HTML>

<html>

<head>
	<title>Doar sangue</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
		</symbol>
	</svg>
	<style>
		body {
			background-color: #f8f9fa;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			flex-direction: column;
			text-align: center;
		}

		.form-container {
			background: white;
			padding: 30px;
			border-radius: 12px;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
			max-width: 400px;
			width: 100%;
			margin-bottom: 20px;
		}

		.form-container h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		.btn-custom {
			background-color: #dc3545;
			color: white;
			width: 100%;
			font-size: 18px;
			padding: 10px;
			border-radius: 8px;
			border: none;
		}

		.btn-custom:hover {
			background-color: #c82333;
		}

		.alert {
			margin-top: 15px;
			text-align: center;
		}

		/* 🔹 Estilo do link para consulta dos locais de doação */
		.link-doacao {
			display: inline-block;
			margin-top: 15px;
			text-decoration: none;
			font-size: 16px;
			font-weight: bold;
			color: #dc3545;
			border: 2px solid #dc3545;
			padding: 10px 15px;
			border-radius: 8px;
			transition: all 0.3s ease;
		}

		.link-doacao:hover {
			background-color: #dc3545;
			color: white;
		}
	</style>
</head>

<body>



	</div>
	<div class="form-container">
		<h2>Verificação para Doação de Sangue</h2>

		<form action="relatorio.php" method="post">
			<div class="mb-3">
				<label class="form-label">Idade</label>
				<input type="number" class="form-control" name="idade" placeholder="Digite sua idade" required />
			</div>

			<div class="mb-3">
				<label class="form-label">Peso (kg)</label>
				<input type="number" class="form-control" name="peso" placeholder="Digite seu peso" required />
			</div>

			<button type="submit" class="btn btn-custom">Enviar</button>
			
		</form>
		<?php

		if (isset($_GET['erro']) && $_GET['erro'] == 1) { //aqui faz a ferificação deerro, se retornar erro e e erro = 1 ele executa o não pode doar sangue, caso o contrario o usuario pode doar sangue
			echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Não pode doar sangue
  </div>
</div>';
		} else {
			echo '<div class="alert alert-success d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>
Pode soar sangue
</div>
</div> ';
		}

		?>

<a href="https://saude.sp.gov.br/ses/perfil/gestor/homepage-old2/acesso-rapido/grupo-de-sangue-componentes-e-derivados-hemorrede/locais-para-doacao-de-sangue-no-estado" target="_blank" class="link-doacao">
			🔗 Consulte aqui os lugares para doar sangue em São Paulo
		</a>
</body>

</html>