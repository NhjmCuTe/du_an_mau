<?php
function load_all_taikhoan(){
    $sql="select * from taikhoan";
    $kq=pdo_query($sql);
    return $kq;
}