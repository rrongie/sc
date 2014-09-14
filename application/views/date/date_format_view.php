<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Date and Time Formating</h2>
                 </div>
                <!-- /.col-lg-12 -->
         
            </div>
            

             <div class="show-result">
                <!-- show results date -->
            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->



<script type="text/javascript">

$(document).ready(function(){

    
   $.ajax({
        type:'GET',
        url:'<?php echo base_url(). 'date/get_date_formats' ?>',
        success:function(e){
            $('.show-result').html(e);
        }


   });

});


</script>