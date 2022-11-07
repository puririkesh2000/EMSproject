<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    include 'Navbar.php';
    ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Eventdetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="Eventdetail-banner">

</div>
<?php
require 'dbcon.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
 
}
$sql="SELECT * FROM `eventinfo` where eid=$id";
    $query_run=mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run) > 0){
        while($data = mysqli_fetch_assoc($query_run)){
            ?>
<div class='Eventdetail-container'>
    <div class='container-img'>
        <img src="<?=$data["logo"]?>" alt="" height=100 width=170>
    </div>
    <div class='container-info'>
        <h3 class="container-text">
            <?=$data['name']?></h3>
        <ul class='container-ulist'>
            <li class='container-list'><i class="fa-solid fa-calendar-days"></i><?=$data['date']?> </li>
            <li class='container-list'><i class="fa-solid fa-location-dot"></i><?=$data['location']?></li>
            <li class='container-list'><i class="fa-solid fa-pen-to-square"></i><?=$data['organizers']?></li>
        </ul>
    </div>
</div>

<div class="Eventdetail-info">
    <div class="Eventdetail-descp">
        <p>
            <?=$data['description']?>
        </p>
    </div>
    <?php
}
}
$sql="SELECT * FROM `eventdetail` where eid=$id";
    $query_run=mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run) > 0){
        while($data = mysqli_fetch_assoc($query_run)){
     
?>
    <div class="Eventdetail-box">
        <div class="Eventdetail-detail">
            <h3 style="color:#102b7b;">Event Detail</h3>
            <li><i class="fa-solid fa-business-time"></i><?=$data["time"]?></li>
            <li><i class="fa-solid fa-clipboard-user"></i> <?=$data["capacity"]?></li>
            <li><i class="fa-solid fa-dollar-sign"></i> <?=$data["price"]?></li>
        </div>
        <div class="Eventdetail-loginbox">
           <h4> Want to register your own event?</h4>
            <a href="Registerevent.php"><button class="navbar-signup">Register here</button></a>
        </div>
    </div>

</div>
<?php
        }}
        include 'Footer.php';
?>

</html>