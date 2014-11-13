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



### License

nanoGALLERY is licensed under [CC BY-NC 3.0](http://creativecommons.org/licenses/by-nc/3.0/).  
Only for personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoGALLERY for free.



### Requirements
* PHP >= v5.2 
