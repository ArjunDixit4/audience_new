<?php
 include ('conn.php');
 // include ('functions.php');
//include ('config.php');
    
// if(isset($_POST['delete'])){
    $id=$_GET['id'];
    // die("hello");
   //  echo "hello";
   // // $id=$_POST['brand_id'];
   //  $data = 'id='.$id;
   //  $response=delete('products1',$data);
   //      if($response == true){
   //          echo "deleted" ;
   //          header("location:productpage.php");
   //      }
   //       else{
   //          echo ("Not deleted".mysqli_error($dbh));
   //          header("location:productpage.php");
   //      }
   //          header("location:productpage.php");
        //}
       
       $id=$_POST['id'];
    $q=" DELETE FROM products WHERE id = $id ";
    $query_run = mysqli_query($dbh,$q);
    header("location:productpage.php");
 ?>