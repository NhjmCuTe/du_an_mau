<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dự án mẫu</title>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/css.css">
   <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body>
   <div class="boxcenter">
      <!-- BIGIN HEADER -->
      <header>
         <div class=" mb header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
         </div>
         <div class=" mb menu">
            <ul>

               <li class="dropdown">
                  <a class="dropdownbtn" href="index.php">Trang chủ</a>
                  <div class="dropdown_content">

                  </div>
               <li class="dropdown">
                  <a class="dropdownbtn" href="#">Danh mục</a>
                  <div class="dropdown_content">
                     <?php foreach ($danh_muc as $values) : ?>
                        <a href="index.php?act=loadsanphamcungdanhmuc&iddm=<?= $values['id'] ?>"><?= $values['name'] ?></a>
                     <?php endforeach ?>

                  </div>
               <li class="dropdown">
                  <a class="dropdownbtn" href="index.php?act=all_sanpham">Sản Phẩm</a>


            </ul>
         </div>
      </header>
      <!-- END HEADER -->