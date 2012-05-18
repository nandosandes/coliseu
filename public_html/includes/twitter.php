<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plugin Twitter</title>
<link href="../css/tweet.css" rel="stylesheet"/>
<link href="../css/jquery.tweet.css" rel="stylesheet"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
	<script src="../js/jquery.tweet.js" charset="utf-8"></script>
	<script type="text/javascript">
    
    function randomString(length) {
      var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');
      var str = '';
      for (var i = 0; i < length; i++) {
        str += chars[Math.floor(Math.random() * chars.length)];
      }
      return str;
    }
    var rnd = randomString(8);

    jQuery(document).ready(function($) {
      $(".rnd").replaceWith(rnd);


      $(".example").hide().each(function(i,e){
        $(e).before($('').
                      click(function(ev) {
                        $(e).slideToggle();
                        $(this).hide();
                        ev.preventDefault();
                      }));
      });
    });
  </script> 

<style> 
body {
	background: transparent;
}

</style>

</head>

<body background="none">

<div id="twitter">
                            <pre class="example">
    
                                $(function(){
                                  $(".tweet").tweet({
                                    join_text: "auto",
                                    username: "jewc2012",
                                    avatar_size: null,
                                    count: 3,
                                    auto_join_text_default: "",
                                    auto_join_text_ed: "",
                                    auto_join_text_ing: "",
                                    auto_join_text_reply: "",
                                    auto_join_text_url: "",
                                    loading_text: "carregando tweets..."
                                  });
                                });
                          	</pre>
                          	<div class='tweet query'></div>
                              <script type="text/javascript">
                                $(function(){ $(".example").each(function(i, e){ eval($(e).text()); }); });
                              </script>	 
                   		</div> <!-- Final div twitter -->	
                        
</body>
</html>
