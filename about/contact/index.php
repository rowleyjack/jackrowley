<?php include '../../includes/header-script.php';?>
<!doctype html>
<html>
<meta charset="utf-8">
<head>
<title>Contact Jack Rowley Website Design and Development Denver and Lakewood Colorado - 303-882-7091</title>
<meta name="Description" content="contact jack rowley website design and development in denver and lakewood colorado for a free consult.">
<meta name="Keywords" content="Denver and Lakewood website design company, contact jack rowley">
<link href="/css/global.css" rel="stylesheet" type="text/css">
<script src="/scripts/chrome.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  
  <?php include '../../includes/header.php';?>
  
  <div id="top"><img src="../../images/top.gif" alt="Jack Rowley Website Design and Devlopment header image" title="Jack Rowley Website Design and Devlopment header image" width="910" height="15"></div>
  <div id="contentArea">
    <div id="leftNav">

    <?php include '../../includes/about.php';?>

    </div>
    <div id="mainContent">
      <img src="images/banner.jpg" alt="Contact Us" width="679" height="172">
      <h1>Contact Jack Rowley Website Design</h1>
      <h3>Contact Us</h3>
      <h4>Jack Rowley — Web Designer and Developer</h4>
      <p>2484 S. Balsam St.<br>
        Lakewood, CO 80227<br>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
        <?php echo $phone; ?></p>
      <h4>Contact Us On-line</h4>
      <form id="contact" method="post" action="http://www.jackrowley.net/cgi-bin/cgiemail/forms/contact.txt">
        <input type="hidden" name="success" value="http://www.jackrowley.net/about/contact/thankyou.php">
        <p><strong>Your email address:</strong><br>
          <input name="email" type="email" required>
        </p>
        <p><strong>Your name:</strong><br>
          <input name="name" id="name" required>
        </p>
        <p><strong>Phone Number :</strong><br>
          <input name="phone" id="phone" type="number" required>
        </p>
        <p class="sideGeneral"><strong>Service of Interest:</strong><br>
          <label>
            <select name="services" id="services">
              <option selected="selected" value="- Select Service -">- Select Service -</option>
              <option value="New Website">New Website</option>
              <option value="Website Project">Website Project</option>
              <option value="Flash Services">Flash Services</option>
              <option value="Web Developement Services">Web Development Services</option>
              <option value="Graphic Art Services">Graphic Art Services</option>
            </select>
          </label>
        </p>
        <p><strong>Additional Comments:</strong><br>
          <textarea name="comments" cols="30" rows="10" id="comments"></textarea>
        </p>
        <input name="submit" type="submit" value="submit">
        <p id="results"></p>
      </form>
    </div>
  </div>
  
  <?php include '../../includes/footer.php';?>
  
</div>
<?php include '../../includes/footer-scripts.php';?>
</body>
</html>
