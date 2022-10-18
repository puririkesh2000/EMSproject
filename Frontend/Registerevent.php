<?php
include 'Navbar.php';
?>
<link rel="stylesheet" type="text/css" href="Registerevent.css">
</link>
<div class='event'>
    <form action="dbevent.php" method='POST' enctype='multipart/form-data'>
        <div class='Registerevent'>
            <label for="image">Image</label>
            <input type="file" name='image' id='image'>
            <label for="name">Event Name</label>
            <input type="text" name='name' id='name'>
            <label for="loc">Location</label>
            <input type="text" name='location' id='loc'>
            <label for="date">Date</label>
            <input type="date" name='date' id='date'>
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30" rows="5"></textarea>
            <label for="orgname">Event Organizers</label>
            <input type="text" name='orgname' id='orgname'>
            <input type="submit" name="save" id="">
        </div>
    </form>
    hi
    highlight_file
</div>