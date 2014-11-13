nanoGALLERY_JSON - image provider add-on for nanoGALLERY
===========

Publish a folder/content structure in JSON for albums and images to be displayed with the jQuery plugin nanoGALLERY.
This is an add-on for nanoGALLERY.


### Usage

Part 1: nanoGALLERY_JSON
-----

nanoGALLERY_JSON.php: data provider
nanoGALLERY_JSON.cfg: provider configuration

Data (images and albums) must respect following structure:
- images are stored in `_images`
- thumbnails are stored in `_thumbnails`
- images and thumbnails must have the same filename
- each album needs one `_images` and one `_thumbnails` folder
- top level folder is `ngcontent`

Example:

  ngcontent --> base folder
    _images
    _thumbnails
    folder1
      _images
      _thumbnails
    folder2
      _images
      _thumbnails
      folder2A
        _images
        _thumbnails

        
Title and descritpion: use `$$` in the filename to separate title and description
Album thumbnail: use leading `@@@@@` on thumbnail file to indicate the thumbnail to use for albums (only in _thumbnails, do not use in _images)

    
    
Part 2: nanoGALLERY for jQuery
-----

Use these specific parameters: kind, customSourceProvider and itemsBaseURL.


Example:

```js
jQuery(document).ready(function () {
  jQuery("#nanoGallery1").nanoGallery({
    thumbnailWidth:150,thumbnailHeight:150,
    kind:'custom',
    customSourceProvider:'http://localhost:12345/nanoGALLERY_JSON/nanoGALLERY_JSON.php',
    itemsBaseURL:'http://localhost:12345/nanoGALLERY_JSON/'
  });
});
```



### Image gallery simplified.

Touch enabled, responsive, justified/cascading/grid layout and supporting cloud storage.

Featuring multi-level navigation in albums, combinable hover effects on thumbnails, responsive thumbnail sizes, multiple layouts, slideshow, fullscreen, pagination, image lazy load, themes, deep linking, customizable, i18n, and pulling in Flickr, Picasa and Google+ photo albums among others.


### Usage can be as easy as: 
```js
	$('#elt').nanoGallery({
		kind : 'picasa',
		userID : 'YourUserID'
	});
```

[View ChangeLog](/changelog.md)  
  
Documentation, Demonstrations and Tutorials
-------------

Visit the nanoGALLERY homepage: [http://nanogallery.brisbois.fr](http://www.nanogallery.brisbois.fr/)   
  

![Animation](/doc/nanoGALLERY4_demo.gif?raw=true "Animation")
![Screenshot1](/doc/nanogallery_screenshot.png?raw=true "Screenshot1")
![Screenshot2](/doc/nanoGALLERY4_screenshot7.png?raw=true "Screenshot2")
![Screenshot1](/doc/nanoGALLERY4_screenshot1a.png?raw=true "Screenshot3")


Usage example with images from a Flickr account
-----


### Include JS and CSS files


``` HTML
<!-- Add jQuery library (MANDATORY) -->
<script type="text/javascript" src="third.party/jquery-1.7.1.min.js"></script> 

<!-- Add nanoGALLERY plugin files (MANDATORY) -->
<link href="css/nanogallery.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.nanogallery.js"></script>
```

Note: If you specify a theme, the corresponding css file must be included.


* Create a container

Put a ```<DIV>``` element in the ```<BODY>``` of your HTML page where you want the gallery to be displayed.

```html
<div id="nanoGallery1"></div>
```

* Initialize the script

```js
$(document).ready(function () {
	jQuery("#nanoGallery1").nanoGallery({
		kind:'flickr',
		userID:'34858669@N00'
	});
});
```



### License

nanoGALLERY is licensed under [CC BY-NC 3.0](http://creativecommons.org/licenses/by-nc/3.0/).  
Only for personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoGALLERY for free.



### Requirements
* PHP >= v5.2 

