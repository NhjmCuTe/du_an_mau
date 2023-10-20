<main class="catalog  mb ">

  <div class="boxleft">

    <div class="box_title">Đăng ký thành viên</div>
    <div class="box_content form_account">
      <form action="index.php?act=dangky" method="post">
        <div>
          <p>Email</p>
          <input type="email" name="email" id="email" placeholder="email" required>
          <h4 style="color: red;" id="err1"></h4>
        </div>
        <div>
          Tên đăng nhập
          <input type="text" name="user" id="user" placeholder="user" required>
          <h4 style="color: red;" id="err2"></h4>

        </div>
        Mật khẩu
        <div>
          <input type="password" name="pass" id="pass" placeholder="pass" required>
          <h4 style="color: red;" id="err3"></h4>

        </div>
        <input type="submit" value="Đăng ký" name="dangky" onclick="return check_dang_ky()">
        <input type="reset" value="Nhập lại"><br>
        <h4 style="color: red;"><?= isset($thong_bao_dang_ky_that_bai) ? $thong_bao_dang_ky_that_bai : '' ?></h4>
        <h4 style="color: green;"><?= isset($thong_bao_dang_ky) ? $thong_bao_dang_ky : '' ?></h4>
      </form>
      <script>
        function check_dang_ky() {
          var email = document.getElementById('email').value;
          var vali_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
          var user = document.getElementById('user').value;
          var pass = document.getElementById('pass').value;
          var err1 = document.getElementById('err1');
          var err2 = document.getElementById('err2');
          var err3 = document.getElementById('err3');
          var err = false;
          if (email == '') {
            err1.innerText = "không được để trống";
            err = true;
          } else if (!email.match(vali_email)) {
            err1.innerText = "sai định dạng email";
            err = true;
          } else {
            err1.innerText = "";

          }
          if (user == '') {
            err2.innerText = "không được để trống";
            err = true;

          } else {
            err2.innerText = "";

          }
          if (pass == '') {
            err3.innerText = "không được để trống";
            err = true;

          } else {
            err3.innerText = "";

          }
          if (err) {
            return false;
          }
        }
      </script>
    </div>

  </div>
  <?php include "view/box_right.php" ?>
</main>