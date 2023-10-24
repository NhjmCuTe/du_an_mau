<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";
include "../model/tai_khoan.php";
include "../model/binh_luan.php";
include "../model/thong_ke.php";

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
            if (isset($_POST['themdanhmuc']) && $_POST['themdanhmuc']) {
                $danhmuc = $_POST['tendanhmuc'];
                $kq = add_danhmuc($danhmuc);
                if ($kq) {
                    $thong_bao_danh_muc = 'thêm thành công';
                    echo "<script>alert('thêm danh mục thành công')</script>";
                } else {
                    $thong_bao_danh_muc_that_bai = 'tên danh mục đã tồn tại';
                }
            }
            include "./danhmuc/add_danhmuc.php";
            break;
        case 'edit_danhmuc':
            if (isset($_GET['iddm_edit']) && $_GET['iddm_edit'] > 0) {
                $load_1_danhmuc = load_1_danhmuc($_GET['iddm_edit']);
            }
            if (isset($_POST['editdanhmuc']) && $_POST['editdanhmuc']) {
                $danhmuc = $_POST['tendanhmuc'];
                edit_danhmuc($_POST['iddm'], $danhmuc);
                $thong_bao_danh_muc = 'sửa thành công';
                echo "<script>alert('sửa danh mục thành công')</script>";
            }
            include "./danhmuc/edit_danhmuc.php";
            break;
        case 'san_pham':
            if (isset($_GET['idsp_xoa']) && $_GET['idsp_xoa'] > 0) {
                xoa_sanpham($_GET['idsp_xoa']);
                echo "<script>alert('xóa sản phẩm thành công')</script>";
            }
            if (isset($_POST['tukhoa']) && isset($_POST['iddm'])) {
                // echo 1;
                $all_sanpham = loadall_sanpham($_POST['tukhoa'], $_POST['iddm']);
            } else {
                // echo 4;
                $all_sanpham = loadall_sanpham();
            }
            $all_danhmuc = loadall_danhmuc();

            include "sanpham/ds_sanpham.php";
            break;
        case 'them_sanpham':
            // echo 1;
            // die;

            if (isset($_POST['themsanpham']) && $_POST['themsanpham']) {
                $tensanpham = $_POST['tensanpham'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $tenanh = $_FILES['img']['name'];
                $duong_dan_anh = '../' . $img_path;

                if (move_uploaded_file($_FILES['img']['tmp_name'], $duong_dan_anh . $tenanh));

                add_sanpham($tensanpham, $gia, $tenanh, $mota, $iddm);
                echo "<script>alert('thêm sản phẩm thành công')</script>";

                $thong_bao_san_pham = 'thêm thành công';
            }

            $all_danhmuc = loadall_danhmuc();
            include "sanpham/add_sanpham.php";
            break;
        case 'edit_sanpham':
            $all_danhmuc = loadall_danhmuc();
            if (isset($_GET['idsp_edit']) && $_GET['idsp_edit'] > 0) {
                $load_1_sanpham = loadone_sanpham($_GET['idsp_edit']);
            }
            if (isset($_POST['editsanpham']) && $_POST['editsanpham']) {
                $tensanpham = $_POST['tensanpham'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];

                if (empty($_FILES['img']['name']) && isset($_POST['img']) && $_POST['img']) {
                    $tenanh = $_POST['img'];
                } else {
                    $tenanh = basename($_FILES['img']['name']);
                }

                $duong_dan_anh = '../' . $img_path;
                if (move_uploaded_file($_FILES['img']['tmp_name'], $duong_dan_anh . $tenanh));

                edit_sanpham($_POST['idsp'], $tensanpham, $gia, $tenanh, $mota, $iddm);
                $thong_bao_san_pham = 'sửa thành công';
                echo "<script>alert('sửa sản phẩm thành công')</script>";
            }
            include "sanpham/edit_sanpham.php";
            break;
        case 'tai_khoan':
            if (isset($_GET['idtk_xoa']) && $_GET['idtk_xoa'] > 0) {
                xoa_taikhoan($_GET['idtk_xoa']);
                echo "<script>alert('xóa tài khoản thành công')</script>";
            }
            $all_taikhoan = load_all_taikhoan();
            include "khachhang/ds_taikhoan.php";
            break;
        case 'them_taikhoan':
            if (isset($_POST['themtaikhoan']) && $_POST['themtaikhoan']) {
                $ten = $_POST['ten'];
                $user = $_POST['user'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $vaitro = $_POST['vaitro'];
                $tenanh = $_FILES['anh']['name'];
                $duong_dan_anh = '../' . $img_path;

                if (move_uploaded_file($_FILES['anh']['tmp_name'], $duong_dan_anh . $tenanh));

                $kq = add_taikhoan($user, $pass, $email, $tenanh, $diachi, $sdt, $vaitro, $ten);
                if ($kq) {
                    $thong_bao_tai_khoan = 'thêm tài khoản thành công';
                    echo "<script>alert('thêm tài khoản thành công')</script>";
                } else {
                    $thong_bao_tai_khoan_that_bai = 'tên tài khoản đã tồn tại';
                }
            }
            include "khachhang/add_taikhoan.php";
            break;
        case 'edit_taikhoan':
            if (isset($_GET['idtk_edit']) && $_GET['idtk_edit']) {
                $load_1_taikhoan = load_1_taikhoan($_GET['idtk_edit']);
            }
            if (isset($_POST['edittaikhoan']) && $_POST['edittaikhoan']) {
                $id_tk = $_POST['id'];
                $ten = $_POST['ten'];
                $name = $_POST['name'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];

                $vaitro = $_POST['vaitro'];

                if (empty($_FILES['anh']['name']) && isset($_POST['anh']) && $_POST['anh']) {
                    $tenanh = $_POST['anh'];
                } else {
                    $tenanh = $_FILES['anh']['name'];
                }
                $duong_dan_anh = '../' . $img_path;
                if (move_uploaded_file($_FILES['anh']['tmp_name'], $duong_dan_anh . $tenanh));
                edit_taikhoan($id_tk, $ten, $pass, $name, $email, $tenanh, $diachi, $sdt, $vaitro);
                $thong_bao_tai_khoan = 'sửa tài khoản thành công';
                echo "<script>alert('sửa tài khoản thành công')</script>";
            }
            include "khachhang/edit_taikhoan.php";
            break;

        case 'thong_ke_binh_luan':
            $thong_ke_binh_luan = thong_ke_binh_luan();
            include "binhluan/thong_ke_binh_luan.php";
            break;

        case 'chi_tiet_binh_luan':
            if (isset($_GET['id_binhluan']) && $_GET['id_binhluan']) {
                xoa_binh_luan($_GET['id_binhluan']);
                echo "<script>alert('xóa bình luận thành công')</script>";
            }
            if (isset($_GET['id_sp']) && $_GET['id_sp']) {
                $chi_tiet_binh_luan = chi_tiet_binh_luan($_GET['id_sp']);
                include "binhluan/chi_tiet_binh_luan.php";
            }

            break;
        case 'thong_ke':
            $thongke_hanghoa_theo_loai = thong_ke_hanghoa_theo_loai();
            include "thongkehanghoa/thong_ke.php";
            break;
        case 'bieu_do_hang_hoa':
            $thongke_hanghoa_theo_loai = thong_ke_hanghoa_theo_loai();
            include "thongkehanghoa/bieu_do.php";
            break;
        case 'bieu_do_binh_luan':
            $thong_ke_binh_luan = thong_ke_binh_luan();
            include "binhluan/bieu_do_binh_luan.php";
            break;
    }
} else {

    echo '<h1>Đây là trang admin</h1>';
    echo '<a href="../index.php"><button>Quay lại trang người dùng</button></a>';
}
include "footer.php";
