<?php 
class CallApi{
    private $scriptURL;
    private $image_id;

    public function __construct(){
        $this->scriptURL = array(
            "https://script.google.com/macros/s/AKfycbyJlAqFbaN6AICml6fa0YNAw-4qQt90QaYUSF2Fznsj37KsJzUoBGWfMXzQRBParfhB/exec",
            "https://script.google.com/macros/s/AKfycbwwEa-B9Ek2sqMrSTBA0ndYTHdJBvtk0txuzkmZvPs7fOv4Ex8nXVY054Xjq2rb1bid/exec",
            "https://script.google.com/macros/s/AKfycbxrC79oNoq1HYvxYkpsf2HlRB6JwKTfedrxRNVy_HuyWMz301q8ez3MmOByqRwjSEc/exec");
        $this->image_id = array();
    }

    public function call($id){
        $json = file_get_contents($this->scriptURL[$id]);
        $obj = json_decode($json);
        $list = $obj->data;
        return $list;
    }

    /**
     * Get the value of image_id
     */ 
    public function getImage_id()
    {
        return $this->image_id;
    }

    /**
     * Set the value of image_id
     *
     * @return  self
     */ 
    public function setImage_id($image_id)
    {
        $this->image_id = $image_id;

        return $this;
    }
    public static function getImageContent($var){
        return 'https://drive.google.com/uc?export=view&id='.$var;
    }
}
?>