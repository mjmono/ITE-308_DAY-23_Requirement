<?php

$conn = mysqli_connect('localhost', 'root', '', 'ITE308SAS23');
$msg = "";

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['uid'];

    $sql = "SELECT ID FROM ACCOUNTS WHERE PASSWORD = '$pass' AND USERNAME = '$uname'";

    $result = mysqli_query($conn, $sql);

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    if (count($users) != 0) {
        session_start();
        $_SESSION['user_id'] = $users[0]['ID'];
        $msg = 'Logged in';

        header('Location: page2.php');
    } else {
        $msg = 'Wrong username or password.';
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Log-In</title>
</head>

<body>
    <div class="header" id="navbar">
        <ul class="nav-bar" style="background-color: #ffffff;">
            <li class="nav-content-left nav-content"><a style="font-size: 120%;"><b>KnowMe</b></a></li>
            <li class="nav-content-right nav-content"><a href="">About</a></li>
        </ul>
    </div>



    <div class="content">
        <center>
            <br><br><br>
            <div class="form-box" style="margin: 2%; font-size: 150%; width: 400px;">
                <form action="page1.php" method="post">
                    <h3>Log-In</h3>
                    <table>

                        <tr>
                            <td style="width: 30%;">
                                <label for="uname">Username</label>
                            </td>
                            <td style="width: 60% !important;">
                                <input type="text" id="uname" name="uname" required placeholder=""><br>
                            </td>
                        </tr>

                        <tr>
                            <td class="tleft">
                                <label for="pass">Password</label>
                            </td>
                            <td class="tright">
                                <input type="text" id="uid" name="uid" required placeholder=""><br>
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