<? require_once("../model/database.php");?>
<head>
	<title>Notícias</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />

	<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="../css/demo_table2.css" type="text/css" media="screen" />  
    <link href="../css/notice.css" type="text/css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="../css/notice.css" type="text/css" media="screen" />   
    <script type="text/javascript" charset="utf-8" src="../scripts/jquery-1.3.min.js"></script>
    <script type='text/javascript' src="../scripts/jquery.dataTables2.js"> </script>
    <script type="text/javascript">
			$(document).ready(function(){
				
				$('#example').dataTable( {

					"sPaginationType": "full_numbers"

				} );
				
				$('select.autocomplete').show();

				$('select.autocomplete').select_autocomplete();

			});
	</script>  
</head>

<body>

	<div id="notice">
		<p class="title"> Notícias</p>
        <div id="acompanhe"> 
        	<p style="width: 180px; margin-top: -7px;  float: left;"> Acompanhe também CONAJE | ENEEJ</p>
            <a href="http://twitter.com/#!/conajeeneej" target="_blank"><img src="../images/a_twitter.png" width="48" height="48"/></a>
            <a href="https://www.facebook.com/conajeeneej" target="_blank"><img src="../images/a_facebook.png" width="48" height="48"/></a>
        </div>
        
		<div id="list_notices">
			<?php require_once("../model/noticias.php");
				$pg=$_GET['pg'];	
								$numreg = 3; // Quantos registros por página vai ser mostrado
				if (!isset($pg)) {
						$pg = 0;						
				}
				$inicial = $pg * $numreg;
				
		//######### FIM dados Paginação
        // Faz o Select pegando o registro inicial até a quantidade de registros para página
        $sql = mysql_query("SELECT * FROM eneej_news LIMIT $inicial, $numreg");

        // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
        $sql_conta = mysql_query("SELECT * FROM eneej_news");   

        
        $quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação
        
        
        
        echo "<br><br>"; // Vai servir só para dar uma linha de espaço entre a paginação e o conteúdo
        
        while ($row = mysql_fetch_array($sql)) {
		?>    
		<tr class="gradeA">
		<div class="notice"> 
            	<div class="img_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"><img src="<?php echo $row['photo'];?>"  width="125" height="94"/></a>  </div>
                <div class="cont_notice"> 
                	<div class="title_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"> <?php echo $row['title'];?> </a></div>
                    <div class="resume_notice"><a href="../view/show_notice.php?id=<?php echo $row['id'];?>"> <?php echo $row['subtitle']?></a></div>
                    <a href="../view/show_notice.php?id=<?php echo $row['id'];?>" class="continue_lendo"> Continue lendo</a>
                </div>
                
            </div>	<?php	}
            include("../model/paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>}						
				//Noticia::show_notices();
				//Noticia::form_add_noticia();
			?>	
		</div>

	</div>
	
</body>

</html>
