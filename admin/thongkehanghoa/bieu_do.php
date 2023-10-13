
<div class="row2">
<div class="row2 font_title">
  <h1>Biểu đồ</h1>
</div>
<div class="row2 form_content ">
  <div
          id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
  </div>

  <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

// Set Data
      const data = google.visualization.arrayToDataTable([
        ['Danh mục', 'số lượng'],
        // ['Italy',54.8],
        // ['France',48.6],
        // ['Spain',44.4],
        // ['USA',23.9],
        <?php foreach($thongke_hanghoa_theo_loai as $values): extract($values) ?>
        ['<?= $name ?>',<?= $so_luong ?>],
        <?php endforeach ?>
      ]);

// Set Options
      const options = {
        title:'Biểu đồ số lượng sản phẩm trong danh mục',
        is3D:true
      };

// Draw
      const chart = new google.visualization.PieChart(document.getElementById('myChart'));
      chart.draw(data, options);

    }
  </script>

</div>
</div>