<main class="catalog  mb ">

  <div class="boxleft">
    <div class="  mb">
      <?php extract($sanpham_1);
      $hinh = $img_path . $img;
      ?>
      <div class="box_title"><?= $name ?></div>
      <div class="box_content">
        <img src="<?= $hinh ?>" width="400px">
        <p><?= $mota ?></p>
      </div>
    </div>

    <div class="mb">
      <div class="box_title">BÌNH LUẬN</div>
      <div class="box_content2  product_portfolio binhluan ">
        <table>
          <?php foreach ($binh_luan as $values) :;
            extract($values) ?>
            <tr>

              <td><?= $noidung ?></td>
              <td><?= $user ?></td>
              <td><?= $ngaybinhluan ?></td>

              <?php endforeach ?>
            </tr>
          <!-- <tr>
            <td>Sản phẩm quá đẹp</td>
            <td>Nguyễn Thành A</td>
            <td>20/10/2022</td>
          </tr> -->
        </table>
      </div>
      <div class="box_search">
        <form action="index.php?act=ctsanpham" method="POST">
          <input type="hidden" name="idpro" value="<?=$id ?>">
          <input type="text" name="noidung">
          <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
      </div>

    </div>

    <div class=" mb">
      <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
      <div class="box_content">
        <?php foreach ($sp_cung_loai as $values) : ?>
          <li><a href="index.php?act=ctsanpham&idsp=<?= $values['id'] ?>"><?= $values['name'] ?></a></li>
        <?php endforeach ?>
        <!-- <li><a href="">Sản phẩm 1</a></li>
      <li><a href="">Sản phẩm 1</a></li>
      <li><a href="">Sản phẩm 1</a></li>
      <li><a href="">Sản phẩm 1</a></li> -->
      </div>
    </div>
  </div>
  <?php include "view/box_right.php" ?>
  <!-- <div class="boxright">

  <div class="mb">
    <div class="box_title">TÀI KHOẢN</div>
    <div class="box_content form_account">
      <form action="#" method="POST"></form>
      <h4>Tên đăng nhập</h4><br>
      <input type="text" name="user" id="">
      <h4>Mật khẩu</h4><br>
      <input type="password" name="pass" id=""><br>
      <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
      <br><input type="submit" value="Đăng nhập">
      <li class="form_li"><a href="#">Quên mật khẩu</a></li>
      <li class="form_li"><a href="#">Đăng kí thành viên</a></li>

    </div>
  </div>
  <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
      <ul >
        <li><a href="">Đồng hồ </a></li>
        <li><a href="">Laptop</a></li>
        <li><a href="">Điện thoại</a></li>
        <li><a href="">Ipad</a></li>
        <li><a href="">Tivi</a></li>
      </ul>
    </div>
    <div class="box_search">
      <form action="#" method="POST">
        <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
      </form>
    </div>
  </div>-->
  <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
  <!-- <div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
    </div>
  </div>
</div> -->

</main>