<?php

require_once("../model/banner.php");
global $image;

require_once("../model/noticias.php");
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
<!-- Newsletter -->
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
<script>
jQuery(function($){
   $("#celular").mask("(99) 9999-9999");
});
</script>
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
                        <li><a href="#" calss="galeria"> PARCEIROS </a></li>
                        <!--<li class="line-vert-inner"></li>
                        <li><a href="#" class="galeria"> GALERIA </a></li>
                        <li class="line-vert-inner"></li>
                        <li><a href="#"> INSCRIÇÕES </a></li>-->
                        <li class="line-vert-inner"></li>
                        <li><a href="#" class="contato"> CONTATO </a></li>
                        <li class="line-vert-inner" ></li>
                        <li style="padding: 10px 5px 9px 5px;"><a href="http://twitter.com/#!/conajeeneej" target="_blank"> <img src="../images/twitter.png" /></a></li>
                        <li class="line-vert-inner" ></li>
                        <li style="padding: 7px 7px 3px 7px;"><a href="https://www.facebook.com/conajeeneej" target="_blank"> <img src="../images/facebook.png" /></a></li>
                        <li class="line-vert-inner"></li>
                        <li style="padding: 7px 5px 3px 5px;"><a href="http://youtube.com/conajeeneej" target="_blank"> <img src="../images/youtube.png" /></a></li>
                        <li class="line-vert-inner"></li>
                    </ul>
                </div>
            </div>
         </div> <!-- Final da div header -->
         
 	    <div id="cont1">
            <div id="inner_cont1" class="centraliza">
                    <div id="banner">
                        <div class="flexslider">
                            <?php
                                $image->showImages();
                            ?>
                        </div><!-- flexslider -->
                    </div><!-- banner -->
                    
                    <div id="right_home"> 
                        <div id="tweets">
                            <p class="title_tweets"> #fiquedeolho</p>
                            <iframe src="../includes/twitter.php" frameborder="0" scrolling="no" allowtransparency="none" width="270" height="255"></iframe>
                        </div> <!-- TWEETS -->

                        <div id="fb_plugin">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Finfojrnews&amp;width=275&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;appId=175631075880332" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:275px; height:290px;" allowTransparency="true"></iframe>
                        </div>
                    </div>
                    
                    <div id="left_home">
                    	<p class="title_ultimas">Últimas Notícias</p>
                    	<?php Noticia::show_last_three();?>
                    </div>
                </div>  <!-- inner_cont -->
			<div id="invisible_evento"> </div>
		</div> <!-- cont1 -->
			
            
             
        
        <!-- ################################### SEGUNDA SEÇÃO ###################################### -->
        
        
        <!--<div id="div_evento"> </div> -->
        <div class="divisor"> </div>
        
        <div id="evento_principal"> 
            <div id="evento" class="centraliza"> 
                <p class="title_evento"> O Evento</p>
                <div style="width: 600px; float: left; height: auto;">
                    <p class="subtitle_evento"> Sobre o CONAJE | ENEEJ</p>
                    <p class="text_evento"> 
                      <b>18º CONAJE</b><br /><br />
											O primeiro Congresso Nacional de Jovens Lideranças Empresariais – hoje Congresso Nacional de Jovens Empresários - aconteceu em Porto Alegre (RS), no ano de 1992. Desde então, o evento reúne jovens lideranças promovendo o intercâmbio nacional e um debate sobre as diferentes faces do empreendedorismo.<br/><br/>
											<b>3º ENEEJ</b><br/><br/>
											Em 2012, o Encontro Nordestino de Empresas Juniores chega a sua 3ª edição. Depois de sete anos, o evento retorna à Bahia, na capital do Estado, onde ocorreu sua primeira edição. O evento é um dos maiores no calendário do Movimento Empresa Júnior no ano e o principal encontro regional de 2012, prometendo reunir as seis Federações do Nordeste e empresários juniores de todo o Brasil.<br/><br/>
											<b>CONAJE + ENEEJ</b><br/><br/>
											Nesse ano, os dois eventos serão realizados em conjunto na cidade de Salvador, numa organização promovida pela Associação de Jovens Empreendedores da Bahia – AJE-BA e pela Federação das Empresas Juniores do Estado da Bahia – UNIJr-BA, através de seis das suas empresas juniores federadas.<br/> O evento promete unir os dois maiores movimentos de empreendedorismo jovem do país, promovendo palestras, cases, workshops, trocas de tecnologia e muito networking dos dois públicos entre os dias 21 e 23 de Novembro no Centro de Convenções de Salvador.
                    </p>
                    <div id="fotos_local"> 
                        <!--<iframe src="../includes/fotos_local.php" frameborder="0" allowtransparency="none" width="450" height="300" scrolling="no"> </iframe>-->
                        <div id="invisible_prog"> </div>
                    </div>
                </div>  
                
                <div id="local"> 
                    <p class="subtitle_evento"> Onde acontece o CONAJE & ENEEJ?</p>
                    <p class="text_evento" style="width: 320px">
                    <b>A cidade</b><br/><br/>
                    O CONAJE | ENEEJ acontece em Salvador, a capital do estado da Bahia e primeira capital do Brasil. A cidade é o maior polo empresarial do estado e também um dos maiores do Nordeste, sendo considerada a terceira maior cidade do país, com o 8° maior PIB entre os munícipios.Salvador é ainda sede de empresas regionais e nacionais e a Bahia tem sido vista cada vez mais com bons olhos para a implementação de novos empreendimentos.<br/> Com uma população de aproximadamente 3 milhões de pessoas, Salvador é reconhecida como polo turístico e como sede de grandes eventos, nacionais e internacionais. A cidade recebe, por exemplo, a Bienal do Livro e a Feira do Empreendedor do SEBRAE, com a edição de Salvador da Feira tendo sido escolhida três vezes consecutivas como a melhor Feira do Empreendedor do país. Além disso, a cidade foi escolhida como uma das sedes brasileiras da Copa do Mundo de 2014.<br/><br/>
										<b>Os palcos</b><br/><br/>
										O CONAJE | ENEEJ acontecerá no mesmo palco desses eventos, o Centro de Convenções do Estado da Bahia, que possui uma área de 153 mil m², onde os participantes poderão desfrutar de uma infraestrutura com 17 auditórios com capacidade entre 60 e 2.000 lugares. O Centro  de Convenções possui ainda estacionamento para 1.300 veículos, lanchonetes e restaurantes, proporcionando grande conforto nos eventos que sedia.
                    </p>
                    
                </div> <!-- FINAL DIV LOCAL -->
                <!--  
                <div id="organizacao"> 
                        <p class="subtitle_evento"> Organização</p>
                        <div id="marcas-organizacao"> 
                            <a href="http://www.unijrba.org.br/site/"> <img src="../images/unijr.png" class="org-principal" /> </a>
                            <a href="http://ajebahia.com.br"> <img src="../images/aje.png" class="org-principal" style="margin-left: 28px;"/> </a>
                            <table cellpadding="5">
                                <tr> 
                                    <td> <a href="http://www.empresajr.com"> <img src="../images/adm.png"/> </a></td>
                                    <td> <a href="http://infojr.com.br"> <img src="../images/infojr.png"/> </a></td>
                                </tr>
                                
                                <tr> 
                                    <td> <a href="http://www.produtorajunior.com/"> <img src="../images/pjr.png"/> </a></td>
                                    <td> <a href="http://www.eletrojr.ufba.br/"> <img src="../images/eletro.png"/> </a></td>
                                </tr>
                                
                                <tr> 
                                    <td> <a href="http://www.ciajunior.com.br/"> <img src="../images/cia.png"/> </a></td>
                                    <td> <a href="http://www.engetop.ufba.br/view/index.php"> <img src="../images/engetop.png"/> </a></td>
                                </tr>
                             </table>
                        </div>
                </div>-->
            </div>  
            
        </div>
        <!-- ################################### FIM - SEGUNDA SEÇÃO ###################################### -->
        
        <!-- ################################### TERCEIRA SEÇÃO ###################################### -->
        
        <div class="divisor"> </div>
        
        <div id="programacao_principal"> 
            <div id="programacao"> 
                <p class="title-programacao"> Programação</p>
                <p class="texto-programacao">
                Troca de tecnologias, Benchmarkings, Casos de Sucesso, Paineis, Geração de Negócios, Palestras de grandes empreendedores... 
                Tudo isso e muito mais você vai conferir no CONAJE | ENEEJ 2012. Confira os palestrantes e a programação que preparamos 
                especialmente pra você!</p>

				<img src="../images/quadro.jpg"/>

				<p class="texto-programacao">Entre os dias 21 e 23 de Novembro você já tem destino certo: o Congresso Nacional de Jovens 
                    Empreendedores e o Encontro Nordestino de Empresas Juniores!
				</p> 
				<div id="invisible_noticias"> </div>                 
            </div> 
              
        </div>
        
        <!-- ################################### QUARTA SEÇÃO ###################################### -->

        <div class="divisor"> </div>
        <div id="noticias_principal">
            <div id="noticias">
            	 <iframe scrolling="no" allowtransparency="none" frameborder="0" width="930" height="900" style="margin: 0 auto;" src="../includes/noticias.php"></iframe>

