<?php

?>

<html>
<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="../js/jquery.vegas.js" type="text/javascript"></script>
<link href="../css/jquery.vegas.css" rel="stylesheet" type="text/css" />

</header>
<body>


<script type="text/javascript">

$.vegas('slideshow', {
	  backgrounds:[
	    { src:'../images/banner/banner1.jpg', fade:1000 }
	    /*{ src:'../images/banner/deserto.jpg', fade:1000 }*/
	  ]
	})('overlay', {
	  src:'/vegas/overlays/11.png'
	});
</script>

</body>

</html>
