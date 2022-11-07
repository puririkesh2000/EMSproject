<?php
include 'Navbar.php';

   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    ?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="Events.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </link>
</head>
<h5 class="container-heading" style="padding-top:30px">FEATURED EVENTS</h5>
<div class="event-container" onclick="sclosepopup(); closepopup()">
    <?php
    require 'dbcon.php';
    $sql="SELECT * FROM `eventinfo` ORDER BY `date` ASC";
    $query_run=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query_run);
    if($num>0){
        foreach($query_run as $event)
        {
         
        ?>

    <div class=" card">
        <?php
        if(isset($_SESSION['userName'])) {
        $s="SELECT usertype FROM `usertable` WHERE email='".$_SESSION['userName']."'";
        $query=mysqli_query($con,$s);
        if(mysqli_num_rows($query) > 0){
            while($data = mysqli_fetch_assoc($query)){
                
        if($data['usertype']=='admin'){
        ?>
        <div class="card-action">

            <a href="Eventedit.php?id=<?=$event['eid']?>"><button class='card-button'>
                    <i class="fa-solid fa-user-pen"></i></button>
            </a>
            <form action="dbevent.php" method="POST">
                <button type="submit" value="<?=$event['eid']?>" name="delete" class='card-button'><i
                        class="fa-solid fa-trash"></i></button>
            </form>
        </div>
        <?php
        }
        }
    }}
        ?>



        <div class="card-body">
            <div class='card-img'>
                <img src="<?=$event['logo']?>" alt="img" height="100" width="170">
            </div>
            <div class='card-info'>
                <a href=" Eventdetail.php?id=<?=$event['eid']?>" class="card-href">
                    <h3 class="card-text">
                        <?=$event['name']?></h3>
                    <ul class='card-ulist'>
                        <li class='card-list'><i class="fa-solid fa-calendar-days"></i><?=$event['date']?> </li>
                        <li class='card-list'><i class="fa-solid fa-location-dot"></i><?=$event['location']?></li>
                        <li class='card-list'><i class="fa-solid fa-pen-to-square"></i><?=$event['organizers']?></li>
                    </ul>

                </a>
            </div>
        </div></a>
    </div>
    <?php
    }

    }
    // session_destroy();

    ?>
</div>
</div>
<?php 
include 'Footer.php';
?>
</html>