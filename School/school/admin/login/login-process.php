<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL); 

    session_start();
    include "../db/db_conn.php"; 
    

    if (isset($_POST["uname"]) && isset($_POST["password"])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);
        // print_r($pass); die;
        
        if(empty($uname)) {
            header("Location: index.php?erro=username is required");
        }elseif(empty($pass)) {
            header("Location: index.php?erro=password is required");
        }else{
            $sql = "SELECT * FROM users WHERE username='$uname' AND `password`='$pass'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $uname && $row['password'] === $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../");
                    exit();
                }else{
                    header("Location: index.php?erro= Incorrect Username or Passoword");
                    exit();
                }
            }else{
                header("Location: index.php?erro= Incorrect Username or Passoword");
                exit();
            }
        }
    }else{
        header("Location: index.php");
        exit;
    }
?>