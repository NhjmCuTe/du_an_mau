<?php
include "model/pdo.php";
include "global.php";

include "view/header.php";

include "model/san_pham.php";
include "model/danh_muc.php";
include "model/binh_luan.php";

$sanpham_new = loadall_sanpham_home();
$danh_muc = loadall_danhmuc();
$sanpham_top10 = loadall_sanpham_top10();

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
            // case 'main':
            //     include "view/main.php";
            //     break;
        case 'quen_mat_khau':
            include "view/quen_mat_khau.php";
            break;
        case 'ctsanpham':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham_1 = loadone_sanpham($_GET['idsp']);
                $sp_cung_loai = loadall_sanpham_cung_loai($_GET['idsp'], $sanpham_1['iddm']);
                $binh_luan = load_binh_luan($_GET['idsp']);
                include "view/chitietsanpham.php";
            }
            break;
    }
} else {
    include "view/main.php";
}
include "view/footer.php";