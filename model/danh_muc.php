<?php
function loadall_danhmuc(){
    $sql='select * from danhmuc order by id desc';
    $kq=pdo_query($sql);
    return $kq;
}