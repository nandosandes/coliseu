<?php
	require_once("../../includes/admin_header.php");
?>

<div id="all">
	<div id="content">

		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>

		<div id="lista">
			<p style="font-family:'Cabin Condensed', sans-serif; font-size: 33px; text-align: center; color: #666; text-shadow: 1px 1px 1px #FFF;"> Área Administrativa</p>
			<table cellpadding="22">	
				<tr>
					<td> 
						<a href="../admin/admin_banner.php"> <img src="../../images/slide-icon.png">
						<p class="title_menu">Banner</p></a>
					</td>
				
					<td> 
						<a href="../admin/admin_noticias.php"><img src="../../images/news-icon.png">
						<p class="title_menu">Notícias</p></a>
					</td>

					<td>
						<a href="../admin/admin_fotos.php"><img src="../../images/foto-icon.png">
						<p class="title_menu">Galeria de Fotos</p></a>
					</td>
				
					<td> 
						<a href="../admin/admin_videos.php"><img src="../../images/video-icon.png">
						<p class="title_menu">Galeria de Vídeos</p></a>
					</td>
					
					<td> 
						<a href="../admin/admin_newsletter.php"><img src="../../images/email_open.png">
						<p class="title_menu">Newsletter</p></a>
					</td>
					
					<td> 
						<a href="../../controller/logout.php"><img src="../../images/logout-icon.png">
						<p class="title_menu">&nbsp;&nbsp;Sair</p></a>
					</td>
				</tr>

			</table>	

		</div>
	
	</div>
	
 </div> <!-- fim da div all -->	
	
</body>

</html>
