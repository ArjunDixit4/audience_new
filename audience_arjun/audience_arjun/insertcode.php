       <?php
       // include('conn.php');
      // include('functions.php');
//        if(isset($_POST['done'])){
//        $fname=$_GET('fname'); 
//         $lname=$_GET('lname');
//         $email=$_GET('email');
//        // $brand_id=get('brand_id');
//         $phone=$_GET('phone');
//         $address=$_GET('address');
//         }

//         $sql = "INSERT INTO products1 (fname, lname, email, phone, address)
// VALUES ('$fname', '$lname', '$email', '$phone', '$address')";
// $query=mysqli_query($dbh,$sql);


include 'conn.php';
       if(isset($_POST['done'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $q = "INSERT INTO products1 (`fname`, `lname`, `email`, `phone`, `address`) VALUES ('$fname','$lname','$email','$phone','$address')";
       }
       $query=mysqli_query($conn,$q);
       header("location:productpage.php");
       ?>