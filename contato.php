<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css" href="/resources/css/contato.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/contatoScript.js"></script>
<title>Contato - LPTVBr</title>
</head>
<body>
	<?php include_once 'template/header.php';?>
	
	<section class="mainSection">
		<?php
		
		if (isset ( $_POST ['submit'] )) {
			$para = "linkinparktvbr@gmail.com";
			$nome = $_POST ['nome'];
			$email = $_POST ['email'];
			$titulo = $_POST ['titulo'];
			$assunto = $_POST ['assuntoSelected'];
			$mensagem = $_POST ['mensagem'];
			
			require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
			
			$mail = new PHPMailer ();
			
			$mail->CharSet = "UTF-8";
			
			$mail->isSMTP ();
			$mail->SMTPAuth = true;
			$mail->Host = "linkinparktvbr.com";
			$mail->Username = 'lptvbremail@linkinparktvbr.com';
			$mail->Password = 'jfpsb5982jf';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			
			$mail->From = "lptvbremail@linkinparktvbr.com";
			$mail->FromName = "LPTVBr - Site";
			$mail->addAddress ( 'linkinparktvbr@gmail.com', 'LinkinParkTVBr' );
			$mail->addReplyTo ( $email, $nome );
			
			$mail->Subject = $assunto . " : " . $titulo;
			$mail->Body = $mensagem;
			
			$result = $mail->send ();
			
			if ($result) {
				echo "<h1 class=\"mensagem\">Sua mensagem foi enviada com sucesso! <a href=\"/contato/\">Enviar mais uma!</a></h1>";
			} else {
				echo "<h1 class=\"mensagem\">Sua mensagem não foi enviada!</h1><br>
    				<p class=\"mensagem\">Volte a tela para tentar novamente.</p><br>
    				<div class=\"botao-wrapper\"><button onclick=\"voltarTela()\">Voltar Para Formulário</button></div>";
			}
		} else {
			?>
		<h1 class="contato-header">Contato</h1>
		<article class="contato-texto">
			<p>
				Sinta-se a vontade para mandar mensagens para nós sobre qualquer
				assunto: pedidos de legenda, erros em nomes de músicas e/ou
				vídeos, erros em links, erros em imagens, datas e etc.
			</p>
			<p>
				Esta seção também pode ser usada para mandar mensagens sobre
				aspectos do site como: qualquer tipo de erro de layout em
				computadores e/ou mobile, sugestões de cores, posicionamento de
				elementos e etc.
			</p>
		</article>
		<article class="contato-main">
			<form class="contato-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
				Título:<input required type="text" name="titulo"><br>
				Seu nome:<input required type="text" name="nome"><br>
				Seu e-mail:<input required type="text" name="email"><br>
				Assunto:<select required name="assunto" id="assuntoSelect" 
						onchange="document.getElementById('idAssuntoSelected').value=this.options[this.selectedIndex].text">
					<option value="erro-musica">Erro em músicas</option>
					<option value="erro-video">Erro em vídeos</option>
					<option value="erro-site">Erro no site</option>
					<option value="pedido-legenda">Pedido de legendas</option>
					<option value="outros">Outros</option>
				</select><br>
				<div class="assuntoTextoWrapper">
					<label id="assuntoSelectedTexto"></label>
				</div>
				<!-- Guarda texto selecionado na ComboBox -->
				<input type="hidden" name="assuntoSelected" id="idAssuntoSelected"></input>
				Mensagem:<br>
				<textarea required rows="10" cols="75" name="mensagem"></textarea>
				<br>
				<input id="botao-submit" type="submit" name="submit" value="Enviar Mensagem">
			</form>
		</article>
		<?php
		} // fechando ELSE ?>
	</section>
	
	<?php include_once 'template/footer.php';?>
</body>
</html>