<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<?php

session_start();
$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];
$typeLogin = $_POST['user'];


if($typeLogin == 0){
    $condition = "Account";
}else if($typeLogin == 1){
    $condition = "admin";
}

require('connectToDatabase.php');
$connected = new database();
$sql = "
    SELECT Username, Password 
    FROM ".$condition."
    WHERE Username LIKE '". $enteredUsername ."';
    ";

    $query = mysqli_query($connected->getDatabase(), $sql);
    $objResult = mysqli_fetch_array(mysqli_query($connected->getDatabase(), $sql));
    // เช็ค username และ password
    mysqli_close($connected->getDatabase());
    $username = $objResult["Username"];
    $pass = $objResult["Password"];

    if($enteredUsername == $username && $enteredPassword == $pass){
        $result = mysqli_fetch_assoc($query);
        $_SESSION['user_login'] = $enteredUsername;
        // $_SESSION['user_stay'] = 0;
        if ($typeLogin == 0){
            $_SESSION['login'] = "success";
            header("Location: index.php");
            exit();
        }
        else{

            header("Location: index.php");
            exit();
        }
    }

    else {
        if ($typeLogin == 0){
            $_SESSION['login'] = "fail";
            header("Location: loginuser/Login.php");
            
  
        }
        else {
            $_SESSION['login'] = "fail";
            header("Location: loginemploy/Login.php");

        }
        //"Login.html?login=false" (การreturn ค่า)
        exit();
    }
    
?>