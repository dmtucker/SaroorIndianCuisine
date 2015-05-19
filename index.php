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
	margin:auto;
	margin-bottom:30px;
    position:relative;
    height:418px;
    width:500px;
}
#slideshow img {
	height:418px;
	width:500px;
    position:absolute;
    top:0;
    left:0;
    z-index:8;
}
#slideshow img.active {
    z-index:10;
}
#slideshow img.last-active {
    z-index:9;
}
</style>
<script type="application/javascript">
function slideSwitch() {
    var $active = $('#slideshow img.active');
    if ($active.length == 0) $active = $('#slideshow img:last');
    var $next = $active.next().length ? $active.next() : $('#slideshow img:first');
    $active.addClass('last-active');
    $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0},1000,function() {
    	$active.removeClass('active last-active');
    });
}
$(function() { setInterval("slideSwitch()",3000); });
</script>
<?php include "default/uniform.php" ?>
<h3 id="address" class="shadowed section">2580 North Main St. Walnut Creek, CA 94596 &bull; (925) 937-2031</h3>
<div id="slideshow" class="shadowed section">
	<img src="resources/images/restaurant/1.jpg" alt="Restaurant Image" class="active" />
	<img src="resources/images/restaurant/2.jpg" alt="Restaurant Image" />
	<img src="resources/images/restaurant/3.jpg" alt="Restaurant Image" />
	<img src="resources/images/restaurant/4.jpg" alt="Restaurant Image" />
	<img src="resources/images/restaurant/6.jpg" alt="Restaurant Image" />
	<img src="resources/images/restaurant/7.jpg" alt="Restaurant Image" />
</div>
<?php include "default/wrapper.php"; ?>
