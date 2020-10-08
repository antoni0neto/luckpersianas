<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Somos especialistas em lavagem e Manuten��o de Persianas e Cortinas. Trabalhamos no conforto de sua resid�ncia ou empresa. Confira!">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lavagem e Manuten��o de Persianas e Cortinas, ligue: 11 3462-9552 | Luck Persianas</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180089512-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-180089512-1');
    </script>
	
	<script type="text/javascript">
		var piscando = document.getElementById('whatsapp');
		var interval = window.setInterval(function(){
		if(piscando.style.visibility == 'hidden'){
			piscando.style.visibility = 'visible';
		}else{
			piscando.style.visibility = 'hidden';
		}
		}, 700);
	</script>
</head>

<body>
	
    <div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=5511970980719&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank" data-toggle="tooltip" data-placement="bottom" title="CLIQUE PARA SOLICITAR OR�AMENTO VIA WHATSAPP"><img src="img/core-img/whatsapp.png" alt="Luck Persianas | Ligue: (11) 97098-0719" /></a>
	</div>
			
<?php

$mensagemHTML = 
"
Você tem uma nova mensagem:\n
Via: http://www.luckpersianas.com.br/\n
Detalhes da Mensagem:\n
Nome: ".$nome.
"\n\n E-mail: ".$email.
"\n\n Telefone: ".$telefone.
"\n\n Assunto: ".$assunto.
"\n\n Mensagem: ".$message."
\n\n Este e-mail foi enviado automaticamente através do site da Luck Persianas. Não responda.";
			$emailsender='comercial@luckpersianas.com.br';
			$emaildestinatario='comercial@luckpersianas.com.br';
			$assunto = "Nova mensagem atraves do seu site, de: ".$email;
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/plain; charset=utf-8\n";
			$headers .= "From: no-reply@luckpersianas.com.br\r\n"; //E-mail do remetente
			$headers .= "Return-Path: Luck Persianas <comercial@luckpersianas.com.br>\r\n"; //E-mail do remetente 
			/*$headers .= "Reply-To: comercial@luckpersianas.com.br\n" */
			$headers .= "X-Priority: 1\n";
	if($email !=""){
		
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
		
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
			
		$headers .= "From: Nova mensagem através do seu site <comercial@luckpersianas.com.br>\n";
		
		}
			
	}
		
?>
    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Sua mensagem foi enviada com êxito. Agradeçemos o contato.</h2>
						<h6> Em breve retornaremos!</h6>
						<div class="cta-btn"><br>
                            <a href="index.html" class="btn credit-btn box-shadow">Voltar para home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Mapa do Site</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Quem Somos</a></li>
								<li><a href="orcamento.php">Orçamento</a></li>
                                <li><a href="contact.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

				<!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Serviços</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/persianas.html"><img src="img/bg-img/persianas100.jpg" alt="Somos especializados em lavagem e limpeza de persianas e cortinas. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Persianas</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/cortinas.html"><img src="img/bg-img/cortinas100.jpg" alt="Somos especializados em lavagem e limpeza de cortinas e persianas. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Cortinas</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/carpete.html"><img src="img/bg-img/carpete100.jpg" alt="Somos especializados em Reforma de carpete. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Carpete</a>
                            </div>
                        </div>
						
                    </div>
                </div>
				
				<!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Serviços</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/estofados.html"><img src="img/bg-img/estofados100.jpg" alt="Somos especializados em Reforma de Estofados em geral. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Estofados</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/box.html"><img src="img/bg-img/box100.jpg" alt="Somos especializados em instalação de Box. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Box</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/janela-de-enrolar.html"><img src="img/bg-img/janela-de-enrolar-100.jpg" alt="Somos especializados em instalação e manutenção de Janela de Enrolar. Vamos até sua empresa! Confira!">
                            </div>
                            <div class="news-content">
                                Janela de Enrolar</a>
                            </div>
                        </div>
						
                    </div>
                </div>
				
				<!-- Redes Sociais - Facebook -->
                <div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Redes Sociais</h5>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fluckpersianas&tabs=timeline&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				</div>
				
				  </div>
                </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="logo"><img src="img/core-img/logo.png" alt="Lavagem e Limpeza de Sofás e Cortinas, ligue: 11 970980719 | Persianas Luck"></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Site desenvolvido <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.solutioncloud.com.br/" target="_blank">Solution Cloud</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>