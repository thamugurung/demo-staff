<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Photo Gallery :: Ocean Service Ltd.</title>
<?php require_once('head.php'); ?>
<!-- Fancy Box -->
<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</head>

<body>
<div id="header">
  <?php require_once('header.php'); ?>
</div>
<div class="heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Gallery</h1>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <ul class="gallery-inner clearfix">
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/1.jpg"><img src="gallery/1.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/2.jpg"><img src="gallery/2.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/3.jpg"><img src="gallery/3.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/4.jpg"><img src="gallery/4.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/5.jpg"><img src="gallery/5.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/6.jpg"><img src="gallery/6.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/7.jpg"><img src="gallery/7.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/8.jpg"><img src="gallery/8.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
        <li><a class="fancybox" rel="group" title="Sample Photo Gallery for Ocean Service" href="gallery/9.jpg"><img src="gallery/9.jpg" alt="Sample Photo Gallery for Ocean Service" class="img-thumbnail" /></a></li>
      </ul>
    </div>
    <div class="col-sm-4">
    	<ul class="video-block">
			<li>
				<video width="100%" height="250" controls>
					<source src="videos/ocean-movie1.mp4" type="video/mp4">
					<source src="videos/ocean-movie1.ogv" type="video/ogg">
				</video>
			</li>
        	<li>
				<iframe width="100%" height="315" src="https://www.youtube.com/embed/bmZ2bpJKXUI" frameborder="0" allowfullscreen></iframe>
			</li>
        </ul>
    </div>
  </div>
</div>
<div id="footer">
  <?php require_once('footer.php'); ?>
</div>
</body>
</html>