<main class="catalog  mb ">

    <div class="boxleft">

        <div class="box_title">Cập nhật tài khoản</div>
        <div class="box_content form_account">
            <form action="index.php?act=capnhattaikhoan" method="post" enctype="multipart/form-data">
                <?php if (isset($_SESSION['user']));
                extract($_SESSION['user']) ?>
                <div>
                    <p>Tên đăng nhập</p>
                    <input type="text" disabled value="<?= isset($name) ? $name : '' ?>">
                    <input type="hidden" name="user" value="<?= isset($name) ? $name : '' ?>">
                </div>
                <div>
                    Họ và tên
                    <input type="text" name="hoten" required placeholder="Họ và tên" value="<?= isset($hoten) ? $hoten : '' ?>">
                </div>
                <input type="hidden" name="pass" value="<?= isset($pass) ? $pass : '' ?>">
                Địa chỉ email
                <div>
                    <input type="email" name="email" required placeholder="email" value="<?= isset($email) ? $email : '' ?>">
                </div>
                Hình ảnh

                <div>
                    <input type="file" name="img" id="" required>
                    <input type="hidden" name="img" value="<?= isset($img) ? $img : '' ?>">
                </div>
                <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
                <input type="submit" value="Cập nhật" name="capnhat">

                <h4 style="color: green;"><?= isset($thong_bao_tai_khoan) ? $thong_bao_tai_khoan : '' ?></h4>
            </form>
        </div>

    </div>
    <?php include "view/box_right.php" ?>
</main>