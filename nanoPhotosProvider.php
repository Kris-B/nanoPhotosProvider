<?php
/**
* galleryJSON add-on for nanoGALLERY (or other image galleries)
*
* This is an add-on for nanoGALLERY (image gallery for jQuery - http://nanogallery.brisbois.fr).
* This PHP application will publish your images and albums from a webserver to nanoGALLERY.
* The content is provided on demand, one album at one time.
* Thumbnails are generated automatically.
* 
* License: For personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoGALLERY for free. 
* -------- ALL OTHER USES REQUIRE THE PURCHASE OF A PROFESSIONAL LICENSE.
*
*
* PHP 5.2+
* @version    0.2.0
* @author     Christophe BRISBOIS - http://www.brisbois.fr/
* @copyright  Copyright 2014
* @license    CC BY-NC 3.0
* @link       https://github.com/Kris-B/galleryJSON
* @Support    https://github.com/Kris-B/galleryJSON/issues
*
*/


  require './galleryJSON.class.php';

  // Comment next line to enable warnings (only for debugging purposes)
  error_reporting(E_ERROR | E_PARSE);

  class galleryData {
    var $fullDir='';
    //var $images;
    //var $URI;
  }

  class item {
    var $src='';
    var $srct='';
    var $title='';
    var $description='';
    var $ID='';
    var $albumID='0';
    var $kind='';      // album
  }

  
  

  $t = new galleryJSON();

  exit;
?>