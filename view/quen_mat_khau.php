<main class="catalog  mb ">
    <div class="boxleft">

        <div class="box_title">Quên mật khẩu</div>
        <div class="box_content form_account">
            <form action="index.php?act=quenmatkhau" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email" required>
                </div>

                <input type="submit" value="Gửi" name="guimatkhau">
                <input type="reset" value="Nhập lại">
                <h4 style="color: green;"><?= isset($thong_bao_quen_mat_khau) ? $thong_bao_quen_mat_khau : '' ?></h4>
                <h4 style="color: red;"><?= isset($thong_bao_quen_mat_khau_sai) ? $thong_bao_quen_mat_khau_sai : '' ?></h4>

            </form>
        </div>

    </div>
    <?php include "view/box_right.php" ?>
</main>