<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Search</h2>
                    
                </div>
                <!-- /.col-lg-12 -->
           
                <div class="panel-body">

                    <input type="text" id="search"style="border-radius:5px; height:30px; " placeholder="search keywords"><i class="fa fa-search"></i>
                </div><!-- end of panel body -->

                <div class="search-results">

                </div>



                



            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->


<script type="text/javascript">

$(document).on('keyup','#search',function(){

 var term = $('#search').val();

 $.ajax({

    type:'POST',
    url:'<?php echo base_url(). 'search/get_search'?>',
    data: {term:term},
    success:function(data){
        $('.search-results').html(data);
    }


 });


});


</script>

