<?php

if(isset($_POST['name']))
    {
      $dataJson = file_get_contents("../global/feedbacks.json");
      $array = json_decode($dataJson, true);
      $name=$_POST['name'];
      $comment=$_POST['comment'];
      $rating = $_POST['rating'];
      // Get the contents of the JSON file 
      $obj->name = $name;
      $obj->comment = $comment;
      $obj->rating = $rating;
      array_push($array,$obj);
      $fh = fopen('../global/feedbacks.json','w');
      $final_json_data = json_encode($array);
      echo $final_json_data;
      fwrite($fh,$final_json_data);
    }
    header("Location:./feedbacks.php");
    
?>