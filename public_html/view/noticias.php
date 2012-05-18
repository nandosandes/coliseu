<?php
	require_once "../includes/header.php";
	require_once "../model/noticias.php";
?>
            
<div id="content">
        	
            	<div class="main_box">
                
                    <?php
                       Noticia::show_notices2();
					   // $noticia = Noticia::find_by_id($_GET['id']);
                       // $noticia->mostrar();
                    ?>
                    <br />
                    <br />
                    <br />
                     
 				</div>

          
            
    </div> <!-- fim da div all -->	
            
<?php
	require_once "../includes/footer.php" ;
?>
