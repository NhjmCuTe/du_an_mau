<?php
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $kq = pdo_query($sql);
    return $kq;
}
function loadall_sanpham_top10()
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
function loadall_sanpham_cung_loai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=$iddm and id<>$id";
    $kq = pdo_query($sql);
    return $kq;
}
