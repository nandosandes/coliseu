<?php

require_once("../model/banner.php");
global $image;

#require_once("../model/database.php"); 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONAJE & ENEEJ </title>
<link href="../css/index.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='../css/tweet.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
<link href="../css/jquery.tweet.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>  
<script src="../js/carousel.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/fade.js"> </script>
</head>

<body>
	<div id="all"> 
    	<div id="invisible_home"> </div>
        <div id="header"> 
            <div id="top">   
            	<div id="marca"> </div>
	            <div id="top_right">  
                    <p class="faltam"> Faltam</p>
                    <div id="contador">
                        <div id="elemento"> </div>  
                        <div id="dias">DIAS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HORAS &nbsp;&nbsp;&nbsp;&nbsp; MINUTOS &nbsp;&nbsp;&nbsp;&nbsp;SEG.</div>
                    </div>
	            </div><!-- top right -->
            </div>
            <div id="menu_ex">
                <div id="menu">
                    <ul> 
                        <li class="line-vert-inner"></li>
                        <li style="padding: 7px 5px 5px 5px;"><a href="#" class="home" title="Voltar a home"> <img src="../images/home.png" /> </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="evento"> O EVENTO </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="programacao"> PROGRAMAÇÃO </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="noticias"> NOTÍCIAS </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#"> PARCEIROS </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="galeria"> GALERIA </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#"> INSCRIÇÕES </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="contato"> CONTATO </a></li>
                        <li class="line-vert-inner" ></li>
                        <li style="padding: 10px 5px 9px 5px;"><a href="http://twitter.com" target="_blank"> <img src="../images/twitter.png" /></a></li>
                        <li class="line-vert-inner" ></li>
                        <li style="padding: 7px 7px 3px 7px;"><a href="http://facebook.com" target="_blank"> <img src="../images/facebook.png" /></a></li>
                        <li class="line-vert-inner"></li>
                        <li style="padding: 7px 5px 3px 5px;"><a href="http://facebook.com" target="_blank"> <img src="../images/youtube.png" /></a></li>
                        <li class="line-vert-inner"></li>
                    </ul>
                </div>
            </div>
         </div> <!-- Final da div header -->
         
 	    <div id="cont1">
            <div id="inner_cont1" class="centraliza">
                    <div id="banner">
                        <!-- Place somewhere in the <body> of your page -->
                        <div class="flexslider">
                        	<?php
                        		$image->showImages();
                        	?>
                        </div><!-- flexslider -->
                     </div><!-- banner -->
                   	
                     <div id="bottom-banner">
                        <div id="tweets">
                            <p class="title_tweets"> #fiquedeolho</p>
                            <iframe src="../includes/twitter.php" frameborder="0" scrolling="no" allowtransparency="none" width="330" height="190"></iframe>
                        </div> <!-- TWEETS -->
        
                        <div id="apoio"> 
                            <p class="title_apoio"> Patrocinadores</p>
                            <div id="img_patrocinio"> 
                                <img src="../images/oi.png" />
                                <img src="../images/ambev.png" />
                            </div>
                        </div><!-- apoio -->
                        
                        <div id="newsletter">
                            <p class="title-newsletter"> Newsletter</p>
                            <p class="text-news" style="margin-top: 8px; margin-bottom: 2px; color: #666;" > Cadastre seu email e receba muitas novidades.</p>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validar();" name="newsletter">
                                <input type="text" name="nome"  value="Seu nome" onFocus='this.value="";' class="input-news"/>
                                <input type="text" name="email" value="Seu email" onFocus='this.value="";' class="input-news" style="width: 180px; float: left; margin-left: 15px;"/>
                                <input type="submit" value="OK!" class="bt_news"  name="cadastramail"/>
                                <?php 
        							if(isset($_POST['cadastramail'])){   
                                        $nome = $_POST['nome'];
                                        $email = $_POST['email'];
                                        if(mysql_query("INSERT INTO eneej_newsletter (nome, email) VALUES('$nome', '$email') ")){
                                            $_SESSION['flash_notice'] = "<p class='success'> Email cadastrado com sucesso =) </p>" ;
                                        }
										if(isset($_SESSION['flash_notice'])){
											echo $_SESSION['flash_notice'];
											unset($_SESSION['flash_notice']);
										}
                                    }
                                ?>
                             </form>
                             <div id="invisible_evento"> </div>
                        </div>
                                                     
                  	</div><!-- bottom banner-->	                    
                    
				</div>  <!-- inner_cont -->
			</div><!-- cont1 -->
            
             
        
        <!-- ################################### SEGUNDA SEÇÃO ###################################### -->
        
        
        <div id="div_evento"> </div>
        
        <div id="evento_principal"> 
            <div id="evento" class="centraliza"> 
                <p class="title_evento"> O Evento</p>
                <div style="width: 280px; float: left; height: auto;">
                    <p class="subtitle_evento"> Sobre</p>
                    <p class="text_evento"> 
                        O EPEJ - Encontro Paulista de Empresas Juniores - é um Congresso de Empresários Juniores, o maior evento realizado pela FEJESP que desde 1993 objetiva a integração dos congressistas divulgando o MEJ e permitindo benchmarking, network entre as Empresas Juniores e o mercado.
        
        Além disso, capacita os participantes para que se tornem empreendedores de sucesso, por meio de palestras e dinâmicas com profissionais do mundo empresarial e empresas renomadas.<br />
                        Além disso, capacita os participantes para que se tornem empreendedores de sucesso, por meio de palestras e dinâmicas com profissionais do mundo empresarial e empresas renomadas.
                    </p>
                </div>  
                
                <div id="local"> 
                    <p class="subtitle_evento"> O local</p>
                    <p class="text_evento" style="width: 400px">  Salvador - Bahia, Brasil. Terras de encantos mil, se tornem empreendedores de sucesso, por meio de palestras e dinâmicas com profissionais do mundo empresarial e empresas renomadas.</p>
                    <div id="fotos_local"> 
                        <iframe src="../includes/fotos_local.php" frameborder="0" allowtransparency="none" width="450" height="300" scrolling="no"> </iframe>
                        <div id="invisible_prog"> </div>
                    </div>
                </div> <!-- FINAL DIV LOCAL -->
                
                <div id="organizacao"> 
                        <p class="subtitle_evento"> Organização</p>
                        <div id="marcas-organizacao"> 
                            <a href="#"> <img src="../images/unijr.png" class="org-principal" /> </a>
                            <a href="#"> <img src="../images/aje.png" class="org-principal" style="margin-left: 28px;"/> </a>
                             <table cellpadding="5">
                                <tr> 
                                    <td> <a href="#"> <img src="../images/adm.png"/> </a></td>
                                    <td> <a href="#"> <img src="../images/infojr.png"/> </a></td>
                                </tr>
                                
                                <tr> 
                                    <td> <a href="#"> <img src="../images/pjr.png"/> </a></td>
                                    <td> <a href="#"> <img src="../images/eletro.png"/> </a></td>
                                </tr>
                                
                                <tr> 
                                    <td> <a href="#"> <img src="../images/cia.png"/> </a></td>
                                    <td> <a href="#"> <img src="../images/engetop.png"/> </a></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
            </div>   
        </div>
        <!-- ################################### FIM - SEGUNDA SEÇÃO ###################################### -->
        
        <!-- ################################### TERCEIRA SEÇÃO ###################################### -->
        
        <div id="div_programacao"> </div>
        
        <div id="programacao_principal"> 
            <div id="programacao"> 
