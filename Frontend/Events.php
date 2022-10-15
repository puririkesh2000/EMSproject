<div class="n">

    <?php
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
        
        echo'
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">'.$event['name'].'</h5>
                <p class="card-text">'.$event['location'].'</p>
                <a href="#" class="btn btn-primary">'.$event['description'].'</a>
                </div>
            </div>';
        }
        }
    // }
    
?>
</div>