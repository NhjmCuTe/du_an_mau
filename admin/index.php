<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";



include "./header.php";
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsach':
            $all_danhmuc=loadall_danhmuc();
            include "./danhmuc.php";
            break;
    }
} else {

    include "./add_danhmuc.php";
}
include "footer.php";
