<link rel="stylesheet" type="text/css" href="Registerevent.css">
</link><?php
include 'Navbar.php';
require 'dbcon.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql="SELECT * FROM `eventinfo` where eid=$id";
    $query_run=mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run) > 0)
        {
            $event=mysqli_fetch_array($query_run);
            echo $event["name"];
            ?>
<div class='event'>
    <form action="dbevent.php" method='POST' enctype="multipart/form-data">
        <div class='Registerevent'>
            <label for="image">Image</label>
            <input type="file" name='image' id='image'>
            <input type="hidden" name='id' value="<?=$event["eid"];?>">
            <label for="name">Event Name</label>
            <input type="text" name='name' id='name' value="<?=$event["name"];?>">
            <label for="loc">Location</label>
            <input type="text" name='location' id='loc' value="<?=$event["location"];?>">
            <label for="date">Date</label>
            <input type="date" name='date' id='date' value="<?=$event["date"];?>">
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30" rows="5"
                placeholder="<?=$event["description"];?>"></textarea>
            <label for="orgname">Event Organizers</label>
            <input type="text" name='orgname' id='orgname' value="<?=$event["organizers"];?>">
            <input type="submit" value="Update" name="update" id="">

        </div>
    </form>

</div>

<?php
}
else{
    echo 'Error';
}
?>