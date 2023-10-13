
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sản phẩm', 'Số bình luận'],
          // ['2014', 1000, 400, 200],
          // ['2015', 1170, 460, 250],
          // ['2016', 660, 1120, 300],
          <?php foreach($thong_ke_binh_luan as $values): extract($values) ?>
          ['<?=$name ?>', <?=$sl_binhluan ?>],
          <?php endforeach ?>
        ]);

        var options = {
          chart: {
            title: 'THỐNG KÊ SỐ LƯỢNG BÌNH LUẬN TRÊN SẢN PHẨM',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

 
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>