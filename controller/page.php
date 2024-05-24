<?php

extract($_REQUEST);

if (isset($act)) {
    switch ($act) {
        case 'home':

            include_once "view/header.php";
            include_once "view/home.php";
            include_once "view/footer.php";
            break;
        case 'login':

            include_once "view/header.php";
            include_once "view/login.php";
            include_once "view/footer.php";
            break;
        case 'logout':

            include_once "view/header.php";
            include_once "view/logout.php";
            include_once "view/footer.php";
            break;


        case 'admin':

            include_once "view/admin/header.php";
            include_once "view/admin/admin.php";
            include_once "view/admin/footer.php";
            break;
        case 'user':

            include_once "view/admin/header.php";
            include_once "view/admin/user.php";
            include_once "view/admin/footer.php";
            break;
        case 'comment':

            include_once "view/admin/header.php";
            include_once "view/admin/comment.php";
            include_once "view/admin/footer.php";
            break;
        case 'upload':

            include_once "view/admin/header.php";
            include_once "view/admin/upload.php";
            include_once "view/admin/footer.php";
            break;
        case 'photo':

            include_once "view/admin/header.php";
            include_once "view/admin/photo.php";
            include_once "view/admin/footer.php";
            break;


        default:
            # code...
            break;
    }
}
