<?php
function load_binh_luan($id_sp){
    $sql="SELECT * FROM binhluan JOIN taikhoan ON binhluan.iduser=taikhoan.id WHERE idpro=$id_sp ORDER BY binhluan.id desc";
    $kq=pdo_query($sql);
    return $kq;
}
function add_binhluan($id_user,$id_sp, $noidung){

    $sql = "insert into binhluan(iduser,idpro,noidung) values ($id_user,$id_sp, '$noidung')";
    // echo $sql; die;
    pdo_execute($sql);
}
function thong_ke_binh_luan(){
    $sql="SELECT sanpham.id, sanpham.img, sanpham.name, COUNT(*) sl_binhluan , 
    MIN(binhluan.ngaybinhluan)cu_nhat, 
    MAX(binhluan.ngaybinhluan)moi_nhat 
    FROM binhluan JOIN sanpham on binhluan.idpro=sanpham.id 
    GROUP BY sanpham.id, sanpham.name HAVING sl_binhluan > 0
    ORDER BY moi_nhat desc";
    $kq=pdo_query($sql);
    return $kq;
}
function chi_tiet_binh_luan($id_sp){
    $sql="SELECT binhluan.*, sanpham.name, taikhoan.user FROM binhluan 
    JOIN sanpham on binhluan.idpro=sanpham.id 
    JOIN taikhoan on taikhoan.id=binhluan.iduser 

    WHERE sanpham.id=$id_sp 
    ORDER by binhluan.ngaybinhluan DESC";
    $sql=pdo_query($sql);
    return $sql;
}
function xoa_binh_luan($id_bl){
    $sql="delete from binhluan where id = $id_bl";
    pdo_execute($sql);
}