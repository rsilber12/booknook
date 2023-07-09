<?php 
    // Include Connection File 
  require_once('../config.php');

  $position = explode(",",$_POST['ids']);
   // $position = $_POST['ids'];

    $i=1; 
    foreach($position as $k=>$v){

        // $sql = "Update images SET position=".$i." WHERE id=".$v;

        // $conn->query($sql);
        $update = $conn->query("UPDATE images SET position = $i WHERE id = $v"); 

        $i++;
    }
    return TRUE; 
?>