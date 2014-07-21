Scan_folder
===========

By this we can get out put of scan folder by "XML" or "JSON" format and we can also exclude  folder in scan folder 

For XML Output
====================

<pre><code>
/** generate xml and JSON containing image files in the folder **/
require_once 'folder_images.php';

$scanFolder = new ScanFolder("xml");
$scanFolder->_setFolder("Images");

/**get output by XMl **/
$scanFolder->getimageList("xml");

</pre></code>

For JSON Output
====================

<pre><code>
/**get output by JSON **/
$scanFolder->getimageList("json");

</pre></code>
