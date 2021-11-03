<?php 
session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$username = "suthan";
$password = "12345";
if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === $username && $_POST['password'] === $password) {
                header("Location: homepage.php");
                exit();
            }
                else {
            echo "<script language='javascript'>";
            echo "alert('Incorrect UserName and Password')";
            echo "</script>";
            echo "<script>window.location.href='index1.php'</script>";
            }
        }
    ?>