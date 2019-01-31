<?php
class Book{
    public $discount;
    protected $info =[
        [ 
          "id"=>"14",
          "name"=>"Equate pain and fever",
          "writer"=>"Ryun Brunone",
          "price"=>555
        ],[
          "id"=>"3",
          "name"=>"Oxygen",
          "writer"=>"Margeaux Wittey",
          "price"=>812
        ],[
          "id"=>"03397",
          "name"=>"Equaline pain relief pm",
          "writer"=>"Maggie Stelljes",
          "price"=>404
        ],[
          "id"=>"84435",
          "name"=>"CELLBOOSTING HOMME",
          "writer"=>"Constantino Van der Krui",
          "price"=>359
        ],[
          "id"=>"9",
          "name"=>"LBEL MAXIMUM COMFORT AND LONG-LASTING FOUNDATION SPF 10",
          "writer"=>"Louisette Sisley",
          "price"=>536
        ],[
          "id"=>"310",
          "name"=>"Doxycycline Hyclate",
          "writer"=>"Gaylor Labba",
          "price"=>930
        ],[
          "id"=>"43",
          "name"=>"Exuviance CoverBlend Concealing Treatment Makeup",
          "writer"=>"Noe Wickenden",
          "price"=>559
        ],
        ["id"=>"8","name"=>"MELALEUCA QUINQUENERVIA POLLEN","writer"=>"Ashlee D'Hooge","price"=>570],
        ["id"=>"1","name"=>"SoCALM Pain Relieving","writer"=>"Decca Mousley","price"=>214],
        ["id"=>"60","name"=>"MEDIAN New Forest","writer"=>"Olly Stears","price"=>217],
        ["id"=>"42","name"=>"Acetaminophen and Diphenhydramine HCl","writer"=>"Martha Bothams","price"=>463],
        ["id"=>"04","name"=>"Walgreens","writer"=>"Cacilia Bellward","price"=>773],
        ["id"=>"04351","name"=>"Clobetasol Propionate","writer"=>"Addison Melloy","price"=>186],
        ["id"=>"4","name"=>"COTTON SEED","writer"=>"Chrystal Ciccottio","price"=>60],
        ["id"=>"97","name"=>"Skin clearpplies for Men antiperspirant","writer"=>"Nev Ellingsworth","price"=>722],
        ["id"=>"03721","name"=>"Topiramate","writer"=>"Teddi Geal","price"=>357],
        ["id"=>"6483","name"=>"Divalproex Sodium","writer"=>"Aleksandr Hilldrup","price"=>690],
        ["id"=>"3037","name"=>"AIR COMPRESSED","writer"=>"Kenny Simmgen","price"=>345],
        ["id"=>"38216","name"=>"Synthroid","writer"=>"Ragnar Ochterlonie","price"=>471],
        ["id"=>"55","name"=>"Broncho Dilate","writer"=>"Constantino Fildes","price"=>56],
        ["id"=>"558","name"=>"QS Plus","writer"=>"Valaria Jordi","price"=>767],
        ["id"=>"6810","name"=>"Carvedilol","writer"=>"Marylee Varah","price"=>696],
        ["id"=>"33","name"=>"Woodwards HandClens Foaming Sanitizer","writer"=>"Renaud Clutten","price"=>863],
        ["id"=>"4732","name"=>"CVS Pharmacy","writer"=>"Saunder Impleton","price"=>194],
        ["id"=>"08554","name"=>"Oxygen","writer"=>"Christiane Mines","price"=>259],
        ["id"=>"62","name"=>"Ibuprofen","writer"=>"Eberto Seely","price"=>989],
        ["id"=>"42619","name"=>"Topcare Lubricant Eye","writer"=>"Rosmunda Baike","price"=>752],
        ["id"=>"5","name"=>"Apis Bryonia Special Order","writer"=>"Zed Romagosa","price"=>63],
        ["id"=>"085","name"=>"Halobetasol Propionate","writer"=>"Jeddy Alexsandrev","price"=>48],
        ["id"=>"4898","name"=>"Treatment Set TS345049","writer"=>"Kalle Beller","price"=>740]
      ];
    
