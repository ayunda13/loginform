<?php
session_start();
// if(empty($_SESSION['username'])){
if(!empty($_POST['username']) && !empty($_POST['password'])){
    

    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];

    $myfile = fopen("users.json", "r") or die("Unable to open file");
    $dataJSON = json_decode(fread($myfile, filesize("users.json")));
  

    foreach ($dataJSON as $key => $value) {
        // if($data['username'] == $value->username && md5($data['password'] == $value->password)){
        //     $_SESSION['username'] = $data['username'];
        //     $success = TRUE;
        //     break;
        // }
        if($data['username'] == $value->username) {
            if(md5($data['password'] == $value->password)) {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
    
    if($success == TRUE){
        // echo "Berhasil Login ".$_SESSION['username'];
        echo "Login berhasil"
    }else{
        echo "Login gagal";
    }

    fclose($myfile);
}
// }
?>