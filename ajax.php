<?php

if (isset($_POST['btn_enviar'])) {
	
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

	$.ajax({
		
		type: 'POST',
		url: 'email/index.php',
		data: {
			
		},
		success: function(data) {
		  alert('E-mail enviado com sucesso!')
		  history.go(-1);
		},
		error: function(data){
			alert('E-mail não enviado');
			history.go(-1);
		}
	});
	
	
	
</script>	

<?php

}

?>



