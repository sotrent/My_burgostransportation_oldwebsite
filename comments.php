<?
include ("conectar.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Burgos Transportation Services</title>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0;">

		
<link id="wsite-base-style" rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" />
<link rel="stylesheet" type="text/css" href="http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234" />
<link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/social-icons.css?buildtime=1234" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="files/main_style.css?1463117009" title="wsite-theme-css" />

<link rel="stylesheet" type="text/css" href="css/sot.css" />

<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Questrial&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<style type='text/css'>
.wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {font-family:"Questrial" !important;font-style:normal !important;text-transform:  none !important;}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {font-family:"Montserrat" !important;}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline {}
.wsite-headline-paragraph {}
.wsite-button-inner {}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {color:#3f3f3f !important;}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
</style>
<style>
.wsite-background {background-image: url("//cdn1.editmysite.com/uploads/6/3/4/3/63431469/background-images/1201572357.jpg") !important;background-repeat: no-repeat !important;background-position: 50.00% 84.95% !important;background-size: 100% !important;background-color: transparent !important;}
body.wsite-background {background-attachment: fixed !important;}.wsite-background.wsite-custom-background{ background-size: cover !important}
</style>
		<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

<script type="text/javascript" src="http://cdn2.editmysite.com/js/lang/es/stl.js?buildTime=1234&"></script>
<script type="text/javascript"><!--
	var IS_ARCHIVE = 1;
	
	(function(jQuery){
		function initFlyouts(){
			initPublishedFlyoutMenus(
				[{"id":"281684616512294786","title":"Home","url":"index.html","target":"","nav_menu":false},{"id":"620926810593390966","title":"Reservations","url":"reservations.html","target":"","nav_menu":false},{"id":"284370792135286205","title":"Contact","url":"contact.html","target":"","nav_menu":false},{"id":"128896872800729411","title":"Comments","url":"comments.html","target":"","nav_menu":false}],
				"128896872800729411",
				'',
				'active',
				false,
				{"navigation\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}} class=\"wsite-menu-item-wrap\">\n\t<a\n\t\t{{^nav_menu}}\n\t\t\thref=\"{{url}}\"\n\t\t{{\/nav_menu}}\n\t\t{{#target}}\n\t\t\ttarget=\"{{target}}\"\n\t\t{{\/target}}\n\t\t{{#membership_required}}\n\t\t\tdata-membership-required=\"{{.}}\"\n\t\t{{\/membership_required}}\n\t\tclass=\"wsite-menu-item\"\n\t\t>\n\t\t{{{title_html}}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n","navigation\/flyout\/list":"<div class=\"wsite-menu-wrap\" style=\"display:none\">\n\t<ul class=\"wsite-menu\">\n\t\t{{#children}}{{> navigation\/flyout\/item}}{{\/children}}\n\t<\/ul>\n<\/div>\n","navigation\/flyout\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-subitem-wrap {{#is_current}}wsite-nav-current{{\/is_current}}\"\n\t>\n\t<a\n\t\t{{^nav_menu}}\n\t\t\thref=\"{{url}}\"\n\t\t{{\/nav_menu}}\n\t\t{{#target}}\n\t\t\ttarget=\"{{target}}\"\n\t\t{{\/target}}\n\t\tclass=\"wsite-menu-subitem\"\n\t\t>\n\t\t<span class=\"wsite-menu-title\">\n\t\t\t{{{title_html}}}\n\t\t<\/span>{{#has_children}}<span class=\"wsite-menu-arrow\">&gt;<\/span>{{\/has_children}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n"},
				{}
			)
		}
		if (jQuery) {
			jQuery(document).ready(function() { jQuery(initFlyouts); });
		}else{
			if (Prototype.Browser.IE) window.onload = initFlyouts;
			else document.observe('dom:loaded', initFlyouts);
		}
	})(window._W && _W.jQuery)
//-->
</script>
		
	</head>
	<body class="short-header-page  wsite-theme-light  wsite-page-comments"><input type="checkbox" id="mobile-trigger" class="mobile-trigger">

  <div id="main-wrap">
	<img src="uploads/6/3/4/3/63431469/1462862341.png" class="logo" />
	<div id="banner-wrap" class="wsite-background wsite-custom-background">
	 <div id="header-wrap">
		<div id="header">
		  <div class="container">
			<table>
			<tr>
			  <td id="nav-wrap">
			    <ul class="wsite-menu-default">
		        <li id="active" class="wsite-menu-item-wrap">
		          <a 	href="index.php" class="wsite-menu-item">Home</a>			
		        </li>
		        <li id="pg620926810593390966" class="wsite-menu-item-wrap">
			      <a href="reservations.php" class="wsite-menu-item">Reservations</a>
			    </li>
		        <li id="pg284370792135286205" class="wsite-menu-item-wrap">
			      <a href="contact.php" class="wsite-menu-item">Contact</a>			
		        </li>
		        <li id="pg128896872800729411" class="wsite-menu-item-wrap">
		           <a href="comments.php" class="wsite-menu-item">Comments</a>			
		        </li>
                </ul>
              </td>
	 		  <td class="search"></td>
			</tr>
			</table>
			<label id="nav-trigger" class="hamburger" for="mobile-trigger"></label>
		 </div><!-- end container -->
		</div>
	 </div><!-- end header-wrap -->  

			<div id="banner" class="container">
				<div id="banner-inner">
					<table>
					<tr>
						<td><span class="wsite-logo">
</span></td>
						<td><h2></h2></td>
					</tr>
					</table>
				</div> <!--end banner-inner-->
			</div><!--end banner-->
		</div><!-- end banner-wrap -->  
		
		<div id="main-content" class="container"><div id='wsite-content' class='wsite-elements wsite-not-footer'>
<div>
				<form enctype="multipart/form-data" action="formSubmit.php?accion=6548" method="POST" >
					<div id="485213233694012063-form-parent" class="wsite-form-container" style="margin-top:10px;">
						<ul class="formlist" id="485213233694012063-form-list">
						  <h2 class="wsite-content-title" style="text-align:left;">Your opinion is important for us!<br /></h2>
						  <div>
						   <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				           <label class="wsite-form-label" for="input-905237117728799088">Name <span class="form-required">*</span></label>
				            <div class="wsite-form-input-container">
				            <input  class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="name" required />
				            </div>
				           </div>
				           </div>

						  <div>
						   <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				           <label class="wsite-form-label" for="input-905237117728799088">Email <span class="form-required">*</span></label>
				            <div class="wsite-form-input-container">
				            <input  class="wsite-form-input wsite-input wsite-input-width-370px" type="email" name="mail" required />
				            </div>
				           </div>
				           </div>
                           <div>
                           <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
				             <label class="wsite-form-label" for="input-724904872303319655">Leave a comment <span class="form-required">*</span></label>
				             <div class="wsite-form-input-container">
					          <textarea id="input-724904872303319655" class="wsite-form-input wsite-input wsite-input-width-500px" name="comment" style="height: 50px"></textarea>
				             </div>				             
			               </div>
			               </div>
					   </ul>
					</div>
					<div style="display:none; visibility:hidden;">
						<input type="text" name="wsite_subject" />
					</div>
					<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
					    <input type='submit' id="resboton" style='position:absolute;top:0;left:-9999px;width:1px;height:1px' /><a class='wsite-button'  onclick="$('#resboton').click();"><span class='wsite-button-inner'>Send</span></a>
					</div>
				</form>
			

			</div>
			
	<?  if($_GET['msg']==1){ echo "<script> alert('We Appreciate Your Comment!, Have a Nice Day! ');</script>";  }  ?>		
<?
$consulta="SELECT * FROM `comentarios`";
  $usuario_consulta = mysql_query($consulta) or die("No se pudo realizar la consulta a la Base de datos");
  while($resultados = mysql_fetch_array($usuario_consulta)){  

if($resultados["aprobado"]==1){
?>
<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<label class="wsite-form-sublabel"><? echo $resultados["nombre"];?></label>
<blockquote style="text-align:left;"><? echo $resultados["comentario"];?></blockquote>
<label class="wsite-form-sublabel" style="float:right;"><? echo $resultados["fecha"];?></label>

<? } } ?>
<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div><div id="474513964687520873" align="left" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><div id='yelpwidget'></div>

<script>(function() { var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("burgos-transportation-cabo-san-lucas","350","RED","y","y","3");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})();</script></div>



</div>
<!--
<div class="wsite-spacer" style="height:50px;"></div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div><div id="108487637132565331" align="left" style="width: 100%; overflow-y: hidden;" class="wcustomhtml">TRIPADVISOR COMMENTS
</div>



</div>
-->
<div class="wsite-spacer" style="height:50px;"></div>


</div>


</div>


<div id="footer-wrap">
<div class='wsite-elements wsite-footer'>
 <div><div style="height: 10px; overflow: hidden; width: 100%;"></div>
 <hr class="styled-hr" style="width:100%;"></hr>
 <div style="height: 10px; overflow: hidden; width: 100%;"></div></div>
 <div><div class="wsite-multicol">
        <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
	      <table class="wsite-multicol-table">
	       <tbody class="wsite-multicol-tbody">
		   <tr class="wsite-multicol-tr">
			<td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
             <h2 class="wsite-content-title" style="text-align:left;"><font size="3">FROM USA</font><br /></h2>
             <div class="paragraph" style="text-align:left;"><span></span>011 52 624 118 1743<br /><span></span></div>
            </td>	
            <td class="wsite-multicol-col" style="width:40%; padding:0 15px;">
             <h2 class="wsite-content-title" style="text-align:left;"><font size="3">Email</font></h2>
             <div class="paragraph" style="text-align:left;">info@burgostransportation.com</div>					
			</td>	
			<td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
             <span class="wsite-social wsite-social-default"><a class='first-child wsite-social-item wsite-social-facebook' href='http://facebook.com//Burgostransportation' target='_blank'><span class='wsite-social-item-inner'></span></a><a class='last-child wsite-social-item wsite-social-instagram' href='https://www.instagram.com/burgostransportation' target='_blank'><span class='wsite-social-item-inner'></span></a></span>				
			</td>
           </tr>
		  </tbody>
	    </table>
       </div>
 </div></div>
 </div>
 </div><!-- end footer-wrap -->


</div><!-- end main-wrap -->	
	
	
	<div id="navmobile" class="nav">
	<ul class="wsite-menu-default">
		<li id="pg281684616512294786" class="wsite-menu-item-wrap"><a	href="index.php" class="wsite-menu-item">Home</a></li>
		<li id="active" class="wsite-menu-item-wrap"><a	href="reservations.php" class="wsite-menu-item">Reservations</a></li>
		<li id="pg284370792135286205" class="wsite-menu-item-wrap"><a href="contact.php" class="wsite-menu-item">Contact</a></li>
		<li id="pg128896872800729411" class="wsite-menu-item-wrap"><a href="comments.php"	class="wsite-menu-item">Comments</a></li>
    </ul>
    </div>
	<!-- JavaScript -->
	<script type="text/javascript" src="files/theme/plugins.js"></script>
	<script type="text/javascript" src="files/theme/custom.js"></script>
	<script type="text/javascript" src="files/theme/mobile.js"></script>		
		
</body>
</html>
