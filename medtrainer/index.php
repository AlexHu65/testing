<?php

function countedStrings($array , $fruit){

  $counted = 0;
  for ($i=0; $i < count($array) ; $i++) {
    // code...
    if(is_array($array[$i])){

      foreach ($array[$i] as $key => $value) {
        // code...
        if ($value == $fruit) {
          // code...
        return $counted +  countedStrings($array[$i] , $value);
        }
      }

    }else if($array[$i] == $fruit) {
      $counted++;
    }
  }

  return $counted;

}

$fruit = "apple";
$array = ["banana", "apple", "grappe"  , ["banana" ,  "apple" ,  "apple",["apple" ,["apple",["apple", "banana"]]]]];
$counted = countedStrings($array, $fruit);

echo "<pre>
<b>Array where to search: </b><br>".print_r($array, 1)." <br> Search: ". $fruit . "
</pre>";


echo $counted;
