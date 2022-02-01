	//add_action( 'wp_head', function () {
//?>
//<script>
	var botaoEnviar = 0;
	var loop = setInterval(function(){
		botaoEnviar = document.querySelectorAll('.btn-default');
			for (let i = 0; i < botaoEnviar.length; i++) {
				botaoEnviar[i].onclick = function(){
					window.location.href="https://ongtransforme.altaperformanceweb.com.br/cadastro-de-usuario/";
				};			
			};
		}, 2000);
			
//</script>
		
//<?php
	//});
