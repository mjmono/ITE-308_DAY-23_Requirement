<?php

$conn = mysqli_connect('localhost', 'root', '', 'ITE308SAS23');
$msg = "";

if (isset($_POST['submit'])) {
    $topic = $_POST['topic'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $sql = "INSERT INTO diaries (TOPIC, CATEGORY, CONTENT, DATE) VALUES('$topic', '$category', '$content', '$date')";

    if (mysqli_query($conn, $sql)) {
        header('Location: page5.php');
    } else {
        $msg = "An error occured.";
    }
}

?>






<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Write Diary</title>

    <style>
        .form-box {
            width: 600px;
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



    <div class="content">
        <center>
            <br><br><br>
            <div class="form-box" style="margin: 2%; font-size: 150%;">
                <form action="page4.php" method="post">
                    <h3>Diary Entry</h3>
                    <table>

                        <tr>
                            <td>
                                <label for="topic">Topic:</label>
                            </td>
                            <td>
                                <input type="text" name="topic" id="topic" required placeholder=""><br>
                            </td>
                        </tr>

                        <tr>
                            <td class="tleft">
                                <label for="category">Category:</label>
                            </td>
                            <td class="tright">
                                <select id="category" name="category" style="width: 350px;">
                                    <option value="Home">Home</option>
                                    <option value="Personal">Personal</option>
                                    <option value="School">School</option>
                                    <option value="Others">Others</option>
                                </select><br>
                            </td>
                        </tr>

                        <tr>
                            <td class="tleft">
                                <label for="content">Content:</label>
                            </td>
                            <td class="tright">
                                <textarea id="content" name="content" rows="2" cols="40" style="resize: vertical; border-radius: 10px; box-shadow: none; width: 100%;" required></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td class="tleft">
                                <label for="date">Date:</label>
                            </td>
                            <td class="tright">
                                <input type="date" id="date" name="date" required placeholder="" style="width: 100%; border-radius: 10px; text-align: center; font-size: 16px;"><br>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <center>
                                    <p style="color: #004e3b; font-size: 70%"><?php echo $msg; ?></p>
                                    <input type="submit" value="Submit" name="submit">
                                </center>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </center>
    </div>


</body>

</html>