    public function sortByID()
    {
        $data = [];
        foreach ($this->info as $key => $value)
        {
            $data[$key]=$value['id'];
        }
        array_multisort($data,SORT_ASC,$this->info);
        return $this->info;
    }

    public function sortByIdASCSort(){
        $temp=0;
        for($i = 0 ;$i<count($this->info); $i++){
            for($j = 0 ; $j<count($this->info) - 1;$j++ ){
                if($this->info[$j]['id'] > $this->info[$j+1]['id']){
                    $temp = $this->info[$j]['id'];
                    $this->info[$j]['id'] = $this->info[$j+1]['id'];
                    $this->info[$j+1]['id'] = $temp;
                }
            }
        }
        return $this->info;        
    }

    public function sortByIdDESCSort(){
        $temp=0;
        for($i = 0 ;$i<count($this->info); $i++){
            for($j = 0 ; $j<count($this->info) - 1;$j++ ){
                if($this->info[$j]['id'] < $this->info[$j+1]['id']){
                    $temp = $this->info[$j]['id'];
                    $this->info[$j]['id'] = $this->info[$j+1]['id'];
                    $this->info[$j+1]['id'] = $temp;
                }
            }
        }
        return $this->info;        
    }
    
    public function sortByName()
    {
        $name = [];
        foreach ($this->info as $key => $value)
        {
            $name[$key]=$value['name'];
        }
        array_multisort($name,SORT_DESC,SORT_STRING,$this->info);
        return $name;
    }

    public function sortByName2()
    {
        $name2 = [];
        foreach ($this->info as $key => $value)
        {
            $name2[$key]=$value['name'];
        }
        array_multisort($name2,SORT_ASC,SORT_STRING,$this->info);
        return $name2;
    }

    public function sortByPrice()
    {
        $price = [];
        foreach ($this->info as $key => $value)
        {
            $price[$key]=$value['price'];
        }
        array_multisort($price,SORT_ASC,$this->info);
        return $price;
    }

    public function sortByPrice2()
    {
        $price2 = [];
        foreach ($this->info as $key => $value)
        {
            $price2[$key]=$value['price'];
        }
        array_multisort($price2,SORT_DESC,$this->info);
        return $price2;
    }

    
    public function getDiscountPrice($id,$discount){
        $discounted_price =0;
        foreach($this->info as $key => $value){
            foreach($value as $key2 => $value2){
                if($key2=="id"&& $value2==$id)
                {    
                    $discounted_price = $value["price"]-($value["price"]*($dicount/100));
                }    
            }                  
        }

        if($discounted_price!=0){    
            return $discounted_price;
        }elseif($discount>=100){
            return "Have Id";
        }else{
            return "No match"; 
        }
    }
 
     public function searchBook($id){
         $searchbook= [];
         foreach($this->info as $key => $value){
             foreach($value as $key2 => $value2){
                if($key2=="id" && $value2==$id){
                    $searchbook = $value; 
                 }
             }     
         }
          print_r($searchbook);
     }

      
     public function getDiscount($id,$discount){
        $discounted_price =0;
        $haveId = false;

        foreach($this->info as $key => $value){
            foreach($value as $key2 => $value2){
                if($key2=="id"&& $value2==$id)
                {   
                    $discounted_price = $value["price"]-$discount;
                    $haveId = true ;
                }    
            }                  
        }

        if($discounted_price!=0){    
            return $discounted_price;
        }elseif($haveId==true && $discounted_price<=0){
            return "Free";
        }else{
            return "No match"; 
        }
    }
}
$book= new Book();
//print_r($book->sortByID());
//print_r($book->sortByName());
//print_r($book->sortByName2());
//print_r($book->sortByPrice());
//print_r($book->sortByPrice2());
//$x = $book->getDiscountPrice(83435,10);
//echo $x;
//return $book->searchBook(60);
 //$a = $book->getDiscount(6810,690);
 //echo $a;
 print_r($book->sortByIdDESCSort());
 ?>

