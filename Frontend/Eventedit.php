<link rel="stylesheet" type="text/css" href="Registerevent.css">
</link><?php
include 'Navbar.php';
require 'dbcon.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql="SELECT * FROM eventinfo INNER JOIN eventdetail ON eventinfo.eid=eventdetail.eid WHERE eventinfo.eid=$id;";
    $query_run=mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run) > 0)
        {
            $event=mysqli_fetch_array($query_run);
            // echo $event["name"];
            ?>
<div class='event'>
    <form action="dbevent.php" method='POST' enctype='multipart/form-data'>
        <div class='Registerevent'>
            <h2>Event Information</h2>
            <input type="hidden" name='id' id='id'required value="<?=$event["eid"];?>">
            <label for="image"> Choose a Photo</label>
            <div class="input-icon">
                <input type="file" name='image' id='image'required value="<?=$event["logo"];?>">
                <i class="fa-solid fa-image"></i>
            </div>
            <label for="name">Event Name</label>
            <div class="input-icon">
                <input type="text" name='name' id='name' required placeholder="Enter Event Name"
                    value="<?=$event["name"];?>"> <i class="fa-solid fa-file"></i>
            </div>
            <label for="loc"> Event Location</label>
            <div class="input-icon">
                <input type="text" name='location' id='loc' required placeholder="Enter Event Location"
                    value="<?=$event["location"];?>">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <label for="date">Event Date</label>
            <div class="input-icon">
                <input type="date" name='date' id='date' required placeholder="Enter Event Date"
                    value="<?=$event["date"];?>">
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <label for="desc">Event Description</label>
            <div class="input-icon" style="width:450px;background-color:transparent;">
                <textarea name="description" id="desc" cols="100" rows="20" required placeholder="Enter Event Description"> <?php echo$event["description"]?></textarea>
                <!-- <i class="fa-sharp fa-solid fa-file-word"></i> -->
            </div>
            <label for="orgname">Event Organizers</label>
            <div class="input-icon">
                <input type="text" name='orgname' id='orgname' required placeholder="Enter Event Organizers"
                    value="<?=$event["organizers"];?>">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>

            <!-- </div>
        <div class="Eventinfo"> -->
            <h2>Event Detail</h2>
            <label for="time">Time</label>
            <div class="input-icon">
                <input type="time" name="time" id="time" required placeholder="Enter Event Time"
                    value="<?=$event["time"];?>">
                <i class="fa-solid fa-business-time"></i>
            </div>
            <label for="capacity">Capacity</label>
            <div class="input-icon">
                <input type="text" name="capacity" id="capacity" placeholder="Enter Event Capacity"
                    value="<?=$event["capacity"];?>">
                <i class="fa-solid fa-clipboard-user"></i>
            </div>

            <label for="price">Ticket Price</label>
            <div class="input-icon">
                <input type="text" name="price" id="price" placeholder="Enter Event Ticket Price"
                    value="<?=$event["price"];?>">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>

        </div>
        <input type="submit" name="update" id="" class="button-submit">
    </form>

</div>

<?php
}
else{
    echo 'Error';
}
include 'Footer.php';
?>