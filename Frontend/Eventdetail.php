<?php
require 'dbcon.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
 
}
$sql="SELECT * FROM `eventinfo` where eid=$id";
    $query_run=mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run) > 0){
        while($data = mysqli_fetch_assoc($query_run)){
            echo $data["name"];
            echo $data["date"];
            echo $data["description"];
        }
    }
?>