<!-- ##################### Seção de Galeria ####################### -->        

                 <div id="invisible_parceiros" style="margin-top: -10px;"> </div>
            </div>
        </div>
        <div class="divisor"> </div>    
        <div id="galeria_principal">  
            <div id="galeria"> 
            	<p class="title-galeria"> Parceiros </p>
                 <!--
                <div id="iframe_youtube">
	            	<iframe src="galeria.php" frameborder="0" scrolling="no" allowtransparency="none" wmode="Opaque" width="900px" height="550px" > </iframe>
                </div>
               -->
<!-- ##################### Seção de Contato ####################### -->
                             
                <div id="invisible_contato" style="margin-top: 480px;"> </div>
            </div>   
        </div>
        
        <div class="divisor"> </div>
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
                            <input type="submit" class="bt_contato" name="enviacontato" value="Enviar"/> 
                            <?php
                            if('this.value'!= ""){
							if(isset($_POST['enviacontato'])){

                                $emailsender = "alvarobonfim@infojr.com.br";

                                if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
                                else $quebra_linha = "\n"; //Se "não for Windows"
                                 
                                // Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
                                    $nome = $_POST['nome'];
                                    $email = $_POST['email'];
                                    $telefone = $_POST['telefone'];
                                    $mensagem = $_POST['mensagem'];
                                    $assunto = "Contato pelo site ";

                                 
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

                                if(!mail($emailsender, $assunto, $mensagemHTML!="", $headers ,"-r".$emailsender)){ // Se for Postfix
                                    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "n�o for Postfix"
                                    if(mail($emailsender!="", $assunto!="", $mensagemHTML!="", $headers!="")){
                                        $_SESSION['flash_contato'] = "<p class='flash_contato'> Mensagem enviada com sucesso</p>";
                                        if(isset($_SESSION['flash_contato'])){
                                            echo $_SESSION['flash_contato'];
                                            unset($_SESSION['flash_contato']);
                                        }

                                    }
                                }

                            }
							}
                            ?>
                        </form>
                    </div>
                    
                    <div id="email">
                        <div class="emails"> 
                        	<p class="mail_contact">Ainda assim ficou com alguma dúvida?<br/> Ou quer deixar alguma sugestão? Entre em contato conosco. Para isso basta preencher o formulário ao lado ou enviar e-mail para uma das nossas Coordenadorias.</p>
                        </div>
                        <div class="emails"> 
                            <p class="name_contact"> Coordenadoria Geral</p>
                            <p class="mail_contact">coordenadorexecutivo@ajebahia.com.br</p>
                        </div>
                        
                        <div class="emails"> 
				<!-- ######## Newsletter  #############-->                        
                            <div id="newsletter">
															<p class="title-newsletter"> Newsletter</p>
															<p class="text-news" style="margin-top: 8px; margin-bottom: 2px; color: #666;" > Cadastre seu email e celular e receba muitas novidades.</p>
															<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validar();" name="newsletter">
																	<input type="text" name="nome"  value="Seu nome" onFocus='this.value="";' class="input-news"/>
																	<input type="text" name="celular" id="celular" class="input-news" value="Seu celular" onFocus='this.value="";' />
																	<input type="text" name="email" value="Seu email" onFocus='this.value="";' class="input-news" style="width: 180px; float: left; margin-left: 15px;"/>
																	<input type="submit" value="Ok" class="bt_news"  name="cadastramail"/>
																	<?php 
																			if(isset($_POST['cadastramail'])){
																					$nome = $_POST['nome'];
																					$celular = $_POST['celular'];
																					$email = $_POST['email'];
																					if(mysql_query("INSERT INTO eneej_newsletter (nome,celular, email) VALUES('$nome', '$celular', '$email') ")){
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
                        </div>
                    </div><!-- email -->
                    
                </div>	<!-- contato_form -->
            </div>           <!-- contato-->
            <div id="invisible_partner"> </div> 
        </div> <!-- contato -->
		
        <div id="mapa_site">
        		<div id="footer">
                    <p class="title_parceiros">Parceiros</p>
                	<div id="parceiros"> </div>
                    <p class="title_parceiros">Grupo de Conteúdo</p>
                    <div id="grupo_conteudo"> </div>
                    	<div id="footer_redes"> 
                        	<a href="https://www.facebook.com/conajeeneej" target="_blank" title="Facebook"> <img src="../images/facebook_footer.png" /> </a>
                            <a href="http://twitter.com/#!/conajeeneej" target="_blank" title="Twitter"> <img src="../images/twitter_footer.png" />  </a>
                            <a href="http://youtube.com/conajeeneej" target="_blank" title="Youtube"> <img src="../images/youtube_footer.png" /> </a>
                            <a href="#" target="_blank" title="Foursquare"><img src="../images/foursquare_footer.png" />  </a>
                            
                        </div>
                        
                        <div id="develop"> 
                            <p style="font-family: 'Cabin Condensed', sans-serif; font-size: 12px; color: #B3B3B3; padding: 0; margin: 0; margin-bottom: 3px;"> Desenvolvimento</p>
                        	<a href="http://infojr.com.br"  target="_blank" title="Infojr UFBa" > <img src="../images/develop.png" /> </a>
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
	atualizaContador('2012','11','21','23','59','elemento');
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
