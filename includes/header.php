  <div id="header">
    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
      <?php echo $phone; ?></p>
  </div>
  <div id="nav">
    <div class="chromestyle" id="chromemenu">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/services/" rel="dropmenu1">Services</a></li>
        <li><a href="/portfolio/" rel="dropmenu2">Portfolio</a></li>
        <li><a href="/about/contact/">Contact Us</a></li>
        <li><a href="/about/">About Us</a></li>
        <li><a href="/login.php">Client Login</a></li>
      </ul>
    </div>
    <div id="dropmenu1" class="dropmenudiv">
    	<a href="/services/website-design/">Website Design</a>
        <a href="/services/web-development/">Website Development</a>
        <a href="/services/graphic-design/">Graphic Design</a><a href="/services/search-engine-optimization/">Search Engine Optimization</a>
    </div>
    <div id="dropmenu2" class="dropmenudiv">
    	<a href="/portfolio/website-design/">Website Design</a>
        <a href="/portfolio/web-development/">Website Development</a>
        <a href="/portfolio/graphic-design/">Graphic Design</a></div>
    	<script>
			cssdropdown.startchrome("chromemenu")
      	</script>
    </div>