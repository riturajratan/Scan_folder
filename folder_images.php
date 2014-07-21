<?php
/**name     :   Folder_images.php **/
/**work     :   it list all folder images in XMl Format **/
/**Author   :   R.R.R **/


Class ScanFolder
{

    /** set Folder Path **/
    public $ScanFolder="";

    /** By this we get folder path **/

    public function _getFolder(){

        return $this->ScanFolder;

    }

    /** By this we set folder path **/
    public function _setFolder($setPath){

        $this->ScanFolder=$setPath;

    }

    /** scan folder and return object of images
     *  which are exist in folder
     **/

    private function scanFolderImages()
    {

        /**
         * [$folders here you set folder name which you dont want to show in result
         * like there are "a" "b","c" folder in also in your scaN FOLDER and you want
         *  only images not this folder then you will set like
         *  $folders= array('..', '.',a,b,c);]
         */
        $folders= array('..', '.');
        $files = array_diff(scandir($this->ScanFolder), $folders);

        return $files;

    }

    /** By this we return imagelist by the given
     *  format if it is pass as xml
     *  then return as XMl else return
     *   in JSON**/

    public function getimageList($format="")
    {

        if($format == "xml")
        {

            $xml=new SimpleXMLElement('<xml/>');

            $Images=$this->scanFolderImages();
            $track = $xml->addChild('image');
            foreach($Images as $k=>$val)
            {
                $track->addChild('path', $this->ScanFolder."".$val);
            }

            Header('Content-type: text/xml');
            print($xml->asXML());



        }else{

            $Images=$this->scanFolderImages();
            $track = array();

            foreach($Images as $val)
            {
                $track[]= $this->ScanFolder."".$val;
            }

            echo json_encode($track);


        }

    }

}

?>
