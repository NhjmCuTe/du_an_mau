<main class="catalog  mb ">

   <div class="boxleft">
      <?php if (isset($thong_bao) && $thong_bao != '') : ?>
         <h2>Tìm kiếm: <?= $thong_bao ?></h2>
      <?php else : ?>
         <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
         </div>
      <?php endif ?>
      <?php include "view/sanpham.php" ?>
   </div>
   <?php include "view/box_right.php"; ?>
</main>
<!-- BANNER 2 -->