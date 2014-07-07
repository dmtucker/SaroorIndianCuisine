<?php
	require_once "default/initial.php";
	include_once "default/doctype.php";
?>
<script type="text/javascript" src="resources/bookflip.js"></script>
<style type="text/css">
#desktop {
	background:url('resources/images/wood-tile.jpg') repeat;
	padding:15px;
	border:1px solid #000;
}
</style>
<?php include "default/uniform.php" ?>
<div id="desktop" class="shadowed section">
	<button class="buttons" onClick="goprev();">previous</button>
	<button class="buttons" onClick="gonext();">next</button>
	<span style="color:#000; font-family:Arial, Helvetica, sans-serif; font-variant:small-caps; font-weight:bold;">Page:</span>
	<select id="flipSelect" style="display:none;"></select>
	<div id="myBook" style="display:none; margin:15px auto 0px auto;">
		<div style="background:url('resources/images/menu_pages/1.png'); color:#FFF;"></div>
		<div style="background:url('resources/images/menu_pages/2.png'); color:#FFF;"></div>
		<div style="background:url('resources/images/menu_pages/3.png'); color:#FFF;"></div>
		<div style="background:url('resources/images/menu_pages/4.png'); color:#FFF;"></div>
		<div style="background:url('resources/images/menu_pages/5.png'); color:#FFF;"></div>
	</div>
</div>
<script type="text/javascript">
/****************************************************************************
//** Software License Agreement (BSD License)
//** Book Flip slideshow script- Copyright 2008, Will Jones (coastworx.com)
//** This Script is wholly developed and owned by CoastWorx.com 
//** Copywrite: http://wwww.coastworx.com/
//** You are free to use this script so long as this coptwrite notice 
//** stays intact in its entirety
//** You are NOT Permitted to claim this script as your own or
//** use this script for commercial purposes without the express
//** permission of CoastWorx Technologies!
//** Full credit to Scott Schiller (schillmania.com) for soundManager
//***************************************************************************/
var myPageW           = 500;         //page width
var myPageH           = 670;         //page height
var pageBorderWidth   = 1;           //adjust border width
var pageBorderColor   = "#000";      //border color
var pageBorderStyle   = "solid";     //border style eg. solid, dashed or dotted.
var pSpeed            = 40;          //page speed, 20 is best for Opera browser. Less is faster
var pSound            = false;       //change to true for flip sound effect, if true, install SoundManager from schillmania.com
var showBinder        = false;       //change to false for no binder
var binderImage       = "image.gif"; //location of center binder
var binderWidth       = 20;          //width of center binder image
var numPixelsToMove   = 20;          //number of pixels to move per frame, more is faster but less smooth
var selectNavigation  = true;        //this builds a drop down list of pages for auto navigation. eg. <select id="flipSelect" style="display:none;"></select>
allowPageClick        = true;        //allow clicking page directly
doIncrementalAutoFlip = true;        //set this to true if you want to flip to selected page incrementally(ie.see each page turn)

ini();
</script> 
<?php include "default/wrapper.php"; ?>