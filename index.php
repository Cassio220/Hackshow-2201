

<script type="text/javascript">

	var custo = "2";

	var descricao_chk = "CHECKER ALLBINS ( GG )";

	var audio = new Audio('live.mp3');

</script>

<!DOCTYPE html>

<html>

<head>

	<title>CHK</title>

	<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- bootstrap -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- fontawesome -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

	<!-- toastr -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">



	<style type="text/css">

		.nav-tabs{

		  background-color:#232b4a;

		}

		.nav-tabs li a{

			color: #fff;

		}

		.tab-content{

		    background-color:#0d0e24;

		    color:#fff;

		    padding:5px

		}

		.nav-tabs > li > a{

		  border: medium none;

		}

		.nav-tabs > li > a:hover{

		  background-color: #0d0e24 !important;

		    border: medium none;

		    border-radius: 0;

		    color:#fff;

		}

		.active {

			background-color: #0d0e24 !important;

		}

		textarea{

			background: #232b4a;

			color: #fff;

			border: none;

			width: 100%;

			border: none;

			padding: 10px;

			resize: none;

		}

		textarea:focus{

			box-shadow: 0 0 0 0;

		    border: 0 none;

		    outline: 0;

		}

	</style>

</head>

<body style="background: #14192e;" class="p-3">



	<div class="container p-0">

		<a href="../../" class="btn btn-dark shadow" style="background: #0d0e24;"><i class="fas fa-sign-out-alt"></i> Voltar</a>

	</div>



	<div class="container text-white rounded shadow p-3 my-4" style="background: #232b4a;">



		<!-- descrição -->

		<div class="container-fluid">

			<h3><i class="fas fa-cogs"></i> Funções</h3>

			<span>Aqui você pode interagir com o checker: <b>iniciar, pausar, parar </b>e<b> limpar</b></span>

		</div>



		<!-- botoes de ação -->

		<div class="container-fluid mt-3">

			<div class="buttons">

				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-start"><i class="fas fa-play"></i></button>

				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-pause" disabled><i class="fas fa-pause"></i></button>

				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-stop" disabled><i class="fas fa-stop"></i></button>

				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-clean"><i class="fas fa-trash-alt"></i></button>

			</div>

		</div>



		<!-- status do checker -->

		<div class="container-fluid mt-3">

			<span><b>STATUS</b></span><br>

			<span class="badge badge-warning" id="estatus">Aguardando inicio...</span>

		</div>

	</div>



	<!-- tabs -->

	<div class="container p-0 shadow">

		<ul class="nav nav-tabs" id="myTab" role="tablist" style="border: none;">

			<li class="nav-item">

				<a class="nav-link active" style="border: none;" id="home-tab" data-toggle="tab" href="#chk-home" role="tab" aria-controls="home" aria-selected="true"><i class="far fa-credit-card" style="color: #fff;"></i></a>

			</li>

			<li class="nav-item">

				<a class="nav-link" style="border: none;" id="profile-tab" data-toggle="tab" href="#chk-lives" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-thumbs-up fa-lg" style="color: #fff;"></i></a>

			</li>

			<li class="nav-item">

				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-dies" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-thumbs-down fa-lg" style="color: #fff;"></i></a>

			</li>

			<li class="nav-item">

				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-errors" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-times fa-lg" style="color: #fff;"></i></a>

			</li>

			<li class="nav-item">

				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-infotab" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-exclamation-circle text-warning fa-lg"></i></a>

			</li>

		</ul>

		<div class="tab-content" id="myTabContent">

			<!-- HOME DO CHECKER -->

			<div class="tab-pane fade show active px-3 pt-4 pb-3" id="chk-home" role="tabpanel" aria-labelledby="home-tab">



			
				

				<span class="text-warning"><i class="fas fa-exclamation-circle"></i> <script>document.write(descricao_chk)</script></span>



				<div class="my-2">

					Aprovadas: <span class="val-lives" style="font-weight: bold;">0</span>

					Reprovadas: <span class="val-dies" style="font-weight: bold;">0</span>

					Errors: <span class="val-errors" style="font-weight: bold;">0</span>

					Testadas: <span class="val-tested" style="font-weight: bold;">0</span>

					Total: <span class="val-total" style="font-weight: bold;">0</span>

				</div>



				<div class="container-fluid p-0 mt-2">

					<textarea rows="10" cols="rounded shadow"></textarea>

				</div>



			</div>



			<!-- LIVES DO CHECKERS -->

			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-lives" role="tabpanel" aria-labelledby="home-tab">



				<h5>Aprovadas</h5>

				<span>Total: <span class="val-lives">0</span></span>

				

				<div id="lives" style="overflow:auto;">

					

				</div>



			</div>



			<!-- DIES DO CHECKER -->

			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-dies" role="tabpanel" aria-labelledby="home-tab">



				<h5>Reprovadas</h5>

				<span>Total: <span class="val-dies">0</span></span>

				

				<div id="dies" style="overflow:auto;">

					

				</div>



			</div>



			<!-- ERRORS DO CHECKER -->

			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-errors" role="tabpanel" aria-labelledby="home-tab">



				<h5>Erros</h5>

				<span>Total: <span class="val-errors">0</span></span>

				

				<div id="errors" style="overflow:auto;">

					

				</div>



			</div>



			<!-- INFO DO CHECKER -->





		</div>	

	</div>



	<!-- jquery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- bootstrap -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

	<!-- toastr -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



	<script type="text/javascript">

		$(document).ready(function() {



			// variaveis de informação

			var testadas = [];

			var total = 0;

			var tested = 0;

			var lives = 0;

			var dies = 0;

			var errors = 0;

			

			var stopped = true;

			var paused = true;



			function removelinha(){

				var lines = $("textarea").val().split('\n');

                lines.splice(0, 1);

                $("textarea").val(lines.join("\n"));

			}



			



			function testar(tested,total){

				// verifica se nao está parado o checker

				if (stopped == true) {

					return false;

				}

				// verifica se nao está pausado o checker

				if (paused == true) {

					return false;

				}

				// verifica se ja terminou de testar

				if (tested >= total) {

					console.log('finalizado '+tested+" de "+total);

					$("#estatus").attr("class","badge badge-success").text("Teste finalizado");

					toastr["success"]("Teste de "+total+" itens finalizado");

					$("#chk-start").removeAttr('disabled');

					$("#chk-clean").removeAttr('disabled');

					$("#chk-stop").attr("disabled","true");

					$("#chk-pause").attr("disabled","true");

					return false;

				}

				// conteudo que será testado

				var conteudo =  $("textarea").val().trim().split('\n')[0];



				$.ajax({

					url: 'api.php',

					type: 'GET',

					data: {lista: conteudo},

				})

				.done(function(response) {



					// verifica se nao está parado o checker

					if (stopped == true) {

						return false;

					}

					// verifica se nao está pausado o checker

					if (paused == true) {

						return false;

					}



					tested++;



					// verifica o retorno

					if (response.indexOf("Aprovada") >= 0) {
					
					    audio.play();

						lives++

						$("#estatus").attr("class","badge badge-success").text(conteudo+" -> LIVE");

						toastr["success"]("LIVE "+conteudo);

						$("#lives").append(response+"<br>");


					}else if (response.indexOf("Reprovada") >= 0) {

						dies++

						$("#estatus").attr("class","badge badge-danger").text(conteudo+" -> DIE");

						toastr["error"]("Die "+conteudo);

						$("#dies").append(response+"<br>");

					}else{

						errors++;

						$("#estatus").attr("class","badge badge-warning").text(conteudo+" -> ERROR");

						toastr["warning"]("Error "+conteudo);

						$("#errors").append(response+"<br>");

					}



					// atualiza resultados

					$(".val-total").text(total);

					$(".val-lives").text(lives);

	                $(".val-dies").text(dies);

	                $(".val-errors").text(errors);

	                $(".val-tested").text(tested);

	                // remove linha

	                removelinha();



					console.log(response);



					// executa a função novamente

					testar(tested,total);

				})

				.fail(function() {

					return false;

				})

			}





			// ========== START ========== //

			function start() {

				var lista =  $("textarea").val().trim().split('\n');

				var total = lista.length;

				$(".val-total").text(total);

				stopped = false;

				paused = false;



				toastr["success"]("Checker Iniciado.");

				$("#estatus").attr("class","badge badge-success").text("Checker iniciado, aguarde...");



				// libera os botoes

				$("#chk-stop").removeAttr('disabled');

				$("#chk-pause").removeAttr('disabled');

				$("#chk-start").attr("disabled","true");

				$("#chk-clean").attr("disabled","true");



				// inicia o teste

				testar(tested,total);

			}

			$("#chk-start").click(function() {

				if ($('textarea').val().trim() == "") {

					$('textarea').focus();

				}else{

					start();

				}

			});

			// ========== PAUSE ========== //

			function pause(){

				$("#chk-start").removeAttr('disabled');

				$("#chk-pause").attr("disabled","true");

				paused = true;

				console.log('checker pausado');

				toastr["info"]("Checker Pausado!");

				$("#estatus").attr("class","badge badge-info").text("Checker pausado...");

			}

			$("#chk-pause").click(function() {

				pause();

			});

			// ========== STOP ========== //

			function stop() {

				stopped = true;

				$("#chk-start").removeAttr('disabled');

				$("#chk-clean").removeAttr('disabled');

				$("#chk-stop").attr("disabled","true");

				$("#chk-pause").attr("disabled","true");

				console.log('checker parado');

				toastr["info"]("Checker Parado!");

				$("#estatus").attr("class","badge badge-secondary").text("Checker parado...");

			}

			$("#chk-stop").click(function() {

				stop();

			});

			// ========== CLEAN ========== //

			function clean(){

				testadas = [];

				total = 0;

				tested = 0;

				lives = 0;

				dies = 0;

				errors = 0;

				stopped = true;

				// atualiza resultados

				$(".val-total").text(total);

				$(".val-lives").text(lives);

                $(".val-dies").text(dies);

                $(".val-errors").text(errors);

                $(".val-tested").text(tested);

                $("textarea").val("");



                toastr["info"]("Checker Limpo!");

			}

			$("#chk-clean").click(function() {

				clean();

			});



		});

	</script>

</body>

</html>