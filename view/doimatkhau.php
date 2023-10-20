<main class="catalog  mb ">
    <div class="boxleft">

        <div class="box_title">Đổi mật khẩu</div>
        <div class="box_content form_account">
            <form action="index.php?act=doi_mat_khau" method="post">
                <div>
                    <p>Mật khẩu mới</p>
                    <input type="text" id="pass1" name="pass1" placeholder="Nhập mật khẩu mới">
                    <h4 style="color: red;" id="err1"></h4>

                </div>
                <div>
                    <p>Nhập lại mật khẩu mới</p>
                    <input type="password" id="pass2" name="pass2" placeholder="Nhập lại mật khẩu mới">
                    <h4 style="color: red;" id="err2"></h4>

                </div>

                <input type="submit" value="Đổi mật khẩu" name="doimatkhau" onclick="return check_doi_mk()">
                <input type="reset" value="Nhập lại">
                <h4 style="color: green;"><?= isset($thong_bao_doi_mat_khau) ? $thong_bao_doi_mat_khau : '' ?></h4>
                <h4 style="color: red;" id="err"><?= isset($matkhau) ? $matkhau : '' ?></h4>
            </form>
        </div>
        <script>
            function check_doi_mk() {
                var pass1 = document.getElementById('pass1').value;
                var pass2 = document.getElementById('pass2').value;
                var err3 = document.getElementById('err');
                var err1 = document.getElementById('err1');
                var err2 = document.getElementById('err2');
                // console.log(pass1);
                var err = false;
                if (pass1 == '') {
                    err1.innerText = "không được để trống";
                    err = true;
                } else {
                    err1.innerText = "";

                }
                if (pass2 == '') {
                    err2.innerText = "không được để trống";
                    err = true;
                } else {
                    err2.innerText = "";

                }
                if (pass1 != '' && pass2 != '' && pass1 != pass2) {
                    err3.innerText = 'mật khẩu không giống nhau';
                    err = true;
                }
                else{
                    err3.innerText = '';

                }
                if (err) {
                    return false;
                }
            }
        </script>
    </div>
    <?php include "view/box_right.php" ?>
</main>