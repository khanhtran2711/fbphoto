<?php 
class CallApi{
    private $scriptURL;
    private $image_id;

    public function __construct(){
        $this->scriptURL = "";
        $this->image_id = array();
    }

    public function call(){
        $json = file_get_contents('https://script.google.com/macros/s/AKfycbyJlAqFbaN6AICml6fa0YNAw-4qQt90QaYUSF2Fznsj37KsJzUoBGWfMXzQRBParfhB/exec');
        $obj = json_decode($json);
        $list = $obj->data;
        for($i=0;$i<count($list); $i++):

            $imgid[$i] = explode('/d/',$list[$i]->img_id);
            $this->image_id[] = $imgid[0];
        endfor;
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
}
?>