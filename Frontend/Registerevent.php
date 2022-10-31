<?php
include 'Navbar.php';

   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    
    // require 'Events.php';
if(isset( $_SESSION['userName'])){
echo $_SESSION['userName'];
// if((time() - $_SESSION['last_login_timestamp'])>60){
// session_destroy();
// }
?>
<link rel="stylesheet" type="text/css" href="Registerevent.css">

</link>

<div class='event'>
    <form action="dbevent.php" method='POST' enctype='multipart/form-data'>
        <div class='Registerevent'>
            <label for="image">Image</label>
            <input type="file" name='image' id='image'>
            <label for="name">Event Name</label>
            <input type="text" name='name' id='name' required>
            <label for="loc">Location</label>
            <input type="text" name='location' id='loc' required>
            <label for="date">Date</label>
            <input type="date" name='date' id='date' required>
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30" rows="5" required></textarea>
            <label for="orgname">Event Organizers</label>
            <input type="text" name='orgname' id='orgname' required>
        </div>
        <div class="Eventinfo">
            <h3>Event Detail</h3>
            <label for="time">Time</label>
            <input type="time" name="time" id="time" required>
            <label for="capacity">Capacity</label>
            <input type="text" name="capacity" id="capacity">
            <label for="price">Ticket Price</label>
            <input type="text" name="price" id="price">
            <!-- <input type="submit" name="submit" value="Save"> -->

        </div>
        <input type="submit" name="save" id="">
    </form>
    hi
    highlight_file
    <?php
    }
    else{
        // echo "You need to login to register";
    include 'Footer.php';
        // header ('Refresh: 3; url=Footer.php');
    }
?>
</div>