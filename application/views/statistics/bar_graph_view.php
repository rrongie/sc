<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Bar Graph</h2>
                
                </div>
            

                <div class="panel-body">
            <p>GUIDE: https://developers.google.com/chart/interactive/docs/gallery</p>
 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var jsonData = $.ajax({
          url: "<?php echo site_url('statistics/get_sale')?>",
          async: false
          }).responseText;
         var data = google.visualization.arrayToDataTable($.parseJSON(jsonData));

        var options = {
          title: 'Monthly Sale',
          is3D: true,
        };

        var chart =  new google.visualization.ColumnChart(document.getElementById('bar'));
        chart.draw(data, options);
    
      //side bar//

          var jsonData = $.ajax({
          url: "<?php echo site_url('statistics/get_sale_side_bar')?>",
          async: false
          }).responseText;
         var data = google.visualization.arrayToDataTable($.parseJSON(jsonData));

        var options = {
          title: 'Wine Monthly Sale',
          is3D: true,
        };

        var chart =  new google.visualization.BarChart(document.getElementById('side-bar'));
        chart.draw(data, options);


      }

   



</script>
 
  <div class="col-lg-6">
    <div id="bar" class="graphs"></div>
  </div>
          

  <div class="col-lg-6">
    <div id="side-bar" class="graphs"></div>
  </div>
          

                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




