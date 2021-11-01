<?php
class crochetEntity
{
    public $id;
    public $type;
    public $price;
    public $country;
    public $image;
   
    
    function __construct($id, $type, $price,  $country, $image) {
        $this->id = $id;  
        $this->type = $type;
        $this->price = $price; 
        $this->country = $country;
        $this->image = $image;

    }

}
class buyEntity
{
    public $prodect_id;
    public $name;
    public $phone_num;
     
    
    function __construct($id, $name,$phone_num) {
        $this->id = $id;
        $this->name = $name;
        $this->phone_num=$phone_num;
    }
}
?>