<?php

    require('db_admin.php');
<<<<<<< HEAD
    require('extra_php');

=======
    require('extra.php');
>>>>>>> f96cd1aa19595e36feffd9fbf3351a511f050ffd
    adminLogin();

    if(isset($_POST['add_room']))
    {
        $frm_data=filterdata($_POST);
        print_r($frm_data);


    }


?>