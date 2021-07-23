<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Philosophy</title>
    <link rel="stylesheet" href="css/boootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/utama.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>

  </head>
  <script type="text/javascript">

var timestamp = '<?=time();?>';

function updateTime(){
    var d = new Date();

    var jam = d.getHours();
        var menit = d.getMinutes();
        var detik = d.getSeconds();
  $('#time').html(jam +':'+menit+':'+detik);
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>
  <body style="background-color: #F2F2F2">

<section class="s-pageheader s-pageheader--home">
  <header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/logo.svg" alt="Homepage">
            </a>
            <br>
        </div>

        <div id="time" style="color: skyblue; position: absolute; right: 20px;top: 10px;font-size: 50px"></div>

        <ul class="header__social">
            <li>
              <a href="https://www.facebook.com/arya.suyudi"><img  alt="Facebook" style="width:30px" border="0" src="images/facebook.png" title="Find me on Facebook" /></a>&nbsp;
            </li>
            <li>
                <a href="https://www.instagram.com/aryasuyudi/"><img alt="Instagram" style="width:30px" border="0" src="images/instagram.png" title="Find me on Instagram" /></a>
            </li>
        </ul>

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Site Navigation</h2>

            <ul class="header__nav">
                <li class="current"><a href="index.php" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Blog</a>
                    <ul class="sub-menu">
                    <li><a href="audio.php">Audio Post</a></li>
                    <li><a href="galery.php">Gallery Post</a></li>
                    </ul>
                </li>
                <li class="current"><a href="aboutme.php" title="">About me</a></li>
                <li class="current"><a href="contact.php" title="">Contact</a></li>
            </ul>

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
        </nav>
    </div>
  </header>
