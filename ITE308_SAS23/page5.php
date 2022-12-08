<?php

$conn = mysqli_connect('localhost', 'root', '', 'ITE308SAS23');
$msg = "";

$sql = "SELECT * FROM diaries;";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>






<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>View Diary</title>
</head>

<body>
    <div class="header" id="navbar">
        <ul class="nav-bar" style="background-color: #ffffff;">
            <li class="nav-content-left nav-content"><a style="font-size: 120%;"><b>KnowMe</b></a></li>
            <li class="nav-content-right nav-content"><a href="page2.php">Profile</a></li>
            <li class="nav-content-right nav-content"><a href="page3.php">Gallery</a></li>
            <li class="nav-content-right nav-content"><a href="page5.php">View Diary</a></li>
            <li class="nav-content-right nav-content"><a href="page4.php">Write Diary</a></li>
        </ul>
    </div>


    <div class="content">
        <center>
            <?php foreach ($data as $topic) : ?>
                <div style="width: 600px; background-color: white; padding: 10px; border-radius: 10px; margin: 15px;">
                    <h1><?php echo $topic['TOPIC'] ?></h1>
                    <p><?php echo $topic['CATEGORY'] ?></p>
                    <p><?php echo $topic['CONTENT'] ?></p>
                    <p><?php echo $topic['DATE'] ?></p>
                </div>
            <?php endforeach ?>

        </center>
    </div>


</body>

</html>