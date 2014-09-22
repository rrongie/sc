 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var jsonData = $.ajax({
          url: "<?php echo site_url('statistics/get_pie_sale')?>",
          async: false
          }).responseText;
         var data = google.visualization.arrayToDataTable($.parseJSON(jsonData));

        var options = {
          title: ' 3D Pie Chart',
          is3D: true,
        };

        var chart =  new google.visualization.PieChart(document.getElementById('pie-chart'));
        chart.draw(data, options);


        //FOR DONUT-CHART//
          var jsonData = $.ajax({
          url: "<?php echo site_url('statistics/get_pie_sale')?>",
          async: false
          }).responseText;
         var data = google.visualization.arrayToDataTable($.parseJSON(jsonData));

        var options = {
          title: 'Donut Chart',
           pieHole: 0.4,
        };

        var chart =  new google.visualization.PieChart(document.getElementById('donut-chart'));
        chart.draw(data, options);

      }

   


    </script>

<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Pie Graph</h2>
       
                </div>
  <p>GUIDE: https://google-developers.appspot.com/chart/interactive/docs/gallery/piechart#donut</p>            
<div class="col-lg-6">

  <div id="pie-chart"></div>


</div>


<div class="col-lg-6">

  <div id="donut-chart"></div>


</div>



                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




