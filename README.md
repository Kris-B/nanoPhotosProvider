### nanoPhotosProvider
#### extension for nanoGALLERY
  
  
<br />
<br />
Publish your self-hosted photos simply and automatically to nanoGALLERY.
Content is providing on demand when browsing the albums of the gallery.
Generates thumbnails automatically.

To be used as an add-on for nanoGALLERY (http://nanogallery.brisbois.fr).

<br />
<br />
### Usage

##### Step 1: installation

On your webserver:
- create a folder named `nanoPhotosProvider` where you want to store your photos
- in this folder:
  - copy the files `nanoPhotosProvider.php`, `nanoPhotosProvider.class.php`, `nanoPhotosProvider.cfg` and `nanoPhotosProvider.Encoding.php`
  - create a folder named `nanoPhotosContent`
    - copy your photos here
    - you can organize your photos in folders
    - in the filenames, you can separate title and description with `$$`
    - add leading `@@@@@` to the images to be used as album covers
  - edit the `nanoPhotosProvider.cfg` to change the behaviour of the application (for example the size of the thumbnails)  

<br />
##### Step 2: configure your HTML page

- The page can be located anywhere on your webserver.
- Install nanoGALLERY for jQuery (see http://nanogallery.brisbois.fr)
- Configure the call to the plugin:
  - Use the specific parameters: `kind` and `jsonProvider`
    - `kind`: set value to `json`
    - `jsonProvider`: URL to the `nanoPhotosProvider.php` file installed in step 1

Example:

```js
jQuery(document).ready(function () {
  jQuery("#nanoGallery1").nanoGallery({
    thumbnailWidth: 150,
    thumbnailHeight: 150,
    kind: 'json',
    jsonProvider: 'http://mywebsever.com/mypath/nanoPhotosProvider/nanoPhotosProvider.php',
  });
});
```
<br />
<br />
##### Step 3: test your page to see the result ;-)

<br />
##### Step 4: add/change content
Add files and folders, or renaname them.
Please note that the thumbnails are never purged, so you may delete the `_thumbnails` folders to force a new generation.

<br />
### Supported image formats
JPEG, GIF and PNG.

<br />
### License
nanoPhotosProvider is licensed under [CC BY-NC 3.0](http://creativecommons.org/licenses/by-nc/3.0/).  
Only for personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoPhotosProvider for free.


### Requirements
* Webserver
* PHP >= v5.2 with GD-Library

