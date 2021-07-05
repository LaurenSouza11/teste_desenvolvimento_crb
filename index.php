<?php

$nome ='';
$telefone = '';
$email = '';

$template="

<!doctype html>
<html lang='pt-br'>
	<head>
	
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
		<title>Cadastro!</title>
		
		<style>
			html { height: 100%; }
			body { height: 100%; display: flex; }
		</style>
		
	</head>
	<body>

		<div class='container-fluid' >
			<div class='row h-100'>
				<div class='col-5 pt-4 px-5' style='background:#070245; color: white; '>
					<img src='imagens\logo-crb.svg' class='rounded' width='200px' height='auto'>
					<br><br><br>
					<h1>Entre em contato</h1>
					<br>
					<form  method='POST' action='ajax.php' id='teste' class='row g-3' style='font-size: 12px;'>
						<div class='col-8'>
							<label for='nome' class='form-label'>NOME</label>
							<input type='text' class='form-control' id='nome' value=".$nome.">
						</div>
						<div class='col-8'>
							<label for='email' class='form-label'>EMAIL</label>
							<input type='email' class='form-control' id='email' value=".$email.">
						</div>
						<div class='col-8'>
							<label for='telefone' class='form-label' >TELEFONE</label>
							<input type='tel' onKeyUp='atualiza_button();' onChange='atualiza_button();' class='form-control' id='telefone' value=".$telefone.">
						</div>
						<div class='col-8 d-grid ' >
							<button type='submit' class='btn' id='btn_enviar' name='btn_enviar' style='background:#4C5CE9; color: white; text-align:left;' >ENVIAR</button>
						</div>
					</form>
				</div>
				<div class='col-3 justify-content-center align-items-center' style='background:#EAEAEA;'>
					<img src='imagens\circulo.png' class='rounded' style=' position: absolute; margin:150px 0px 0px 250px;' width='200px;' height='auto'>
					<img src='imagens\office.PNG' class='rounded' style=' position: absolute; margin:40px 0px 0px -100px;' width='450px;' height='550'>
					<img src='imagens\\triangulo-rosa.png' class='rounded'style=' position: absolute; margin:300px 0px 0px 280px;' width='150px;' height='auto'>
				</div>
				<div class='col-4' style='background:#A2B0EB;'>
					
				</div>
			</div>
		</div>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
	</body>
</html>

<script>

	document.getElementById('btn_enviar').disabled=true;

	function atualiza_button(){
		
		var nome = document.getElementById('nome').value;
		var telefone = document.getElementById('telefone').value;
		var email = document.getElementById('email').value;
	
		if (nome != '' || telefone != '' || email != '') {
			document.getElementById('btn_enviar').disabled=false;
			
		} else {
			alert('Insira todos os campos');
		}
	}
	
</script>";

echo $template;

?>