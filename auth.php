<?php

if(isset($_POST['name']) && isset($_POST['lastlogin'])){

    echo 'Hello ' . $_POST['name'] . ' and your last login is ' . $_POST['lastlogin'];
    
}

