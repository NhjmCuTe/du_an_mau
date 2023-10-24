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

        $_SESSION['user']['name'] = $kq['user'];
        $_SESSION['user']['hoten'] = $kq['name'];
        $_SESSION['user']['role'] = $kq['role'];
        $_SESSION['user']['img'] = $kq['img'];
        $_SESSION['user']['id'] = $kq['id'];
        $_SESSION['user']['email'] = $kq['email'];
        $_SESSION['user']['pass'] = $kq['pass'];
        // setcookie('username', $user, time() + 3600);
        // setcookie('role', $kq['role'], time() + 3600);
        return "đăng nhập thành công";
    } else {
        return "sai tài khoản hoặc mật khẩu";
    }
}
function dang_xuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        // setcookie('username', '1', time() - 3600);
        // setcookie('role', '1', time() - 3600);
    }
}
function add_taikhoan($user, $pass, $email = '', $img = '', $add = '', $sdt = '', $role = 0, $name = '')
{
    $kiemtra = "select * from taikhoan where user = '$user'";
    $kq = pdo_query_one($kiemtra);
    if ($kq) {
        return false;
    } else {
        $sql = "insert into taikhoan (user, pass, email, img, address, tel, role, name) values ('$user','$pass','$email', '$img', '$add', '$sdt', $role, '$name')";
        //echo $sql;die;
        pdo_execute($sql);
        return true;
    }
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
function edit_taikhoan($id, $user, $pass, $hoten = '', $email = '', $img = '', $diachi = '', $sdt = '', $role = 0)
{
    $sql = "update taikhoan set user='$user', pass='$pass',name='$hoten'";
    if ($img != '') {
        $sql .= ",img='$img'";
    }
    if ($email != '') {
        $sql .= ",email= '$email'";
    }
    if ($diachi != '') {
        $sql .= ",address='$diachi'";
    }
    if ($sdt != '') {
        $sql .= ",tel='$sdt'";
    }
    $sql .= ",role=$role where id=$id";
    // echo $sql; die;
    pdo_execute($sql);
}
function quen_mat_khau($email)
{
    $sql = "select * from taikhoan where email='$email'";
    $kq = pdo_query_one($sql);
    if ($kq) {
        return true;
    } else {
        return false;
    }
}
