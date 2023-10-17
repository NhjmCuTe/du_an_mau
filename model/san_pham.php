<?php
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $kq = pdo_query($sql);
    return $kq;
}
function loadall_sanpham_banchay()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,10";
    $kq = pdo_query($sql);
    return $kq;
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id = $id";
    $kq = pdo_query_one($sql);
    return $kq;
}
function loadall_sanpham_cung_loai($id_sp, $iddm)
{
    $sql = "select * from sanpham where iddm=$iddm and id<>$id_sp";
    $kq = pdo_query($sql);
    return $kq;
}
function loadall_sanpham_cung_danhmuc($iddm)
{
    $sql = "select * from sanpham where iddm = $iddm";
    $kq = pdo_query($sql);
    return $kq;
}


function loadall_sanpham($tukhoa = '', $iddm = '')
{
    $sql = "select sanpham.*, danhmuc.name as namedm
    from sanpham join danhmuc 
    on sanpham.iddm=danhmuc.id ";
    if ($tukhoa != '' && $iddm != '') {
        $sql .= "where sanpham.name LIKE '%$tukhoa%' and sanpham.iddm = $iddm";
    } elseif (isset($iddm) && $iddm != '') {
        $sql .= "where sanpham.iddm = $iddm";
    } elseif (isset($tukhoa) && $tukhoa != '') {

        $sql = $sql . "WHERE sanpham.name LIKE '%$tukhoa%'";
    }

    $sql = $sql . " order by id desc";
// echo $sql; die;

    // echo $sql;die;
    $kq = pdo_query($sql);
    return $kq;
}

function add_sanpham($ten, $gia, $anh, $mota, $iddm)
{
    $sql = "insert into sanpham(name, price, img, mota, iddm) values ('$ten', $gia, '$anh', '$mota', $iddm)";
    pdo_execute($sql);
}
function xoa_sanpham($idsp)
{
    $sql = "delete from sanpham where id = $idsp";
    pdo_execute($sql);
}
function edit_sanpham($idsp, $ten, $gia, $anh, $mota, $iddm)
{
    $sql = "update sanpham set name = '$ten', price=$gia, img='$anh', mota='$mota' , iddm=$iddm where id= $idsp ";
    pdo_execute($sql);
}
