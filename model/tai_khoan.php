<?php
function load_all_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $kq = pdo_query($sql);
    return $kq;
}
session_start();
function dang_nhap($user, $pass)
{
    $sql = "select * from taikhoan where user = '$user' and pass = '$pass'";
    $kq = pdo_query_one($sql);

    if ($kq != false) {

        $_SESSION['user']['name'] = $user;
        $_SESSION['user']['role'] = $kq['role'];

        return "đăng nhập thành công";
    } else {
        return "sai tài khoản hoặc mật khẩu";
    }
}
function dang_xuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
function add_taikhoan($user, $pass, $email='', $img='', $add='', $sdt='', $role = 0)
{
    $sql = "insert into taikhoan (user, pass, email, img, address, tel, role) values ('$user','$pass','$email', '$img', '$add', '$sdt', $role)";
    //echo $sql;die;
    pdo_execute($sql);
}
function xoa_taikhoan($id)
{
    $sql = "delete from taikhoan where id = $id";
    pdo_execute($sql);
}
function load_1_taikhoan($id)
{
    $sql = "select * from taikhoan where id=$id";
    $kq = pdo_query_one($sql);
    return $kq;
}
function edit_taikhoan($id, $user, $pass, $email='không có', $img, $diachi='không có', $sdt='không có', $role = 0)
{
    $sql = "update taikhoan set id=$id, user='$user', pass='$pass', email= '$email', img='$img', address='$diachi', tel='$sdt', role=$role";
    pdo_execute($sql);
}
