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
    <div class="Eventdetail-box">
        <h3>Event Detail</h3>
        <li>TIme</li>
        <li>Capacity</li>
        <li>Ticket Price</li>
    </div>
</div>

<?php
}
}
?>

</html>

</html>