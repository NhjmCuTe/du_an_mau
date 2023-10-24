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
        case 'tim_kiem':
            // echo 1;die;
            if (isset($_POST['timkiem']) && $_POST['timkiem']) {

                $sanpham = loadall_sanpham($_POST['tukhoa']);
                $thong_bao = $_POST['tukhoa'];
                include "view/main.php";
            }
            break;
        case 'all_sanpham':
            $sanpham = loadall_sanpham();
            $thong_bao = 'Tất cả sản phẩm';
            include "view/main.php";
            break;
        case 'ctsanpham':
            if (isset($_POST['guibinhluan'])) {
                if (isset($_SESSION['user'])) {
                    $id_user = $_SESSION['user']['id'];
                    $id_sp = $_GET['idsp'];
                    $binh_luan = $_POST['noidung'];
                    add_binhluan($id_user, $id_sp, $binh_luan);
                } else {
                    $thong_bao_binh_luan = "vui lòng đăng nhập để bình luận";
                    // echo 1; die;
                }
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
            if (isset($_POST['guimatkhau']) && $_POST['guimatkhau']) {
                $kq = quen_mat_khau($_POST['email']);
                if ($kq) {
                    $thong_bao_quen_mat_khau = "mật khẩu đã được gửi vào email";
                } else {
                    $thong_bao_quen_mat_khau_sai = "email không tồn tại";
                }
            }
            include "view/quen_mat_khau.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $kq = add_taikhoan($user, $pass, $email);
                // var_dump($kq);die;
                if (!$kq) {
                    $thong_bao_dang_ky_that_bai = 'tài khoản đã tồn tại';
                } else {

                    $thong_bao_dang_ky = 'đăng ký thành công';
                }
            }
            include "view/dang_ky.php";
            break;
        case 'capnhattaikhoan':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if (empty($_FILES['img']['name']) && isset($_POST['img']) && $_POST['img']) {
                    $tenanh = $_POST['img'];
                } else {
                    $tenanh = basename($_FILES['img']['name']);
                }

                if (move_uploaded_file($_FILES['img']['tmp_name'], $img_path . $tenanh));
                edit_taikhoan($id, $user, $pass, $hoten, $email, $tenanh);
                dang_nhap($user, $pass);
                $thong_bao_tai_khoan = "cập nhật thành công";
                echo "<script>alert('cập nhật thành công')</script>";
            }
            include "view/capnhat_taikhoan.php";
            break;
        case 'doi_mat_khau':
            if (isset($_POST['doimatkhau']) && $_POST['doimatkhau']) {
                if ($_POST['pass1'] == $_POST['pass2']) {
                    $id = $_SESSION['user']['id'];
                    $user = $_SESSION['user']['name'];
                    $pass = $_POST['pass2'];
                    edit_taikhoan($id, $user, $pass);
                    echo "<script>alert('đổi mật khẩu thành công')</script>";
                    $thong_bao_doi_mat_khau = "đổi mật khẩu thành công";
                } else {
                    $matkhau = "mật khẩu không giống nhau";
                    include "view/doimatkhau.php";
                }
            }
            include "view/doimatkhau.php";
            break;
    }
} else {

    include "view/main.php";
}
include "view/footer.php";
