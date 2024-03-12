<?php
// phpinfo();
// get_news_from_url();
// die;
?>
<?php
/* Template Name: home page */
$now = strtotime('now');
$time_after = date('Y-m-d H:i:s', ($now - 24 * 7 * 3600));
$time_after = str_replace(" ", "T", $time_after);

?>

<!doctype html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="shortcut icon" type="image/png" href="<?php echo get_site_url(); ?>/img/icon/favicon.png" />
  <title dir="ltr">OCH Hospitality & Service Join Stock Company</title>
  <meta name="description" content="OCH Hospitality & Service Join Stock Company" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/styles.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/styles24.css">
  <?php
  if (wp_is_mobile()) {
  ?>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_site_url(); ?>/css/custom_mobile.css">
  <?php
  } else {
  ?>

    <link rel="stylesheet" type="text/css" media="screen" href="http://och.vn/cms/css/custom.css">
  <?php
  }
  ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700&display=swap" rel="stylesheet">
  <style>
    .dot.bigbang_sa0 img {
      transform: scale(100);
      -webkit-transform: scale(100);
    }

    .dot.bigbang_sa0.bigbang_sa img {
      transform: scale(96);
      -webkit-transform: scale(96);
    }

    .dot.bigbang_sa0.bigbang_sa.bigbang_sa2 img {
      transform: scale(3000);
      -webkit-transform: scale(3000);
      margin-top: 100%;
      margin-left: 100%;
    }
  </style>
</head>

<body id="body_set" class="opening hide-UI view-2D zoom-large data-close controls-close pageLoad body_bgr <?php if (!isset($_COOKIE['wp_cookie_bom'])) {
                                                                                                            setcookie('wp_cookie_bom', '1', strtotime('+1 day'));
                                                                                                            echo "dont-cookie";
                                                                                                          } else {
                                                                                                            echo "save-cookie";
                                                                                                          } ?>">
  <div class="header">
    <div class="container">
      <div class="img_logo">
        <a href="#">
          <img src="<?php echo get_site_url(); ?>/img/logo_key.png" alt="Ocean Group">
        </a>
      </div>
      <div class="langue-menu">
        <div class="Icon_bell">
          <a href="#">
            <img src="<?php echo get_site_url(); ?>/img/alarm.png" alt="" width="20" alt="Notification">
            <span class="count-noti"></span>
          </a>
          <div class="list-new-latest">
            <div class="cross_icon">
              <img src="<?php echo get_site_url(); ?>/img/cross1.png" alt="" width="15" alt="Cross">
            </div>
            <div class="list-new-readmore">
              <div class="list-new-readmore-data">
                <ul class="list-new" id="new-list">
                </ul>
                <div class="class-readmore">
                  <a href="http://och.vn/en/press-release/"> <img src="http://och.vn/cms/img/icon/favicon.png" width="20px"> Show all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="langue">
          <a href="http://och.vn/">
            <img src="<?php echo get_site_url(); ?>/img/img_vn.png" alt="" width="24" alt="Ocean Group">
          </a>
        </div>
	-->
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
                <a href="/och-hospitalitys/">Introduce</a>
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
                <a href="/recruitments/">Recruitments</a>
              </li>
              <li class="menu-item">
                <img src="<?php echo get_site_url(); ?>/img/img5.png" alt="Ocean Group">
                <a href="/contacts/">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dot">
    <img src="<?php echo get_site_url(); ?>/img/dot.png" alt="Ocean Group">
  </div>
  <div id="universe" class="scale-stretched">
    <div id="galaxy">
      <div id="solar-system" class="earth">
        <div id="saturn" class="orbit">
          <div class="pos pos_start_nhatrang">
            <div class="planet">
              <a href="/starcity-nha-trang-2/" target="_blank" class="hover-padi"></a>
            </div>
          </div>
          <!--<div class="pos pos_hoian">
            <div class="planet">
              <a href="/sunrise-hoi-an-2/" target="_blank" class="hover-padi"></a>
            </div>
          </div>-->
          <div class="pos pos_sun">
            <div class="planet">
              <div class="box-padi">
                <a href="/och-hospitalitys/" target="_blank" class="hover-padi"></a>
              </div>
            </div>
          </div>
          <div class="pos pos_star_halong">
            <div class="planet">
              <a href="/westlake-hotel/" target="_blank" class="hover-padi"></a>
            </div>
          </div>
          <div class="pos pos_givraly">
            <div class="planet">
              <a href="/givralbakerys/" target="_blank" class="hover-padi"></a>
            </div>
          </div>
          <div class="pos pos_trangtien">
            <div class="planet">
              <a href="/trang-tien-ice-cream/" target="_blank" class="hover-padi"></a>
            </div>
          </div>
          <div class="pos pos_sun_nhatrang">
            <div class="planet">
              <a href="/sunrise-nha-trang-2/" target="_blank" class="hover-padi"></a>
            </div>
          </div>
          <div class="pos pos_duan">
            <div class="planet">
              <a href="/projects/" target="_blank" class="hover-padi"></a>
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
  <script type="text/javascript" src="<?php echo get_site_url(); ?>/js/scripts.js"></script>
  <script type="text/javascript">
    function formReqest(url) {
      var settings = {
        "async": true,
        "crossDomain": true,
        "url": url,
        "method": "GET",
        "headers": {
          "Postman-Token": "ff415765-18b0-413e-803b-c577500fda41,7cb67da5-5c00-4cda-a221-44d92404af3c",
          "cache-control": "no-cache"
        }
      }
      return settings;
    }

    function getPosts() {
      let str = ""
      let settings = formReqest("http://och.vn/wp-json/wp/v2/posts?orderby=date&order=desc&after=<?php echo $time_after ?>");
      $.ajax(settings).done(function(response) {
        $(".count-noti").html(response.length);
        for (var i = 0; i < response.length; i++) {
          if (i < 5) {
            getMedia(response[i], function(result, res) {
              str = "<li class='" + res.acf.mutilang + "'><a href='" + res.link + "'><div class='thumb'><img src=" + result + "></div><p>" + res.title.rendered + "</p></a></li>";
              // 						  console.log(str);
              $("#new-list").append(str);
            });

          }
        }

      });
    }

    function getMedia(response, __callback) {
      let settings = formReqest("http://och.vn/wp-json/wp/v2/media/" + response.featured_media);
      let thumb = "";
      $.ajax(settings).done(function(res) {
        __callback(res.source_url, response);
      });
    }

    getPosts();
  </script>
  <button id="myBtn">Open Modal</button>
  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Some text in the Modal..</p>
    </div>

  </div>
  <style>
    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>