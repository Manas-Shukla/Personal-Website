<?php

if(isset($_POST['name']))
    {
      session_start();
      $_SESSION['msg'] = "'Your message has been received'";
      $dataJson = file_get_contents("../global/contacts.json");
      $array = json_decode($dataJson, true);
      $name=$_POST['name'];
      $message=$_POST['message'];
      $email = $_POST['email'];
      // Get the contents of the JSON file 
      $obj->name = $name;
      $obj->message = $message;
      $obj->email = $email;
      array_push($array,$obj);
      $fh = fopen('../global/contacts.json','w');
      $final_json_data = json_encode($array);
      fwrite($fh,$final_json_data);
    }
    header("Location:./contact.php");
    
?>