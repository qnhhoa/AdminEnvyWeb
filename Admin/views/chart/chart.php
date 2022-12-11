<?php
$conn = mysqli_connect("localhost","root","","cosmetic3");
$query = "SELECT EXTRACT(DAY FROM NgayHD) as ngay, avg(Rating) as rt, Trangthai, sanpham.SpID from hoadon, danhgia, donhang, sanpham WHERE hoadon.MaHD=donhang.MaHD and sanpham.SpID = danhgia.SpID GROUP BY Trangthai, sanpham.SpID";
$query1 = "SELECT EXTRACT(MONTH from NgayHD) as month, sum(TongTien) as Tong from donhang, hoadon where donhang.MaHD=hoadon.MaHD GROUP by EXTRACT(MONTH from NgayHD)";
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);
$data = [];
$data1 = [];
while($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}
while($row1 = mysqli_fetch_array($result1)) {
  $data1[] = $row1;
}

// echo "<pre>";
// var_dump($data);
// echo "</pre>";
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month','Sumary'],
              <?php
              foreach($data1 as $key1){
                  echo "['" . $key1['month'] . "'," . $key1['Tong'] . "],";
              }
              ?>
        ]);

        var options = {
          title: 'Envy Monthly Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Date','Rating','Pro'],
            <?php
            foreach($data as $key){
                echo "['" . $key['ngay'] . "'," . $key['rt'] . "," . $key['SpID'] . "],";
            }
            ?>
            
        ]);

        var options = {
          title : 'Daily Rating of Product',
          vAxis: {title: 'Rating'},
          hAxis: {title: 'Date'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>