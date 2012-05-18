<?php
require_once '../../model/foto.php';
require_once("../../includes/admin_header.php"); ?>
<div id="content">
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>
		<br/><br/><br/>
		<div id="example_wrapper" class="dataTables_wrapper">
			<div id="lista">
			<div class="title_page"><img src="../../images/foto-icon.png" style="float: left;"> <p>Fotos</p></div>
			<a href="admin_home.php" title="Inicio | Area Administrativa"><div id="home"> </div></a>
		<?php
$foto = new Foto();

$foto->formGaleria();



?>
</div>
	</div>
	<?
 include("../../includes/menu_adm.php"); 
 ?>
	</div>

	
	
</div> <!-- fim da div all -->	
	
</body>

</html>
