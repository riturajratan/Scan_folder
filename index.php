<?php
/**
 * generate xml and JSON containing image files in the folder
 */
require_once 'folder_images.php';

$scanFolder = new ScanFolder("xml");
$scanFolder->_setFolder("Images");

/**get output by XMl **/
$scanFolder->getimageList("xml");




