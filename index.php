<!DOCTYPE HTML>
<html>

<head>
  <title>Basspirit Wiki</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <?php
      include './templates/header.php' ;
      ?>
    </header>
    <div id="site_content">
      <?php
      include './templates/sidebar.php' ;
      ?>
      <div class="content">
        <h1>Welcome to Basspirit Wiki</h1>
        <div class="content_item">
          <p>This is Basspirit Wiki and this is lorem ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<strong> Please subscribe</strong>.</p>
        </div>
      </div>
      <div class="content">
        <h1>Sub description</h1>
        <div class="content_item">
          <p>This is not lorem but lorem ipsum:</p>
          <ul>
            <li>lalalu</li>
            <li>lolola</li>
            <li>leleli</li>
            <li>lululo</li>
            <li>lilila</li>
          </ul>
        </div>
      </div>
    </div>
    <footer>
      <?php
      include './templates/footer.php' ;
      ?>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
