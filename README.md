galleryJSON - JSON image provider
===========

From a webserver, publish a folder/content (albums/images) structure in JSON.  
Allows on demand content providing. Each call returns the content of 1 folder.  
Typically to be used to display image gallery in webpages.  

This may be used as an add-on for nanoGALLERY (http://nanogallery.brisbois.fr), but not only.


### Usage

Part 1: galleryJSON
-----

galleryJSON.php: is the data provider  
galleryJSON.cfg: provider configuration

Data (images and albums) **must** respect following structure:
- images are stored in `_images`
- thumbnails are stored in `_thumbnails`
- images and thumbnails must have the same filenames
- each album needs one `_images` and one `_thumbnails` folder
- top level folder is `ngcontent` (mandatory)

Example:

&nbsp;&nbsp;ngcontent --> base folder  
&nbsp;&nbsp;&nbsp;&nbsp;_images  
&nbsp;&nbsp;&nbsp;&nbsp;_thumbnails  
&nbsp;&nbsp;&nbsp;&nbsp;folder1  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_image  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_thumbnails  
&nbsp;&nbsp;&nbsp;&nbsp;folder2  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_images  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_thumbnails  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;folder2A  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_images  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_thumbnails  

        
Title and descritpion: use `$$` in the filename to separate title and description
Album thumbnail: use leading `@@@@@` on thumbnail file to indicate the thumbnail to use for albums (only in _thumbnails, do not use in _images)


Part 2: Usage example with nanoGALLERY for jQuery
-----

Use these specific parameters: kind, customSourceProvider and itemsBaseURL.


Example:

```js
jQuery(document).ready(function () {
  jQuery("#nanoGallery1").nanoGallery({
    thumbnailWidth:150,thumbnailHeight:150,
    kind:'json',
    customSourceProvider:'http://localhost:12345/galleryJSON/galleryJSON.php',
    itemsBaseURL:'http://localhost:12345/galleryJSON/'
  });
});
```



### License

galleryJSON is licensed under [CC BY-NC 3.0](http://creativecommons.org/licenses/by-nc/3.0/).  
Only for personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoGALLERY for free.



### Requirements
* PHP >= v5.2 

