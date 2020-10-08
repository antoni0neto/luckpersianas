<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Somos especialistas em lavagem e Manuten��o de Persianas e Cortinas. Trabalhamos no conforto de sua resid�ncia ou empresa. Confira!">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lavagem e Manuten��o de Persianas e Cortinas, ligue: 11 970980719 | Luck Persianas | Orçamento </title>

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
	<!-- Transforma letras minusculas em maiusculas -->
		function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
		}
	
	<!-- Mascara para número de celular 9 digitos -->
		function mascara(o,f){
			v_obj=o
			v_fun=f
			setTimeout("execmascara()",1)
		}
		function execmascara(){
			v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
			v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
			v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
			v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
			return v;
		}
		function id( el ){
			return document.getElementById( el );
		}
		window.onload = function(){
			id('telefone').onkeypress = function(){
				mascara( this, mtel );
			}
		}
		
	<!-- Bloquear a digitação de texto ou numero (passar no imput se quer texto ou num)-->
		function validar(dom,tipo){
			switch(tipo){
				case'num':var regex=/[A-Za-z]/g;break;
				case'text':var regex=/\d/g;break;
			}
			dom.value=dom.value.replace(regex,'');
		}
	</script>

</head>

<body>
    <!-- Preloader 
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt="Lavagem e Limpeza de Sofás e Cortinas, ligue: 11 970980719 | Persianas Luck"></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="São Paulo, ABCD e Região"><img src="../img/core-img/placeholder.png" alt="Lavagem e Limpeza de Sofás e Cortinas, ligue: 11 970980719 | Persianas Luck"> <span>São Paulo, ABCD e Região</span></a>
                            <a href="mailto: persianasluck@gmail.com" data-toggle="tooltip" data-placement="bottom" title="CLIQUE PARA SOLICITAR ORÇAMENTO"><img src="../img/core-img/message.png" alt="Lavagem e Limpeza de Sofás e Cortinas, ligue: 11 970980719 | Persianas Luck"> <span>persianasluck@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
	
							<div class="whatsapp">
							    <a href="https://api.whatsapp.com/send?phone=5511970980719&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank" data-toggle="tooltip" data-placement="bottom" title="CLIQUE PARA SOLICITAR ORÇAMENTO VIA WHATSAPP"><img src="../img/core-img/whatsapp.png" alt="Persianas Luck | Ligue: (11) 3462-9552" /></a>
							</div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">Quem Somos</a></li>
                                    <li>
                                        <a href="#">Serviços</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="servicos/persianas.html">Persianas</a></li>
                                                <li><a href="servicos/cortinas.html">Cortinas</a></li>
                                                <li><a href="servicos/estofados.html">Estofados</a></li>
                                                <li><a href="servicos/carpete.html">Carpete</a></li>
                                                <!-- <li><a href="servicos/box.html">Box</a></li>
                                                <li><a href="servicos/janela-de-enrolar.html">Janela de Enrolar</a></li> -->
                                            </ul>
                                        </div>
                                    </li>
									<li><a href="orcamento.php">Orçamento</a></li>
                                    <li><a href="contact.php">Contato</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="" target="_blank" data-toggle="tooltip" data-placement="bottom" title="LIGUE AGORA PARA SOLICITAR O SEU OR�AMENTO"><img src="img/core-img/call2.png" alt="Luck Persianas | Ligue: (11) 3462-9552"> (11) 3462-9552</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/manutencao-persianas.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Orçamento</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orçamento</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="index.html" class="d-block mb-50"><img src="img/core-img/logo.png" alt="Luck Persianas - Lavagem e Manuten��o de Persianas e Cortinas | Ligue: (11) 97098-0719"></a>
                        <p>Somos especialistas em lavagem e Manuten��o de Persianas e Cortinas. Trabalhamos no conforto de sua residência ou empresa.</p>
                    </div>
                </div>


                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Entre em Contato</h5>

                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/location.png" alt="Lavagem e Manuten��o de Persianas e Cortinas, ligue: 11 970980719 | Luck Persianas">
                                    </div>
                                    <div class="text">
                                        <p>São Paulo <br> ABCD e Região</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <a href="https://api.whatsapp.com/send?phone=5511970980719&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank"  data-toggle="tooltip" data-placement="bottom" title="SOLICITE ORÇAMENTO VIA WHATSAPP" href="#"><img src="img/core-img/call.png" alt="Lavagem e Manuten��o de Persianas e Cortinas, ligue: 11 970980719 | Luck Persianas"></a>
                                </div>
                                <div class="text">
                                    <a href="https://api.whatsapp.com/send?phone=5511970980719&text=Quero%20solicitar%20o%20a%20servi%C3%A7o%20de%20voc%C3%AAs." target="_blank" data-toggle="tooltip" data-placement="bottom" title="SOLICITE ORÇAMENTO VIA WHATSAPP" href="#"><p>(11) 97098-0719</p>
                                    <span>Solicite orçamento via Whatsapp</span></a>
                                </div>
                            </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <a href="mailto: persianasluck@gmail.com" data-toggle="tooltip" data-placement="bottom" title="SOLICITE ORÇAMENTO VIA E-MAIL" href="#"><img src="img/core-img/message2.png" alt="Lavagem e Manuten��o de Persianas e Cortinas, ligue: 11 970980719 | Luck Persianas"></a>
                                </div>
                                <div class="text">
                                    <a href="mailto: persianasluck@gmail.com" data-toggle="tooltip" data-placement="bottom" title="SOLICITE ORÇAMENTO VIA E-MAIL" href="#"><p>comercial@Luck Persianas.com.br</p>
                                    <span>Solicite orçamento via E-mail</span></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886758.1482292672!2d-48.21023659666072!3d-22.538881510186425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce44bad42bfe59%3A0x67a756df35d6eff!2sLuck+Persianas!5e0!3m2!1spt-BR!2sbr!4v1549850738702" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Solicite o seu Orçamento</h4>

                                <form action="enviar_orcamento.php" method="post" autocomplete="off"> <!-- onSubmit="alert('Sua mensagem foi enviada com sucesso. Agradecemos o contato. Em breve retornaremos!');" -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text"class="form-control" value="<?php $nome; ?>" name="nome" id="name" placeholder="Seu nome" onkeyup="maiuscula(this); validar(this,'text');" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="<?php $email; ?>" name="email" id="email" placeholder="Seu E-mail" required >
                                            </div>
                                        </div>
										<div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php $endereco; ?>" name="endereco" id="endereco" placeholder="Seu endereço" onkeyup="maiuscula(this)" >
                                            </div>
                                        </div>
										<div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" maxlength="15" value="<?php $telefone; ?>" name="telefone" id="telefone" placeholder="Seu Telefone : (99) 99999-9999" >
                                            </div>
                                        </div>
										<div class="col-12">
                                            <div class="form-group">
												<select class="form-control" name="servico" id="servico">
												<?php function selected( $value, $selected ){ return $value==$selected ? ' selected="selected"' : ''; } ?>
													<option value="">Selecione um Serviço </option>
													<option value="Persianas"<?php echo selected( 'Persianas', $servico ); ?>>Persianas</option>
													<option value="Cortinas"<?php echo selected( 'Cortinas', $servico ); ?>>Cortinas</option>
													<option value="Estofados"<?php echo selected( 'Estofados', $servico ); ?>>Estofados</option>
													<option value="Carpete"<?php echo selected( 'Carpete', $servico ); ?>>Carpete</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" value="<?php $message; ?>" id="message" name="message" cols="30" rows="10" placeholder="Menssagem" onkeyup="maiuscula(this)" required ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn box-shadow" value="Enviar" type="submit">Enviar</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Cadastre-se para receber nossas Promoções</h2>
                        <form action="cadastrar_email.php" method="post" autocomplete="off">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Digite seu e-mail" required>
                            <button type="submit">Cadastrar</button>
                        </form>
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
                        <!-- <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/box.html"><img src="img/bg-img/box100.jpg" alt="Somos especializados em instalação de Box. Vamos até sua casa! Confira!">
                            </div>
                            <div class="news-content">
                                Box</a>
                            </div>
                        </div> -->

                        <!-- Single News Area -->
                        <!-- <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="servicos/janela-de-enrolar.html"><img src="img/bg-img/janela-de-enrolar-100.jpg" alt="Somos especializados em instalação e manutenção de Janela de Enrolar. Vamos até sua empresa! Confira!">
                            </div>
                            <div class="news-content">
                                Janela de Enrolar</a>
                            </div>
                        </div> -->
						
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