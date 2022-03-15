<?php
include("db_connect.php");

function adduser($conn){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

       if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("location: adminadd.php?error=invalidusername");
            exit();
     
        }else if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
            header("location: adminadd.php?error=invalidpassword");
            exit();
        }else if(!$password == $confirm){
            header("location: adminadd.php?error=passworddontmatch");
        } else {
            $sql = "SELECT * FROM login WHERE username = :username";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['username' => $username]);
            if($stmt->rowCount() !== 0){
                header("location: adminadd.php?error=userexists");
                exit();
            } else {
                $query = "INSERT INTO login (username, password) VALUES(:username, :password)";
                $stmt = $conn->prepare($query);
                if(!$stmt){
                    header("location: adminadd.php?error=stmtfailed");
                    exit();
                } else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->execute(['username' => $username, 'password' => $hashedpwd]);
                    header("location: adminadd.php?add=user");
                    }
                }
                }
            }
        }

function add(){
    if(isset($_GET['add'])){
        $add = $_GET['add'];
    } else {
        $add = '';
    } switch($add){
        case "user";
        echo "<p id='update'>User added</p>";
        break;

    }
}

function errors(){
    if(isset($_GET['error'])){
        $errors = $_GET['error'];
    }else {
        $errors = '';
    } switch($errors){

        case "stmtfailed";
        echo "<p id='error'>something went wrong</p>";
        break;
        case "invalidusername";
        echo "<p id='error'>enter a valid username</p>";
        break;
        case "wrong_pass";
        echo"<p id='error'>Password invalid</p>";
        break;
        case "wrongusername";
        echo"<p id='error'>wrong username</p>";
        break;
        case "usernametaken";
        echo"<p id='error'>username is already taken</p>";
        break;
        case "wrongpass";
        echo"<p id='error'>wrong password</p>";
        break;
    }
}

function login_user($conn){
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM login WHERE username = '" . $username . "'";

        $stmt = $conn->query($sql);
        $user = $stmt->fetch();

        if ($user == 0) {
            header("Location: index.php?error=wrong_username");
            exit();
        } else {
            $pwdHashed = $user["password"];
            $checkpwd = password_verify($password, $pwdHashed);

            if ($checkpwd === false) {
                header("Location: index.php?error=wrong_password");
                exit(); 
            } 

            session_start();
            if ($user['user_type'] == "admin") {
                $_SESSION['user'] = $user['email'];
                header("Location: admin/admin.php");
                exit();
            } else {
                $_SESSION["user"] = $user['username'];
                header("Location: login/main.php");
                exit();
            }
        }
    }
}






function logout(){
    session_destroy();
    header("Location: ../index.php");
}




