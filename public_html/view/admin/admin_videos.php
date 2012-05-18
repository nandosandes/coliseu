<?php
	require_once("../../includes/admin_header.php");
	require_once("../../model/video.php");
	
	
	
?>

	<div id="content">
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>
		<div id="lista">
			<br /><br /><br />
			<form action="../../controller/video.php" method='POST' enctype="multipart/form-data">
					Titulo:<input type='text' name='titulo' size= '30' value='titulo'  />&nbsp;&nbsp;
					URL:   <input type='text' name='url' size= '60' value='url' />&nbsp;&nbsp;
					<input type='hidden' name='acao' value='cadastrar'>
					<input type='submit' value='Cadastrar Video'>	
			</form>
			<?php require_once("../../model/video.php");
			Video::show_videos();?>

		
		</div>
		<?php include("../../includes/menu_adm.php"); ?>
 </div>
	
</body>

</html>