<!--                <p class="title-programacao"> Programação</p> -->
                <p style="font-family: 'Righteous', sans-serif; font-size: 60px; color: white; text-shadow: 1px 1px 1px black; text-align: center; padding-bottom: 240px;"> <b style="color: gold; font-size: 77px;"> AGUARDE! </b><br />Em breve diversas novidades sobre a programação do evento. <div id="invisible_noticias"> </div></p>
                
            </div>    
        </div>
        
        <!-- ################################### QUARTA SEÇÃO ###################################### -->
        <div id="div_noticias"> </div>
        <div id="noticias_principal">
            <div id="noticias">
            	 <iframe scrolling="no" allowtransparency="none" frameborder="0" width="930" height="900" style="margin: 0 auto;" src="../includes/noticias.php"></iframe>
                 <div id="invisible_galeria" style="margin-top: -10px;"> </div>
            </div>
        </div>
        
        <div id="div_galeria"></div>
        <div id="galeria_principal">  
            <div id="galeria"> 
            	<p class="title-galeria"> Galeria </p>
                <div id="iframe_youtube">
	            	<iframe src="../includes/galeria_video2.php" wmode="transparent" frameborder="0" scrolling="no"  width="510px" style="z-index:-10" height="550px"  "> </iframe>
                </div>
                  <div id="invisible_contato" style="margin-top: -152px;"> </div>
            </div>   
        </div>
        
        <div id="div_contato"> </div>
        <div id="contato_principal"> 
        	<div id="contato"> 
            	<p class="title_contato"> Contato</p>
            	<div id="contato_form">
                	<div id="form_contato"> 
                    	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return enviacontato();" name="contato">
                        	<input type="text" name="nome" class="input_contato" onFocus='this.value="";' value="Digite seu nome"/><br />
                            <input type="text" name="email" class="input_contato" onFocus='this.value="";' value="Digite seu email"/><br />
                            <input type="text" name="telefone" class="input_contato" onFocus='this.value="";' value="Digite seu telefone"/><br />
                            <textarea class="textarea_contato" name="mensagem" onFocus='this.value="";' value="Digite sua mensagem">Digite uma mensagem</textarea>
                            <input type="submit" class="bt_contato" name="enviacontato" /> 
                            <?php
                            if(isset($_POST['enviacontato'])){

                                $emailsender = "marciovicente@infojr.com.br";

                                if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
                                else $quebra_linha = "\n"; //Se "não for Windows"
                                 
                                // Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
                                    $nome = $_POST['nome'];
                                    $email = $_POST['email'];
                                    $telefone = $_POST['telefone'];
                                    $mensagem = $_POST['mensagem'];
                                    $assunto = "Contato pelo site";

                                 
                                /* Montando a mensagem a ser enviada no corpo do e-mail. */
                                $mensagemHTML = 'Nome:<b> ' .$nome.'</b><br />' ;
                                $mensagemHTML .= 'Email: <b>' .$email.'</b><br />';
                                $mensagemHTML .= 'Telefone:<b> ' .$telefone.'</b><br />';
                                $mensagemHTML .= 'Mensagem:<b> ' .$mensagem.'</b><br />'; 
                                 
                                /* Montando o cabeçalho da mensagem */
                                $headers = "MIME-Version: 1.1" .$quebra_linha;
                                $headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
                                // Perceba que a linha acima cont�m "text/html", sem essa linha, a mensagem n�o chegar� formatada.

                                $headers .= "From: " . $email.$quebra_linha;

                                if(!mail($emailsender, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
                                    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "n�o for Postfix"
                                    if(mail($emailsender, $assunto, $mensagemHTML, $headers)){
                                        $_SESSION['flash_contato'] = "<p class='flash_contato'> Mensagem enviada com sucesso</p>";
                                        if(isset($_SESSION['flash_contato'])){
                                            echo $_SESSION['flash_contato'];
                                            unset($_SESSION['flash_contato']);
                                        }

                                    }
                                }

                            }
                            ?>
                        </form>
                    </div>
                    
                    <div id="email">
                        <div class="emails"> 
                            <p class="name_contact"> Patric Piton</p>
                            <p class="cargo">Coordenador Geral </p>
                            <p class="mail_contact">coordenadorexecutivo@ajebahia.com.br</p>
                        </div>
                        
                        <div class="emails"> 
                            <p class="name_contact"> Patric Piton</p>
                            <p class="cargo">Coordenador Geral </p>
                            <p class="mail_contact">coordenadorexecutivo@ajebahia.com.br</p>
                        </div>
                        
                        <div class="emails"> 
                            <p class="name_contact"> Patric Piton</p>
                            <p class="cargo">Coordenador Geral </p>
                            <p class="mail_contact">coordenadorexecutivo@ajebahia.com.br</p>
                        </div>
                        
                        <div class="emails"> 
                            <p class="name_contact"> Patric Piton</p>
                            <p class="cargo">Coordenador Geral </p>
                            <p class="mail_contact">coordenadorexecutivo@ajebahia.com.br</p>
                        </div>
                    </div><!-- email -->
                    
                </div>	<!-- contato_form -->
            </div>           <!-- contato-->
        </div> <!-- contato -->

        <div id="mapa_site">
        		<div id="footer">
                	
                    	<div id="footer_redes"> 
                        	<a href="#" target="_blank" title="Facebook"> <img src="../images/facebook_footer.png" /> </a>
                            <a href="#" target="_blank" title="Twitter"> <img src="../images/twitter_footer.png" />  </a>
                            <a href="#" target="_blank" title="Youtube"> <img src="../images/youtube_footer.png" /> </a>
                            <a href="#" target="_blank" title="Foursquare"><img src="../images/foursquare_footer.png" />  </a>
                            
                        </div>
                        
                        <div id="develop"> 
                            <p style="font-family: 'Cabin Condensed', sans-serif; font-size: 12px; color: #B3B3B3; padding: 0; margin: 0; margin-bottom: 3px;"> Desenvolvimento</p>
                        	<a href="http://infojr.com.br" title="Infojr UFBa" > <img src="../images/develop.png" /> </a>
                        </div>
               </div>
        </div>
        
        
	</div>    <!-- final div all-->
    <!-- ################################### ACAAAAAAAAAABOU ###################################### -->
    
<script type="text/javascript">
function atualizaContador(YY,MM,DD,HH,MI,saida) {
	var SS = 00;
	var hoje = new Date();
	var futuro = new Date(YY,MM-1,DD,HH,MI,SS);

	var ss = parseInt((futuro - hoje) / 1000);
	var mm = parseInt(ss / 60);
	var hh = parseInt(mm / 60);
	var dd = parseInt(hh / 24);

	ss = ss - (mm * 60);
	mm = mm - (hh * 60);
	hh = hh - (dd * 24);

	var faltam = '';
	faltam += (dd && dd > 1) ?'<div class="time">'+ dd+'</div>' : (dd==1 ? '1 &nbsp;&nbsp; ' : '');
faltam += (toString(hh).length) ? (hh<10 ? '<div class="time"> 0'+hh+'</div>' : hh+'&nbsp;&nbsp;') : '';
faltam += (toString(mm).length) ? (mm<10 ? '<div class="time"> 0'+mm+'</div>	' : mm+'&nbsp;&nbsp;') : '';
faltam += (ss<10 ? '0'+ss : ss);

	if (dd+hh+mm+ss > 0) {
		document.getElementById(saida).innerHTML = faltam;
		setTimeout(function(){atualizaContador(YY,MM,DD,HH,MI,saida)},1000);
	} else {
		document.getElementById(saida).innerHTML = '';
		setTimeout(function(){atualizaContador(YY,MM,DD,HH,MI,saida)},1000);
	}
}

window.onload=function(){
	atualizaContador('2012','07','14','23','00','elemento');
}
			

function validar(){
	d = document.newsletter;
	if ((d.nome.value == "") || (d.nome.value == "Seu nome")) {
		alert ("Por favor preencha o campo nome");
		return false;
	}
	if ((d.email.value == "") || (d.email.value == "Seu email")) {
		alert ("Por favor preencha o campo email");
		return false;
	}
	
	var email = document.getElementsByName('email')[0];
	if (!checkMail(email)) {
		alert("Email inválido");
	}
		
	return true;
	
}
function enviacontato(){
	e = document.contato;	
	if ((e.nome.value == "") || (e.nome.value == "Digite seu nome")) {
		alert ("Por favor preencha o campo nome");
		return false;
	}
	if ((e.email.value == "") || (e.email.value == "Digite seu email")) {
		alert ("Por favor preencha o campo email");
		return false;
	}
	
	if ((e.telefone.value == "") || (e.email.value == "Digite seu telefone")) {
		alert ("Por favor preencha o campo telefone");
		return false;
	}
	
	
	var email = document.getElementsByName('email')[0];
	if (!checkMail(email)) {
		alert("Email inválido");
		return false;
	}
	
	return true;
}

function checkMail(mail){
	var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
	if(typeof(mail) == "string"){
			if(er.test(mail)){ return true; }
	}else if(typeof(mail) == "object"){
			if(er.test(mail.value)){ 
									return true; 
							}
	}else{
			return false;
			}
}
						
					
			
</script>




</body>
</html>
