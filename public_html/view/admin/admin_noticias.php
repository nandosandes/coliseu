<?php
	require_once("../../includes/admin_header.php");
?>
	
	<div id="content">
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>
		<div id="lista">
			<?php require_once("../../model/noticias.php");
					
				echo"<br/><br/><br/><a href='add_noticias.php'>Nova noticia</a>";
				Noticia::show_notices2();
				//Noticia::form_add_noticia();
			?>	
	
		</div>

	</div>
			<?php include("../../includes/menu_adm.php"); ?>
</body>

</html>
