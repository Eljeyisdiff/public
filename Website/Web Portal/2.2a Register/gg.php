<?php
if (isset($_POST["fname"]) && isset($_POST["cname"]) && isset($_POST["lname"])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
}
else{
    header("Location: gg.php");
    exit();
}