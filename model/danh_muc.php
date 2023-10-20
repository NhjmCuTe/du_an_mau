<?php
function loadall_danhmuc()
{
    $sql = 'select * from danhmuc order by id desc';
    $kq = pdo_query($sql);
    return $kq;
}

function add_danhmuc($name)
{
    $kiemtra = "select * from danhmuc where name = '$name'";
    $kq = pdo_query_one($kiemtra);
    //    var_dump($kq);die;
    if ($kq) {
        return false;
    } else {
        $sql = "insert into danhmuc (name) values ('$name')";
        pdo_execute($sql);
        return true;
    }
}
function xoa_danhmuc($id)
{
    $sql = "delete from danhmuc where id = $id";
    pdo_query($sql);
}
function load_1_danhmuc($id)
{
    $sql = "select * from danhmuc where id = $id";
    $kq = pdo_query_one($sql);
    return $kq;
}
function edit_danhmuc($id, $name)
{
    $sql = "update danhmuc set name = '$name' where id = $id";
    pdo_execute($sql);
}
