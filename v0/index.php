<?php
	require_once "default/initial.php";
	include_once "default/doctype.php";
?>
<style type="text/css">
#address {
	margin:0px auto 25px auto;
	padding:10px;
	width:80%;
}
#slideshow {
	height:550px;
	width:550px;
}
</style>
<?php include "default/uniform.php" ?>
<h3 id="address" class="shadowed section">2580 North Main St. Walnut Creek, CA 94596 &bull; (925) 937-2031</h3>
<?php
	if (is_mobile()) :
		?><div class="shadowed section" style="width:733px; padding-top:5px; margin:0px auto 25px auto;">
			<img src="resources/images/restaurant/1.jpg" alt="Restaurant Image" height="300" width="359" />
			<img src="resources/images/restaurant/2.jpg" alt="Restaurant Image" height="300" width="359" />
			<img src="resources/images/restaurant/3.jpg" alt="Restaurant Image" height="300" width="359" />
			<img src="resources/images/restaurant/4.jpg" alt="Restaurant Image" height="300" width="359" />
			<img src="resources/images/restaurant/6.jpg" alt="Restaurant Image" height="300" width="359" />
			<img src="resources/images/restaurant/7.jpg" alt="Restaurant Image" height="300" width="359" />
		</div><?php
	else :
		?><iframe id="slideshow" class="shadowed section" src="http://www.flickr.com/slideShow/index.gne?user_id=41918588@N06&amp;set_id=72157625312946643">
			<p>Your browser does not support iframes! This webpage is optimized for the most updated versions of standards-compliant browsers.</p>
		</iframe><?php
	endif;

	include "default/wrapper.php";
?>