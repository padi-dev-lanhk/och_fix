<?php
/*
Template Name: Trang chu
*/
?>

  <!doctype html>
  <html lang="vn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_site_url(); ?>/img/icon/favicon.png"/>
    <title dir="ltr">Ocean Hospitality & Service Joint Stock Company</title>
    <meta name="description" content="Ocean Hospitality & Service Joint Stock Company"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/styles2.css">
	  <?php
    if ( wp_is_mobile() ) {
      echo "mobile1";
      ?>
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/custom_mobile.css">
     <?php
    } else {
      ?>
	 
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/custom.css">
<!-- 	  <link rel="stylesheet" type"text/css" href="http://192.168.1.78/indi-web/css.css">   -->
     <?php
    }
    ?>
<!--     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/custom.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700&display=swap" rel="stylesheet">
  </head>
  <body id="body_set" class="opening hide-UI view-2D zoom-large data-close controls-close pageLoad body_bgr <?php if (!isset($_COOKIE['wp_cookie_bom'])) { setcookie('wp_cookie_bom', '1', strtotime('+1 day')); echo "dont-cookie"; }else{ echo "save-cookie";} ?>">
    <div class="header">
      <div class="container">
        <div class="img_logo">
          <a href="#">
            <img src="<?php echo get_site_url(); ?>/img/logo_key.png" alt="Ocean Group">
          </a>
        </div>
        <div class="langue-menu">
          <div class="langue">
            
            <a href="http://cms.och.vn/en/homepage/">
                <img src="<?php echo get_site_url(); ?>/img/img_en.png" alt="" width="24" alt="Ocean Group">
            </a>
          </div>
          <div class="menu">
            <img class="icon_menu icon_click_menu" src="<?php echo get_site_url(); ?>/img/icon_menu1.png" alt="icon">
            <img class="menu_hover icon_click_menu" src="<?php echo get_site_url(); ?>/img/icon_menu.png" alt="icon">
            <div class="list_menu_item">
              <div class="logo-menu">
                <a href="#">
                   <img src="<?php echo get_site_url(); ?>/img/logo_key.png" alt="Ocean Group">
                </a>
              </div>
              <ul id="menu-headnavi" class="list-menu">
                <li class="menu-item">
                  <img src="img/img2.png" alt="Ocean Group">
                  <a href="/ocean-hospitality/">Giới thiệu</a>
                </li>
                <li class="menu-item">
                   <img src="img/img1.png" alt="Ocean Group">
                  <a href="/quan-he-co-dong/">Quan hệ cổ đông</a>
                </li>
                <li class="menu-item">
                   <img src="img/img3.png" alt="Ocean Group">
                  <a href="/tin-tuc-su-kien/">Tin Tức - sự kiện</a>
                </li>
                <li class="menu-item">
                   <img src="img/img4.png" alt="Ocean Group">
                  <a href="/tuyen-dung/">Tuyển dụng</a>
                </li>
                <li class="menu-item">
                   <img src="img/img5.png" alt="Ocean Group">
                  <a href="/lien-he/">Liên hệ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dot"></div>
    <div id="universe" class="scale-stretched">
      <div id="galaxy">
        <div id="solar-system" class="earth">
          <div id="saturn" class="orbit">
            <div class="pos pos_start_nhatrang">
              <div class="planet">
                <a href="http://cms.och.vn/starcity-nha-trang/" target="_blank" class="hover-padi"></a>
              </div>
            </div>
              <div class="pos pos_hoian">
                <div class="planet">
                  <a href="http://cms.och.vn/sunrise-hoi-an/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_sun">
                  <div class="planet">
                    <div class="box-padi">
                      <a href="http://cms.och.vn/ocean-hospitality/" target="_blank" class="hover-padi"></a>
                  </div>
                </div>
              </div>
              <div class="pos pos_star_halong">
                <div class="planet">
                  <a href="http://cms.och.vn/starcity-ha-long-bay/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_givraly">
                <div class="planet">
                  <a href="http://cms.och.vn/givralbakery/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_trangtien">
                <div class="planet">
                  <a href="http://cms.och.vn/trang-tien/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_sun_nhatrang">
                <div class="planet">
                  <a href="http://cms.och.vn/sunrise-nha-trang/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_duan">
                <div class="planet">
                  <a href="http://cms.och.vn/du-an/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
          </div>

        </div>
      </div>
      </div>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') { 
      document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    <script src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/js/scripts.js"></script>
<!-- 	<script type="text/javascript" src="http://192.168.1.78/indi-web/scripts1.js"></script>   -->
  </body>
  
</html>
 


  

