<?
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors',true);
session_start();
include_once('common.inc.php');
include_once('fonctions.inc.php');
include_once('form_get_variables.php');

$city = utf8_encode('Besançon');


?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loi Pinel 2014</title>
<link rel="stylesheet" href="./css/landing2.css?5">

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=30423,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
</head>

<body>
 <div class="container">
	  <div class="col-lg-12 spacer">&nbsp;</div>
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
		 <img src="img-rp/raffles_media.png" alt="" class="img-responsive logo" />
      </div>
      <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
           <img src="img-rp/header_pastille.png" alt="" class=" brand" />
      </div>
</div>
<div class="container-fluid back">
	<div class="row">
    	<div class="container">
        	<div class="back2">
        		<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                	<p class="white text-center">
                    	D&eacute;couvrez comment investir <span class="cityname"><?php echo utf8_decode($city); ?></span> et<br class="hidden-xs" />
                    	&eacute;viter de perdre 54 000€ en impôts<br hidden-md />
                        <span class="title">0<span class="title2">&euro;</span> D'IMP&Ocirc;T</span><br hidden-xs/>
                        <span class="title3 col-lg-12 col-md-12 col-sm-12">PENDANT 12 ANS !</span>
                        <div class="row">
                        	
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                            	<img src="img-rp/guide6.png" alt="" class="img-responsive gui hidden-sm hidden-xs" />
                                <img src="img-rp/guide6.png" alt="" class="img-responsive center-block gui hidden-lg hidden-md" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                            <span class="title4">Recevez gratuitement<br />
                            <span class="title5" style="color:#ffde00 !important;"> le guide loi Pinel 2014</span></span>
                            	<ul class="duflot">
                                    <li>Exemples d'investissements</li>
                                	<li>Avantages de la loi Pinel,</li>
                                    <li>7 conseils d'experts,</li>
                                </ul>
                             <img src="//premiumc.s3.amazonaws.com/pinel/img/arrow_classic_1.png" alt="" class="hidden-xs arrow"/>   
                          </div>
                        </div>
                        
                    </p>
                </div>
                
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                	<div class="cont-form"><br />
                    <? if(isset($_GET['non']) && $_GET['non']==1) { ?><span class="red">Oups, il semble que<br />vous n'êtes pas &eacute;ligible...</span><br />
                      <span class="blu" style="background-color: #FFFF00">Vos informations ne sont pas compatibles avec les exigences de la loi Pinel.</span><? } else { ?><span class="red">Est-ce que je suis &eacute;ligible ?</span><br />
                      <span class="blu">Pour vérifier si vous êtes éligible, <br />
                      répondez  à ces 3 questions :</span><? } ?><br /><br />
                        <form role="form" action="" method="post" name="inscription" onSubmit="alert('form posted');return false;">
                        
                        <!---------------------------------------->
                              
                              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <label for="cp">Mon code postal</label></div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12"><input type="tel" id="cp" name="cp" class="form-control" <? if(isset($_GET['erreur_tel']) && $_GET['erreur_tel']==1) echo ' style="border-color: #b03535;box-shadow: 0 0 5px #d45252;"'; ?> value="<? if(isset($_GET['cp']) && $_GET['cp']) echo $_GET['cp']; ?>" onkeypress="verifInt(event);" placeholder="ex: 69003" required pattern="[0-9]{5}" maxlength="5"></div>
                                
                         <!---------------------------------------->
                             
                             	
                        	
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                             	  <label for="epargne">Ma capacit&eacute; d'&eacute;pargne</label></div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                	<select id="epargne" name="epargne" class="form-control" required>
                                		<option value="">-- S&eacute;lectionnez --</option>
                                        <option value="1"<? if(isset($_GET['epargne']) && $_GET['epargne']== 1) echo " selected"; ?>>moins de 100 &euro; / mois</option>
                                        <option value="2"<? if(isset($_GET['epargne']) && $_GET['epargne']== 2) echo " selected"; ?>>de 100 &agrave; 200 &euro; / mois</option>
                                        <option value="3"<? if(isset($_GET['epargne']) && $_GET['epargne']== 3) echo " selected"; ?>>de 200 &agrave; 300 &euro; / mois</option>
                                        <option value="4"<? if(isset($_GET['epargne']) && $_GET['epargne']== 4) echo " selected"; ?>>Plus de 300 &euro; / mois</option>
                                    </select>
                                 </div>
                                
                                 <!---------------------------------------->
                             	 
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="impots">L'imp&ocirc;t de mon foyer / an</label></div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                	<select id="impots" name="impots" class="form-control" required>
                                		<option value="">-- S&eacute;lectionnez --</option>
                                        <option value="2"<? if(isset($_GET['impots']) && $_GET['impots']== 2) echo " selected"; ?>>moins de 2.500 &euro;</option>
                                        <option value="3"<? if(isset($_GET['impots']) && $_GET['impots']== 3) echo " selected"; ?>>de 2.500 &euro; &agrave; 5.000 &euro;</option>
                                        <option value="4"<? if(isset($_GET['impots']) && $_GET['impots']== 4) echo " selected"; ?>>de 5.000 &euro; &agrave; 10.000 &euro;</option>
                                        <option value="5"<? if(isset($_GET['impots']) && $_GET['impots']== 5) echo " selected"; ?>>Plus de 10.000 &euro;</option>
                                    </select>
                                 </div>
                                                                  
                              
                                
                               
                             	<!---------------------------------------->
                             <input type="hidden" name="page" value="send">

                             <input type="image" border="0" src="//premiumc.s3.amazonaws.com/pinel/img/form_cta_red_p2_fix.png" value="submit" align="middle" name="image" class="cta">
                             <p class="small2"><a class="external" href="./cgum.php"  data-toggle="modal" data-target="#myModal">En cliquant sur valider j'accepte les conditions générales d'utilisation</a></p>
                                <input type="hidden" name="chg" value="<? echo $chg; ?>" />
                                <input type="hidden" name="utm_medium" value="<? echo $utm_medium; ?>" />
                                <input type="hidden" name="ville" value="<?php echo $city0; ?>" />
                        </form>
                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                     </div>
                </div>
            </div>
        </div>	
	</div>
</div>
<div class="container-fluid grey">
	<div class="row">
    	<div class="container">
        	<p class="footer">
            <strong>A propos du site</strong><br /><br />
            
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>
<br />
<div class="container">
	<div class="row">
    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"><img src="img-rp/logo-RF.gif" alt="" class="img-responsive center-block" /></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="img-rp/cnil.jpg" alt="" class="img-responsive center-block" /></div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <p class="footer2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	   </p>
   </div>
    </div>
</div>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
	<script type="text/javascript" src="./js/verif.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 <script type="text/javascript">
   // Load external content
   
 <?php if(isset($_GET['erreur']) && ($_GET['erreur'])) : ?>
   alert("Veuillez vérifier vos informations");
   <?endif ?>

   'use strict';
var verifInt = function(event) {
	if (event.keyCode < 48 || event.keyCode > 57) {
		event.preventDefault(); 
	}
}
	
$('a.external').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+url+'"></iframe>');
 
    });
 
    $('#myModal').on('show.bs.modal', function () {
 
        $(this).find('.modal-dialog').css({
                  width:'40%x', //choose your width
                  height:'60%', 
                  'padding':'0'
           });
         $(this).find('.modal-content').css({
                  height:'100%', 
                  'border-radius':'0',
                  'padding':'0'
           });
         $(this).find('.modal-body').css({
                  width:'100%',
                  height:'100%', 
                  'padding':'0'
           });
    });
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36370363-4', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
