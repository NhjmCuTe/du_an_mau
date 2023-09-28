<?php
function load_binh_luan($id_sp){
    $sql="SELECT * FROM binhluan JOIN taikhoan ON binhluan.iduser=taikhoan.id WHERE idpro=$id_sp";
    $kq=pdo_query($sql);
    return $kq;
}