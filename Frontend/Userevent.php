<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    include 'Navbar.php';
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

<body>


    <h5 class="userevent-heading">FEATURED EVENTS</h5>
    <div class="event-container" style="margin:0;padding:0" onclick="sclosepopup(); closepopup()">
        <?php
    require 'dbcon.php';
    $sql="SELECT * FROM eventinfo INNER JOIN eventdetail ON eventinfo.eid=eventdetail.eid WHERE eventinfo.uid='". $_SESSION['id']."';";
    $query_run=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query_run);
    if($num>0){ ?>
        <?php
     foreach($query_run as $event)
    {
    ?>

        <div class=" card">

            <div class="card-action">

                <a href="Eventedit.php?id=<?=$event['eid']?>"><button class='card-button'>
                        <i class="fa-solid fa-user-pen"></i></button>
                </a>
                <form action="dbevent.php" method="POST">
                    <button type="submit" value="<?=$event['eid']?>" name="delete" class='card-button'><i
                            class="fa-solid fa-trash"></i></button>
                </form>
            </div>




            <div class="card-body">
                <div class='card-img'>
                    <img src="<?=$event['logo']?>" alt="img" height="120" width="250">
                </div>
                <div class='card-info'>
                    <a href=" Eventdetail.php?id=<?=$event['eid']?>" class="card-href">
                        <h3 class="card-text">
                            <?=$event['name']?></h3>
                        <ul class='card-ulist'>
                            <li class='card-list'><i class="fa-solid fa-calendar-days"></i><?=$event['date']?> </li>
                            <li class='card-list'><i class="fa-solid fa-location-dot"></i><?=$event['location']?></li>
                            <li class='card-list'><i class="fa-solid fa-pen-to-square"></i><?=$event['organizers']?>
                            </li>
                        </ul>

                    </a>
                </div>
            </div></a>
        </div>
        <?php
    }

    }
    else{
        ?>
        <div class="Myevent-container">
            <div class="error-img">
            </div>
            <h3 class="error-h3">
                You haven't registered an event!
                <a href="Registerevent.php"><button class="navbar-signup" style="width:140px;margin-top:5px;">Register
                        Now</button></a>
            </h3>
        </div>

    </div>
    </div>
    </div>

</body>

</html>
<?php 
    }
    include 'Footer.php';
    ?>