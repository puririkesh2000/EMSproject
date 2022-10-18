<link rel="stylesheet" type="text/css" href="Events.css">
</link>

<div class="n">

    <?php
    session_start();
    require 'dbcon.php';
    $sql="SELECT * FROM `eventinfo`";
    $query_run=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query_run);
    echo $num;
    if($num>0){
        foreach($query_run as $event)
        {
            // $age = array($event['name'],$event['location'],$event['description']);
                // array("JOBFAIR","DEERWALK","xxxxxxxxxxx"), 
                // array("LIVEMUSIC","GARAGE","yyyyyyyyyyyyy"),
                // array("ITFEST", "NCIT","zzzzzzzzzzzzzzzz")
                
        
            // for($i = 0; $i < count($age); $i++) {
            
        //   echo "Key=" . $x . ", Value=" . $x_value;
        //   echo "<br>";
        ?>
    <div class="card">

        <div class="card-body">
            <div class="card-action">

                <a href="Eventedit.php?id=<?=$event['eid']?>"><button>E</button>
                </a>
                <form action="dbevent.php" method="POST">
                    <button type="submit" value="<?=$event['eid']?>" name="delete">D</button>
                </form>
            </div>
            <img src="<?=$event['logo']?>" alt="img" height="50" width="50">
            <a href=" Eventdetail.php?id=<?=$event['eid']?>" class="">
                <p class="card-text">
                    <?=$event['location']?></p>
                <a href="#" class="btn btn-primary">
                    <?=$event['description']?></a>
        </div></a>
    </div>
    <?php
    }

    }

    ?>
</div>
</div>