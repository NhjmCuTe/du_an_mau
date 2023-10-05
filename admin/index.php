<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";
include "../model/tai_khoan.php";
include "../global.php";


include "./header.php";
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':

            if (isset($_GET['iddm_xoa']) && $_GET['iddm_xoa'] > 0) {
                xoa_danhmuc($_GET['iddm_xoa']);
            }
            $all_danhmuc = loadall_danhmuc();
            include "./danhmuc/ds_danhmuc.php";
            break;
        case 'them_danhmuc':

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
            include "./danhmuc/add_danhmuc.php";

            break;
        case 'san_pham':
            $all_sanpham=loadall_sanpham();
            include "sanpham/ds_sanpham.php";
            break;
        case 'them_sanpham':
            $all_danhmuc=loadall_danhmuc();
            include "sanpham/add_sanpham.php";
            break;
        case 'tai_khoan':
            $all_taikhoan=load_all_taikhoan();
            include "khachhang/ds_taikhoan.php";
        break;
        case 'them_taikhoan':
            include "khachhang/add_taikhoan.php";
        break;
    }
} else {

    include "./danhmuc/add_danhmuc.php";
}
include "footer.php";
