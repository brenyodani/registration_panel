<?php

include 'config.php';

if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);

    $query = "select count(*) as searchedUsers from users where username='".$username."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span style='color: green;'>Szabad felhasznalo.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['searchedUsers'];
        
        if($count > 0){
            $response = "<span style='color: red;'>Nem szabad felhasznalo.</span>";
        }
       
    }
    
    echo $response;
    die;
}
