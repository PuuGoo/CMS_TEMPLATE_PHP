<?php

extract($_REQUEST);

if(isset($mod)) {
    switch ($mod) {
        case 'page':
            include_once "controller/page.php";
            break;
        
        default:
            # code...
            break;
    }
} else {
    header("Location: ?mod=page&act=home");
}