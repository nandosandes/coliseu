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
				$id=$_GET['id'];
				$noticia = new Noticia();
				$noticia->form_edit_noticia($id);
			?>	
		</div>
	</div>

	
	
</div> <!-- fim da div all -->	
	
</body>

</html>
