# nanoPhotosProvider
<br />
<br />

### :warning: new version available
Please check the new version: [nanoPhotosProvider2](https://github.com/nanostudio-org/nano_photos_provider2)
<br />
<br />
<br />

### :white_circle: extension for nanoGALLERY
    
  
Publish your self-hosted photos simply and automatically to nanoGALLERY.  
Content is provided on demand when browsing the albums of the gallery.  
Generates thumbnails automatically.  

To be used as an add-on for nanoGALLERY (http://nanogallery.brisbois.fr).

### :white_circle: Usage

##### :one: Step 1: installation

On your webserver:
- create a folder named `nanoPhotosProvider` where you want to store your photos
- in this folder:
  - copy the files:
    - `nanoPhotosProvider.php`,
    - `nanoPhotosProvider.class.php`,
    - `nanoPhotosProvider.cfg` and
    - `nanoPhotosProvider.Encoding.php`
  - create a folder named `nanoPhotosContent`  
    - copy your photos here  
    - you can organize your photos in folders (= albums)  
    - in the filenames, you can separate title and description with `$$`  
    - add leading `@@@@@` to the filename of the images to be used as album covers  
  - edit the `nanoPhotosProvider.cfg` file for custom settings  

<br />

##### :two: Step 2: configure your HTML page

- The page can be located anywhere on your webserver.
- Install nanoGALLERY for jQuery (see http://nanogallery.brisbois.fr)
- Configure the call to the plugin:
  - Use the specific parameters: `kind` and `jsonProvider`
    - `kind`: set value to `'json'`
    - `jsonProvider`: URL to the `nanoPhotosProvider.php` file installed in step 1

Example:

```js
    jQuery(document).ready(function () {
      jQuery("#nanoGallery1").nanoGallery({
        thumbnailWidth: 150,
        thumbnailHeight: 150,
        kind: 'json',
        jsonProvider: 'http://mywebsever.com/mypath/nanoPhotosProvider/nanoPhotosProvider.php',
        locationHash: false
      });
    });
```
<br />
<br />

##### :three: Step 3: test your page to see the result ;-)

<br />

##### :four: Step 4: add/change content
Add files and folders, or renaname them.
Please note that the generated thumbnails are never purged, so you may delete the `_thumbnails` folders to force a new generation.
  
  
  
### :white_circle: Custom configuration
Custom settings are defined in `nanoPhotosProvider.cfg`

Section | Option | default value | Description
------------ | ------------- | ------------ | -------------
config | fileExtensions | "jpg\|jpeg\|png\|gif" | Supported file extensions
 | contentFolder | "/nanoPhotosContent" | Folder where albums and images are stored
 | sortOrder | "asc" | Filename sort ordr
 | titleDescSeparator | "$$" | Separator between title and description in the name of the file
 | albumBlackListDetector | "!!!!!" | Ignore albums (folders) containing this sequence in their name
 | imageBlackListDetector | "_hidden" | Ignore images containing this sequence in their name
 | albumCoverDetector | "@@@@@" | Leading sequence in the filename of the image to be used as an album cover  
thumbnailSizes | | | :warning: after changing any of these values you may need to manually clear the `_thumbnails` folders 
 | width | 150 | Thumbnail width in pixels (note: the value must match the value of `thumbnailWidth` in your nanoGALLERY)
 | height | 150 | Thumbnail height in pixels (note: the value must match the value of `thumbnailHeight` in your nanoGALLERY)
 | crop | false | Crop images to avoid black borders


<br />
### :white_circle: Supported image formats
JPEG, GIF and PNG.

<br />

### :warning: limitations
- The nanoGALLERY option `locationHash` should not be enabled if albums have more than 2 levels.  
- multiple thumbnail resolutions are not supported.  
  
### Heroku  
http://nanophotosprovider.herokuapp.com/demonstration/heroku.html


### :copyright: License
nanoPhotosProvider is licensed under [CC BY-NC 3.0](http://creativecommons.org/licenses/by-nc/3.0/).  
Only for personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoPhotosProvider for free.


### :white_circle: Requirements
* nanoGALLERY (http://nanogallery.brisbois.fr)
* Webserver
* PHP >= v5.2 with GD-Library
