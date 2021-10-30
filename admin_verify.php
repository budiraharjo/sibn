<?php
    session_start();
    $mydata = simplexml_load_file("files/akun.xml");

    $login = "";
    $password = "";
    $loginname = "";

    for($i = 0; $i < count($mydata); $i++){

        $login = $mydata->login_details[$i]->login;
        $password = $mydata->login_details[$i]->password;
        $loginname = $mydata->login_details[$i]->login_name;


    if(empty($_POST["admin_name"]))
    {
        header("Location:login.php");
        return false;
    }

    if(empty($_POST["admin_password"]))
    {
        $this->HandleError("Password is empty!");
        return false;
    }

        if(($_POST["admin_name"] == $login) && ($_POST["admin_password"] == $password)){
            $_SESSION['name'] = "$loginname";
            header("Location:index.php");
        }
    }

    //as we have exited for loop (and therefore not been directed) we have a invalid login
    echo "invalid username or password";
 ?> 