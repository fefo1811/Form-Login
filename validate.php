<?php session_start();
$users = [
    ["user_Email" => "felipedasr3232@gmail.com", "user_Pass" => "1234"]
];

$authUser = false;
echo "<pre>";
print_r($_POST);
echo "</pre>";

foreach($users as $user){
    if($_POST["email"] === $user["user_Email"] and $_POST["password"] === $user["user_Pass"]){
        $authUser = true; 
    }
}

if($authUser){
    $_SESSION["authenticated"] = "YES";
    header("Location: home.php");
} else {
    $_SESSION["authenticated"] = "NO";
    header("Location: index.php?error=Errou feio!");
}
    
?>