<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<?php
echo 7;
session_start();
$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];
$typeLogin = $_POST['user'];

echo 13;
if($typeLogin == 0){
    $condition = "Account";
}else if($typeLogin == 1){
    $condition = "admin";
}
echo 19;
require('connectToDatabase.php');
$connected = new database();
$sql = "
    SELECT Username, Password 
    FROM ".$condition."
    WHERE Username LIKE '". $enteredUsername ."';
    ";
echo 27;
    $query = mysqli_query($connected->getDatabase(), $sql);
    $objResult = mysqli_fetch_array(mysqli_query($connected->getDatabase(), $sql));
    // เช็ค username และ password
    mysqli_close($connected->getDatabase());
    $username = $objResult["Username"];
    $pass = $objResult["Password"];
echo 34;
    if($enteredUsername == $username && $enteredPassword == $pass){
        echo 36;
        $result = mysqli_fetch_assoc($query);
        $_SESSION['user_login'] = $enteredUsername;
        // $_SESSION['user_stay'] = 0;
        if ($typeLogin == 0){
            echo 41;
            $_SESSION['login'] = "success";
            header("Location: /index.php");
            exit();
        }
        else{
            echo 47;
            header("Location: /index.php");
            exit();
        }
    }

    else {
        echo 53;
        if ($typeLogin == 0){
            $_SESSION['login'] = "fail";
            header("Location: /loginuser/Login.php");
  
        }
        else {
            $_SESSION['login'] = "fail";
            header("Location: /loginemploy/Login.php");

        }
        //"Login.html?login=false" (การreturn ค่า)
        exit();
    }
    
?>
