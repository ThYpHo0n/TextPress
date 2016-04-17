<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php
    $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
    echo $title ,' | ', $global['site.name'];
    ?>
  </title>
  <meta charset="utf-8">
  <meta name="author" content="<?php echo $global['author.name']; ?>">
  <meta name="description" content="<?php echo $global['site.description']; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="<?php echo $global['assets.prefix'];?>/themes/nik/assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $global['assets.prefix'];?>/themes/nik/assets/css/main.css">
  <script type="text/javascript" src="<?php echo $global['assets.prefix'];?>/themes/nik/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo $global['assets.prefix'];?>/themes/nik/assets/js/main.js"></script>
</head>
<body>
  <header>
    <div class="avatar-frame">
      <a href="/"><img src="<?php echo $global['assets.prefix'];?>/themes/nik/assets/img/me.jpg" width="115px" height="115px" title="Nik" alt="Nik"/></a>
    </div><!-- end logo -->

    <div id="menu_icon"></div>
    <nav>
      <ul>
        <li><a href="<?php echo $global['base.url'];?>/" class="selected">Blog</a></li>
        <li><a href="<?php echo $global['base.url'];?>/projects">Projects</a></li>
        <li><a href="<?php echo $global['base.url'];?>/about">About</a></li>
        <li><a href="<?php echo $global['base.url'];?>/contact">Contact</a></li>
      </ul>
    </nav><!-- end navigation menu -->

    <div class="footer clearfix">
      <ul class="social clearfix">
        <li><a href="https://twitter.com/thyphoon" class="twitter" data-title="Twitter"></a></li>
        <li><a href="#" class="rss" data-title="RSS"></a></li>
      </ul><!-- end social -->

      <div class="rights">
        <p>Template by <a href="//Pixelhint.com" target="_blank">Pixelhint.com</a></p>
        <p>Powered by <a href="//blog.shameerc.com" target="_blank">TextPress</a></p>
      </div><!-- end rights -->
    </div ><!-- end footer -->
  </header><!-- end header -->
  <section class="main clearfix">
          <div class="content">
              <div class="wrapper">  <h1>404, Not Found.</h1>
        Ooops! Didn't found what you're looking for.
      </div></div>
  </section>
</body>
</html>
