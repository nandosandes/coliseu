<?php
	require_once("../../includes/admin_header.php");
	
	if(isset($SESSION['flash_notice'])){
		echo $SESSION['flash_notice'];
		unset($SESSION['flash_notice']);
	}
?>

	<div id="content">
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>
		<div id="lista">
				<br/><br/><br/>
		<div id="example_wrapper" class="dataTables_wrapper">
			<div class="title_page"><img src="../../images/slide-icon.png" style="float: left;"> <p>Banner</p></div>
			<a href="admin_home.php" title="Inicio | Area Administrativa"><div id="home"> </div></a>
			<div id="enviar">
				<div id="aviso">
					<p>1) Só enviar figuras de tamanho 930 x 226px</p>
					<p>2) Formatos de arquivos aceitos: <b>jpeg, jpg, png e gif </b></p>
					<p>3) Carregue até 3 banners</p>
				</div>
				<form action='../../controller/banner.php' method='POST' enctype="multipart/form-data">
					<input type='file' name='picture1' /><br/>
					<input type='file' name='picture2' /><br/>
					<input type='file' name='picture3' /><br/>
					<input type='submit' value='Enviar' style="margin-top: 10px; font-size: 18px;" />
				</form>
			</div>
	
			
	
		</div>
	</div>
	<?php include("../../includes/menu_adm.php"); ?>
</body>

</html>
