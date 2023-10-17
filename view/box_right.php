<div class="boxright">

  <div class="mb tai_khoan">
    <div class="box_title">TÀI KHOẢN</div>
    <?php include "view/dang_nhap.php" ?>
    <!-- <div class="box_content form_account">
      <form action="#" method="POST"></form>
      <h4>Tên đăng nhập</h4><br>
      <input type="text" name="user" id="">
      <h4>Mật khẩu</h4><br>
      <input type="password" name="pass" id=""><br>
      <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
      <br><input type="submit" value="Đăng nhập">
      <li class="form_li"><a href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
      <li class="form_li"><a href="index.php?act=dangki">Đăng kí thành viên</a></li>

    </div> -->
  </div>
  <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
      <ul>
        <?php foreach ($danh_muc as $values) :
          extract($values);
        ?>
          <li><a href="index.php?act=loadsanphamcungdanhmuc&iddm=<?= $id ?>"><?= $name ?></a></li>
        <?php endforeach ?>
        <!-- <li><a href="">Laptop</a></li>
        <li><a href="">Điện thoại</a></li>
        <li><a href="">Ipad</a></li>
        <li><a href="">Tivi</a></li> -->
      </ul>
    </div>
    <div class="box_search">
      <form action="index.php?act=tim_kiem" method="post">
        <input type="text" name="tukhoa" id="" placeholder="Từ khóa tìm kiếm">
        <input type="submit" value="Tìm kiếm" name="timkiem">
      </form>
    </div>
  </div>
  <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
  <div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
      <?php foreach ($sanpham_ban_chay as $values) :
        extract($values);
        $hinh = $img_path . $img;
      ?>
        <div class="selling_products" style="width:100%;">
          <img src="<?= $hinh ?>" alt="anh">
          <a href="index.php?act=ctsanpham&idsp=<?= $id ?>"><?= $name ?></a>
        </div>
      <?php endforeach ?>
      <!-- <div class="selling_products" style="width:100%;">
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
      <a href="">Đồng hồ đeo tay nữ</a> -->
    </div>
  </div>
</div>
</div>