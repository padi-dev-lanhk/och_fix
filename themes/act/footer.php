<div id="footer-sidebar" class="secondary footer-page" style="clear: both;">
        <div id="footer-sidebar1" class="footer_one">
            <div class="nd_options_container">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
           </div>
        </div>
        <div class="list-footer">
            <div class="nd_options_container">
                <div class="nd_options_grid_6">
                    <div id="footer-sidebar2" class="footer_two">
                        
                            <?php
                            if(is_active_sidebar('footer-sidebar-2')){
                            dynamic_sidebar('footer-sidebar-2');
                            }
                            ?>
                        </div>
                </div>
                <div class="nd_options_grid_6">
                    <div id="footer-sidebar3">
                        <?php
                        if(is_active_sidebar('footer-sidebar-3')){
                        dynamic_sidebar('footer-sidebar-3');
                        }
                        ?>
                    </div>
               </div>
            </div>
    </div>
</div>
<?php wp_footer(); ?>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/act/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/act/custom2.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/act/assets/animate.css">
<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-content/themes/act/js/wow.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> -->
<script type="text/javascript" src="http://och.vn/cms/wp-content/themes/act/js/nicdark_navigation.js"></script>
<?php
  $now = strtotime('now');
  $time_after = date('Y-m-d H:i:s', ($now - 24*7*3600));
  $time_after = str_replace(" ", "T", $time_after);

?>
<script type="text/javascript">
	  function getPosts(){
		  let str = ""
              fetch("http://och.vn/wp-json/wp/v2/posts?orderby=date&order=desc&after=<?php echo $time_after?>")
		  		.then((res) => res.json())
		  		.then(function(response){
				  console.log(document.getElementsByClassName("count-noti"));
					  document.getElementsByClassName("count-noti")[0].innerHTML = response.length;
					  for(var i = 0; i < response.length ; i ++){
						  if(i < 5){
							  getMedia(response[i], function(result, res){
								  str = "<li><a href='"+ res.link +"'><div class='thumb'><img src="+ result +"></div><p>"+ res.title.rendered +"</p></a></li>";
								 
								  document.getElementById("new-list").innerHTML += str;
							  });

						  }
					  }
				})
	  	}
		  
		  function getMedia(response, __callback){
			  fetch("http://och.vn/wp-json/wp/v2/media/" + + response.featured_media)
		  		.then((res) => res.json())
		  		.then(function(data){
					  __callback(data.source_url, response);
				})
		  }
	  
		  getPosts();
	  </script>
<?php
if ( !wp_is_mobile() ) {
?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/wp-content/themes/act/custom_pc.css">
<!-- <link rel="stylesheet" type"text/css" href="http://192.168.1.78/indi-web/custom_pc.css"> -->
<?php
} 
?>


</body>  
</html>