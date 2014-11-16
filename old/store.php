<?php
	require_once "default/initial.php";
	include_once "default/doctype.php";
?>
<style type="text/css">
#map {
	width:500px;
	height:550px;
	border:none;
}
</style>
<?php include "default/uniform.php" ?>
<div class="shadowed section" style="margin:0px auto 20px auto;">
	<table>
		<tr>
			<td style="text-align:left; vertical-align:top; padding:10px;">
				<div style="text-align:center; margin-bottom:30px;">
					<h2>Hours</h2>
					<span style="text-decoration:underline; font-weight:bold; color:#F90">Monday to Sunday</span><br />
					11:30am - 2:30pm<br />
					5:00pm - 10:00pm
				</div>
				<h2>Directions</h2>
				<ul>
					<li class="lh" style="color:#F90;">From I-680 S:</li>
					<li>Take exit 47 for N. Main St. toward Walnut Creek</li>
					<li>Keep left at the fork, follow signs for N. Main St. North</li>
					<li>Turn right at San Luis Rd.</li>
					<li>Turn left at N. Main St.</li>
					<li>Saroor will be on your right!</li>
				</ul>
				<ul>
					<li class="lh" style="color:#F90;">From CA-24 E:</li>
					<li>Take the exit onto I-680 N toward Sacramento/Concord</li>
					<li>Take exit 18 for N. Main St</li>
					<li>Merge onto Penniman Way</li>
					<li>Turn right at N. Main St.</li>
					<li>Saroor will be on your right!</li>
				</ul>
			</td>
			<td style="border-left:ridge 3px #666;">
				<?php
					if (is_mobile()) :
						?><a style="text-decoration:none;" href="http://maps.google.com/maps/place?cid=11989182277520913551&q=Saroor+Indian+Cuisine+2580+North+Main+Street+Walnut+Creek,+CA+94597-3153&hl=en&sll=37.919164,-122.064902&sspn=0.006295,0.006295&ie=UTF8&ll=37.925073,-122.078855&spn=0,0&z=16" target="_blank">
							<div id="map" style="display:table-cell; vertical-align:middle;">
								<p class="section" style="text-align:center; background-color:#FFF; width:300px; padding:20px; margin:auto;">
									Your device is not optimized for iframes.<br />
									Click here for a map to Saroor!
								</p>
							</div>
						</a><?php
					else :
						?><iframe id="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Saroor+Indian+Cuisine,+Walnut+Creek,+CA&amp;sll=37.0625,-95.677068&amp;sspn=46.946584,114.169922&amp;ie=UTF8&amp;hq=Saroor+Indian+Cuisine,&amp;hnear=Walnut+Creek,+Contra+Costa,+California&amp;t=h&amp;cid=11989182277520913551&amp;ll=37.928425,-122.061796&amp;spn=0.032497,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed">
							<p>Your browser does not support iframes! This webpage is optimized for the most updated versions of standards-compliant browsers.</p>
						</iframe><?php
					endif;
				?>
			</td>
		</tr>
	</table>
</div>
<?php include "default/wrapper.php"; ?>