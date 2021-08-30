 <?php
 include ('conn.php');

 if(isset($_POST['del_multiple_data'])) {
    
    $all_id = $_POST['del_chk']; 
    $separate_all_id = implode(",",$all_id);

$query = "DELETE from products1 where id in ($separate_all_id)";
$query_run = mysqli_query($dbh,$query);
if($query_run)
{
    echo "deleted $separate_all_id";
    header("location:productpage.php");
}
else{
    echo "something went wrong";
}
    }
    ?>