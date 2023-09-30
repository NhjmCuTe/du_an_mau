<?php
function load_binh_luan($id_sp){
    $sql="SELECT * FROM binhluan JOIN taikhoan ON binhluan.iduser=taikhoan.id WHERE idpro=$id_sp";
    $kq=pdo_query($sql);
    return $kq;
}
function add_binhluan($id_sp, $noidung){
    $date = date('Y-m-d');
    $sql = "insert into binhluan(iduser,idpro,noidung,ngaybinhluan) values (2,$id_sp, '$noidung', '$date')";
    pdo_execute($sql);
}