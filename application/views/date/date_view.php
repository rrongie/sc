<style type="text/css">
input[type="date"]::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0;
}

</style>

<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Date Range From: to:</h2>
                    
                </div>  <!-- /.col-lg-12 -->
        
        <div class="panel-body">
            <div class="well">
                <form id="search">
                <label>From</label><input type="date" name="from" required> <label>To:</label><input type="date" name="to"> <button class="btn  btn-circle btn-primary" id="go">Go</button>
                </form>
                <div>&nbsp;</div>
               <div class="show_result"><!-- show results here --></div>
            </div><!--end of well-->
        </div><!-- end of panel body -->



              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->


<script type="text/javascript">

$(document).on('click','#go',function(e){
e.preventDefault();
$.ajax({

    type:'POST',
    url: '<?php echo base_url('date/search_date')?>',
    data: $('#search').serialize(),
     async: false,
    success:function(e){
          $('.show_result').html(e);
    }
    

})

});

</script>