<?php include '../../includes/server-script.php';?>
<!doctype html>
<html>
<meta charset="utf-8">
<head>
<title>Lakewood Graphic Design Portfolio</title>
<?php include '../../includes/header-scripts.php';?>
<meta name="Description" content="Jack Rowley Website Graphic Art Portfolio of website designs, website banners, website brochures and website logos">
<meta name="Keywords" content="Graphic Art Portfolio, Website Design Portfolio">
<link href="/css/global.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<script src="/scripts/chrome.js" type="text/javascript"></script>
<script src="/scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">

  <?php include '../../includes/header.php';?>

  <div id="top">
  	<img src="../../images/top.gif" alt="Jack Rowley Website Design and Devlopment header image" title="Jack Rowley Website Design and Devlopment header image" width="910" height="15">
  </div>
  <div id="contentArea">
    <div id="leftNav">

      <?php include '../../includes/portfolio.php';?>

    </div>
    <div id="mainContent">
      <img src="images/banner.jpg" alt="Graphic Design Portfolio" width="679" height="172">
      <h1>Graphic Art Portfolio</h1>
      <h3>Jack Rowley Website Graphic Art Portfolio</h3>
      <p>Jack Rowley has been designing creative, attractive website graphic art for the past 5 years. In that time, he has designed well over 100 website for various businesses around Colorado and the nation. Jack Rowley focuses not only upon an attractive design but also incorporates functionality and usability into the overall site design.</p>
      <p>Whether you need a simple website logo or a complete usability and graphic design for your new website, Jack Rowley has the experience and the skills you need to create that functional and unique web presence.</p>
      <h4>Graphic Art Portfolio Gallery</h4>
      <div id="gaGallery">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="650" height="650" id="FlashID" title="Jack Rowley Graphic Art Gallery">
          <param name="movie" value="../../flash/gaGallery.swf">
          <param name="quality" value="high">
          <param name="wmode" value="opaque">
          <param name="swfversion" value="9.0.45.0">
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
          <param name="expressinstall" value="../../scripts/expressInstall.swf">
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="../../flash/gaGallery.swf" width="650" height="650">
            <!--<![endif]-->
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="9.0.45.0">
            <param name="expressinstall" value="../../scripts/expressInstall.swf">
            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
            <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
	  <script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
-->
      </script>
    </div>
  </div>

  <?php include '../../includes/footer.php';?>

</div>
<?php include '../../includes/footer-scripts.php';?>
</body>
</html>
