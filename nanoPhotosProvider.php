<?php

/**
 * nanoPhotosProvider add-on for nanoGALLERY
 *
 * This is an add-on for nanoGALLERY (image gallery - http://nanogallery.brisbois.fr).
 * This PHP application will publish your images and albums from a PHP webserver to nanoGALLERY.
 * The content is provided on demand, one album at one time.
 * Thumbnails are generated automatically.
 * 
 * License: For personal, non-profit organizations, or open source projects (without any kind of fee), you may use nanoGALLERY for free. 
 * -------- ALL OTHER USES REQUIRE THE PURCHASE OF A PROFESSIONAL LICENSE.
 *
 *
 * PHP 5.2+
 * @version       0.9.2
 * @author        Christophe BRISBOIS - http://www.brisbois.fr/
 * @Contributor   Ruplahlava - https://github.com/Ruplahlava
 * @Contributor   EelcoA  - https://github.com/EelcoA
 * @Contributor   eae710 - https://github.com/eae710
 * @copyright     Copyright 2015
 * @license       CC BY-NC 3.0
 * @link          https://github.com/Kris-B/nanoPhotosProvider
 * @Support       https://github.com/Kris-B/nanoPhotosProvider/issues
 *
 */
require './nanoPhotosProvider.JSON.class.php';

// Available values development, production
// Codeigniter env switch https://github.com/bcit-ci/CodeIgniter/

define('ENVIRONMENT', 'production');

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'production':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        } else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}

$t = new galleryJSON();

?>
