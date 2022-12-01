<?php

$database = file_get_contents("./users.json");
$database = json_decode($database, TRUE);
if(isset($_POST['username']) && isset($_POST['password'])) {
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];

    for($i=0; $i < count($database); $i++) {
        if($database[$i]['username'] == $_POST['username']) {
            if($database[$i]['password'] == $_POST['password']) {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
} else {
    echo "Harap isi semua kolom yang tersedia";
}

if($success == TRUE) {
    header("Location: home.php"); 
} else {
    echo "Username/Password Salah";
}
?>
