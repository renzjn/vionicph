/*** HEADER LOGO ***/
/***
modified header to center the vionic logo by removing its columns.
affects social buttons on header.
to revert replace <div id="logo" class="customheader"> with <div id="logo" class="col span_4">
***/


/*** FEATURED SHOES ***/
/***
position: USER1
just add image and position it in user1
SAMPLE CODE BELOW:
<p><img src="images/dummy-products/product-tile-shop-flats.jpg" alt="product tile shop flats" /></p>
<p>ALL-DAY FLATS</p>
<p><a href="#">Shop Flats</a></p>
<p>&nbsp;</p>
***/

/*** SHOP MEN AND WOMEN BUTTONS ***/
/***position: shop-men-women-buttons
use the joomla WYSWYG editor and switch to code edit and use the format <a class="buttonbox-link buttonbox-theme" href="#">SHOP WOMEN</a> <a <a class="buttonbox-link buttonbox-theme" href="#"> href="#">SHOP MEN</a>
don't forget to remove the <p> tag
***/

/*** TRENDING SHOES ***/
/***
position: user2
trending image size should be 221pxx143.67px
content left image must be on top of the trending shoes in module order
left image must be 378px501px
to adapt the primary text design, add "trendingtext" in the Module Class Suffix of the module

SAMPLE CODE BELOW:
<table style="width: 639px; height: 534px;" cellpadding="5">
<tbody>
<tr>
<td colspan="2">&nbsp;&nbsp;
<p class="title" style="text-align: center;"><strong>TRENDS: ESPADRILLES</strong></p>
<p class="supporting-text gap-bottom-reg" style="text-align: center;">Showcase the newest boho trend and choose the silhouette that compliments your style.</p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p><img src="images/dummy-products/trend-shoes-vero.jpg" alt="trend shoes vero" width="220" height="143.67" /></p>
<p>VERO</p>
</td>
<td style="text-align: center;">
<p><img src="images/dummy-products/trend-shoes-kadyn.jpg" alt="trend shoes kadyn" width="221" height="143.67" /></p>
<p>KADYN</p>
</td>
</tr>
<tr>
<td style="text-align: center;">
<p><img src="images/dummy-products/trend-shoes-santorini.jpg" alt="trend shoes santorini" width="221" height="143.67" /></p>
<p>SANTORINI</p>
</td>
<td style="text-align: center;">
<p><img src="images/dummy-products/trend-shoes-sandy.jpg" alt="trend shoes sandy" width="220" height="143.67" /></p>
<p>SANDY</p>
</td>
</tr>
</tbody>
</table>
<p class="title" style="text-align: center;"></p>
<p>&nbsp;</p>
***/

/*** LOOKBOOK section ***/
/***
position: lookbook
left image size must be 384pxx713.333px
***/

/*** LOOKBOOK TESTIMONIAL ***/
/***
add class="testimonial" in the div to adapt overlapping
add class="testimonialtextformatting" to adapt font format
add class="signature" in the div to adapt signature format
add class="lookbook-image-right" to position the image to the right below testimonial and signature
add id="shop-lookbook" and Class="testimonialtextformatting" to position and format the "SHOP REAGAN"
and add class="shopunderline" to decorate the link it a bottom border

SAMPLE CODE BELOW:
for lookbook column overlap - margin-left: 60px;
<div class="lookbook-image-left"><img src="images/full-image-section/lookbook-lifestyle-reagan.jpg" alt="lookbook lifestyle reagan" width="384" height="713.333" /></div>
<div class="testimonial">
<div class="testimonialtextformatting">“I need shoes that can get me through my entire day, but they have to be chic. Reagan is definitely both... and more!”</div>
<div class="signaturetextformatting">
<p>-Carlina, <small>Allergictovanilla.com</small></p>
</div>
</div>
<div class="lookbook-image-right"><img src="images/full-image-section/lookbook-reagan-bg.jpg" alt="lookbook reagan bg" width="400" height="400" />
<div id="shop-lookbook" class="testimonialtextformatting"><a href="#link_tab" class="shopunderline">SHOP REAGAN</a></div>
</div>
***/

/***DISCOVER THE SECRET ***/
left image size must be 390x193
right image size must be 488x402
button with box style="buttonbox-link buttonbox-theme discoverbut"
***/

/*** ELEVATED AND NATURAL SECTION ***/
/***
left and right module image size is 320x188
middle video icon is 128x123
elevated title class is "customelevatedtext"

***/

/*** SOCIAL ICONS ***/
/***
size: 35x25
***/
