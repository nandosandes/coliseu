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
				echo"";
				Noticia::form_add_noticia();
			?>	

		</div>
	</div>

	
	
</div> <!-- fim da div all -->	
	
</body>

</html>
