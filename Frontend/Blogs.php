<html>

<head>
    <link rel="stylesheet" type="text/css" href="Blogs.css">

</head>

<body>
    <h5 class="container-heading" style="padding-top:40px">OUR LATEST BLOGS</h5>

    <div class="blog-body" onclick="sclosepopup(); closepopup()">
        <?php
    $data = array(
        array("../Images/blog1.png"," Attending an event not only gives you the opportunity to meet others but also gives exposure to newideas that could be implemented in your own work. ","Why should you participate in event?","By Rikesh Puri 191430"),
        array("../Images/blog2.png","Events bring people together for a common purpose.A well organised event can have a great impact in terms of visibility and goodwill. ", "Why should you organize an event?","By Samyog Adhikari 191449"),
        array("../Images/blog3.png","Theres something special about an event that you or your friend organized.Firstofall you need tosign in to register an event and fill up the given forms.", "How to post an event?" ,"By Sanij Maharjan 191438 ")
    );
    for ($i=0;$i<3;$i++){
        // for($row = 0; $row <3 ; $row++) {
            //     for ($col = 0; $col < 3; $col++) {
                
                ?>

        <div class="blog-card">
            <img src="<?php echo $data[$i][0] ?>" alt=" img" width="345" height="180">
            <div class="blog-content">
                <h3 class="blog-h3"><?php echo $data[$i][2] ?> </h3>
                <span class="blog-span"> <?php echo $data[$i][3] ?></span>
                <p class="blog-p"><?php echo $data[$i][1] ?> </p>

            </div>
        </div>
        <?php  }  ?>
    </div>
</body>

</html>