<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";



include "./header.php";
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':

            if (isset($_GET['iddm_xoa']) && $_GET['iddm_xoa'] > 0) {
                xoa_danhmuc($_GET['iddm_xoa']);
            }
            $all_danhmuc = loadall_danhmuc();
            include "./danhmuc.php";
            break;
        case 'them_danh_muc':

            if (isset($_GET['iddm_edit']) && $_GET['iddm_edit']) {
                $load_1_danhmuc = load_1_danhmuc($_GET['iddm_edit']);
            }
            if (isset($_POST['themdanhmuc']) && $_POST['themdanhmuc']) {
                $danhmuc = $_POST['tendanhmuc'];
                if (isset($_POST['iddm']) && $_POST['iddm'] != '') {
                    edit_danhmuc($_POST['iddm'], $danhmuc);
                } else {
                    add_danhmuc($danhmuc);
                }
                echo "<script>alert('thêm thành công')</script>";
            }
            include "./add_danhmuc.php";

            break;
    }
} else {

    include "./add_danhmuc.php";
}
include "footer.php";
