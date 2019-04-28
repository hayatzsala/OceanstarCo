<?php
session_start();


?>

<?php

 //include 'index.php'; 
// include database and object files
include_once 'config.php';
include_once 'user.php';


// if(isset($_SESSION['id'])){
//     die(header("location: 404.php"));
// }

//if(isset($_SESSION['id'])){
  //  die(header("location: 404.php"));
//}


// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    //$_SESSION['email'] = $user->username;
    //$_SESSION['is_login'] = true;
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user->username == 'ghadeer.9816.ps@gmail.com'){
        header("location :index-2.html");
    }
    else{///if($user->username)
    header("location: packages.php"); 
    echo "WELCOME" ;
    }
    // create array
    //$user_arr=array(
    //  "status" => true,
    //    "message" => "Successfully Login!",
    //    "id" => $row['id'],
        //"username" => $row['username']
       // loggedin= "yes";
      //  if($user->$username && password_verify($user->$password, $user['password'])){
        $_SESSION['username'] = $user->username;
        echo $_SESSION['username'];
     // if()
   // );
   header("location: packages.php");
}
else{
    header("location: login-register.php");
  ///  $user_arr=array(
    //    "status" => false,
      //  "message" => "Invalid Username or Password!",
 //   );
}
// make it json format
print_r(json_encode($user_arr));
?>