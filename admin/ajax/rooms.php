<?php

    require('db_admin.php');
    //require('extra_php');

    require('extra.php');
    adminLogin();

    if(isset($_POST['add_room']))
    {
        $frm_data=filterdata($_POST);
        print_r($frm_data);


    }


?>