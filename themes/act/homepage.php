<?php
/* Template Name: home page */
?>
  <!doctype html>
  <html lang="en">
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
     <?php
    }
    ?>
<!--     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/custom.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700&display=swap" rel="stylesheet">
  </head>
  <body id="body_set" class="opening hide-UI view-2D zoom-large data-close controls-close pageLoad body_bgr">
    <div class="header">
      <div class="container">
        <div class="img_logo">
          <a href="#">
            <img src="<?php echo get_site_url(); ?>/img/logo_key.png" alt="Ocean Group">
          </a>
        </div>
        <div class="langue-menu">
          <div class="langue">
            
            <a href="http://cms.och.vn/">
                <img src="<?php echo get_site_url(); ?>/img/img_vn.png" alt="" width="24" alt="Ocean Group">
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
                  <img src="<?php echo get_site_url(); ?>/img/img2.png" alt="Ocean Group">
                  <a href="/ocean-hospitalitys/">Introduction</a>
                </li>
                <li class="menu-item">
                   <img src="<?php echo get_site_url(); ?>/img/img1.png" alt="Ocean Group">
                  <a href="/shareholder-relation/">Shareholder Relations</a>
                </li>
                <li class="menu-item">
                   <img src="<?php echo get_site_url(); ?>/img/img3.png" alt="Ocean Group">
                  <a href="/press-release/">Press releases</a>
                </li>
                <li class="menu-item">
                   <img src="<?php echo get_site_url(); ?>/img/img4.png" alt="Ocean Group">
                  <a href="/recruitments/">Recruitment</a>
                </li>
                <li class="menu-item">
                   <img src="<?php echo get_site_url(); ?>/img/img5.png" alt="Ocean Group">
                  <a href="/contacts/">Contact</a>
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
                <a href="http://cms.och.vn/en/sunrise-nha-trang-2/" target="_blank" class="hover-padi"></a>
              </div>
            </div>
              <div class="pos pos_hoian">
                <div class="planet">
                  <a href="http://cms.och.vn/en/sunrise-hoi-an-2/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_sun">
                  <div class="planet">
                    <div class="box-padi">
                      <a href="http://cms.och.vn/en/ocean-hospitalitys/" target="_blank" class="hover-padi"></a>
                  </div>
                </div>
              </div>
              <div class="pos pos_star_halong">
                <div class="planet">
                  <a href="http://cms.och.vn/en/starcity-ha-long-bay-2/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_givraly">
                <div class="planet">
                  <a href="http://cms.och.vn/en/givralbakerys/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_trangtien">
                <div class="planet">
                  <a href="http://cms.och.vn/en/trang-tien-ice-cream/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_sun_nhatrang">
                <div class="planet">
                  <a href="http://cms.och.vn/en/sunrise-nha-trang-2/" target="_blank" class="hover-padi"></a>
                </div>
              </div>
              <div class="pos pos_duan">
                <div class="planet">
                  <a href="http://cms.och.vn/en/projects/" target="_blank" class="hover-padi"></a>
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
  </body>
  
</html>
 


  

