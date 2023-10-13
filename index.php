<?php
include "model/pdo.php";
include "global.php";



include "model/san_pham.php";
include "model/danh_muc.php";
include "model/binh_luan.php";
include "model/tai_khoan.php";

$danh_muc = loadall_danhmuc();
$sanpham_ban_chay = loadall_sanpham_banchay();
$sanpham = loadall_sanpham_home();

include "view/header.php";

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        
        case 'ctsanpham':
            if (isset($_POST['guibinhluan'])) {
                add_binhluan($_POST['idpro'], $_POST['noidung']);
            }
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham_1 = loadone_sanpham($_GET['idsp']);
                $sp_cung_loai = loadall_sanpham_cung_loai($_GET['idsp'], $sanpham_1['iddm']);
                $binh_luan = load_binh_luan($_GET['idsp']);

                include "view/chitietsanpham.php";
            }
            break;
        case 'loadsanphamcungdanhmuc':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $sanpham = loadall_sanpham_cung_danhmuc($_GET['iddm']);
                include "view/main.php";
            }
            break;
        case 'dang_nhap':

            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $thong_bao_dang_nhap = dang_nhap($_POST['user'], $_POST['pass']);
                include "view/main.php";
            }
            break;
        case 'dang_xuat':
            dang_xuat();
            include "view/main.php";
            break;

        case 'quenmatkhau':
            include "view/quen_mat_khau.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                add_taikhoan($user,$pass,$email);
                $thong_bao_dang_ky = 'đăng ký thành công';
            }
            include "view/dang_ky.php";
            break;
    }
} else {

    include "view/main.php";
}
include "view/footer.php";
