<?php
$conn = mysqli_connect('localhost', 'root', '', 'ITE308SAS23');
$msg = "";

if (isset($_POST['logout'])) {
    header('Location: page1.php');
}
?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Profile</title>

    <style>
        td {
            font-size: 100%;
        }
    </style>
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



    <div class="content" style="padding-top: 20px;">
        <div class="leftdivprofile" style="    border-radius: 10px;
    float: left;
    width: 35%;
    background-color: white;
    margin:auto;
    min-width: 100px;
    min-height: 600px;
    padding-bottom: 20px;
    padding-top: 20px;">
            <center>
                <img src="images/pfp2.jpg" alt="profile" style="border-radius: 100%;" width="200px">
                <h1>Mark Joshua De Dios</h1>
            </center>
            <div style="padding-left: 20px; padding-right: 10px">
                <table>
                    <tr>
                        <td>Age:</td>
                        <td>999</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>Secret</td>
                    </tr>
                    <tr>
                        <td>Course:</td>
                        <td>BSIT</td>
                    </tr>
                    <tr>
                        <td>Hobbies:</td>
                        <td>
                            <ul>
                                <li>Watch Anime</li>
                                <li>Read Manga</li>
                                <li>Make Video Games</li>
                                <li>Play Video Games</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <br>
                <p>A simple man who desires an easy life. I don't have a lot of physical energy and despise leaving the house. Most of my hobbies involve activities that do not require me to move too much.</p>
                <br>
                <center>
                    <form method="post"><input type="submit" value="Log-out" name="logout"></form>
                </center>
            </div>
        </div>

        <div style="float: right; width: 64%; min-width: 300px; background-color: white; border-radius: 10px; padding-top: 40px; margin:auto;
    min-height: 600px;
    padding-bottom: 40px;">

            <div style="padding:10px;background:#000;webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;width:720px;margin:0 auto;overflow:hidden;">
                <iframe width="720" height="400" src="https://www.youtube.com/embed/WUOs-Rnvs8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <center>
                <br><br>
                <h2>A video that decribes me.</h2>
            </center>
        </div>
    </div>

</body>

</html>