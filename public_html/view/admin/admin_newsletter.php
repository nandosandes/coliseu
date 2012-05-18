<?php
	require_once("../../includes/admin_header.php");
	require_once("../../model/database.php");
	require_once("../../model/newsletter.php");
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
			<div class="title_page"><img src="../../images/email_open.png" style="float: left;"> <p>Newsletter</p></div>
			<a href="admin_home.php" title="Inicio | Area Administrativa"><div id="home"> </div></a>
			<div id="enviar">
				<?php
					global $newsletter;
					$newsletter->listar();
				?>
			</div>
	
			
	
		</div>
	</div>
	<?php include("../../includes/menu_adm.php"); ?>
</body>

</html>
