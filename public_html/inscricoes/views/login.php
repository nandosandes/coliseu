<?php
	include("../includes/header.php");
?>

	
	<div id="content">
		
		<div id="header"> 
	        <div id="top">   
	        	<div id="marca"> </div>
			</div>
		</div>

	
		<div id="form-login">
			<?php
			if(isset($_SESSION['flash_notice'])) {
				echo "<div class='flash_bad'>".$_SESSION['flash_notice']."</div>";
				unset($_SESSION['flash_notice']);
			}
			?>
			<form action="../controllers/login.php" method="POST" >
				<p>Usuário:</p>
				<input type="text" name="email"><br />
				<p>Senha:</p>
				<input type="password" name="password"><br />
				<input type="submit" value="Entrar" class="submit">
			</form>
		</div>
	</div>
</body>
</html>
