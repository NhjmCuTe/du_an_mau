<?php
function thong_ke_hanghoa_theo_loai()
{
    $sql = "SELECT danhmuc.id, danhmuc.name, 
    COUNT(*) so_luong, 
    MIN(sanpham.price) gia_min, 
    MAX(sanpham.price) gia_max, 
    AVG(sanpham.price) gia_avg 
    FROM sanpham JOIN danhmuc 
    ON sanpham.iddm=danhmuc.id 
    GROUP by danhmuc.id, danhmuc.name";
    $kq = pdo_query($sql);
    return $kq;
}
