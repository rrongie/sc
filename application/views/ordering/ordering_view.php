<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Simple Ordering System</h2>
                     
                </div>
                     

       <div class="panel-body">

             <div class="col-lg-3"><!-- add order -->
               
               <div class="well">
                    <?php

                    if ($this->session->flashdata('success')) {
                    echo '<div class="alert alert-success text-center">';
                    echo $this->session->flashdata('success');
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo '</div>';
              
                    } 

                     if ($this->session->flashdata('success_edit')) {
                    echo '<div class="alert alert-success text-center">';
                    echo $this->session->flashdata('success_edit');
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo '</div>';
              
                    } 

                    

                    ?>     
                    <form id="order_form">
                     

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="name">Name</label>
                                  <div class="controls">
                                    <input id="name" name="name" type="text" class="form-control" required="" autofocus>
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="order">Order:</label>
                                  <div class="controls">
                                    <input id="order" name="order" type="text" placeholder="" class="form-control" required>
                                    
                                  </div>
                                </div>
                                <div id="generate">
                                  <div class="checker">
                                <!--  Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="qty">Qty:</label>
                                  <div class="controls">
                                    <input id="qty" name="qty" type="number" class="qty form-control"style="width: 90px;" required="">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="price">Price:</label>
                                  <div class="controls">
                                    <input id="price" name="price" type="number" class="price form-control"style="width:90px;"placeholder=""required="">
                                    
                                  </div>
                                </div>


                                  <div class="control-group">
                                  <label class="control-label" for="price">Total:</label>
                                  <div class="controls">
                                    <input name="total" type="number" id="tots" class="form-control" style="width:90px;"readonly>
                                    
                                  </div>
                                </div>
                              </div><!-- end of checker -->
                              </div><!-- end of generate

                                <!-- Button -->
                                <div class="control-group">
                                  <label class="control-label" for="submit"></label>
                                  <div class="controls">
                                    <button id="submit" name="submit" class="btn btn btn-primary">ADD</button>
                                  </div>
                                </div>

                   </form> 
                     </div><!-- end of well -->
                    <!-- income -->
                     <p></p>
                 <div class="well"><b>Total Income:</b>{income}{total}{/income} <br>
                  <button class="btn btn-xs btn-default">update</button>
                </div>
                  <!-- end of income -->
            </div> <!-- end of aadd order -->
        
             <div class="orders"> <!-- show orders via ajax --></div> 

        </div> <!--panel body -->

              </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->


<script type="text/javascript">

$(document).on('click','#submit',function(){
    
    $.ajax({
    method:'POST',
    url: '<?php echo base_url('ordering/insert_order')?>',
    data: $('#order_form').serialize(),
    async: false,

});


})

</script>

<script type="text/javascript">
$(document).ready(function(){
$.ajax({
        
    type: 'GET',
    url: '<?php echo base_url('ordering/get_orders')?>',
    success: function(e){
         $('.orders').html(e);
    }
});

});

</script>
<script type="text/javascript">

$(document).on('click','.close',function(){
    
$(".remove").fadeOut(400);
 
})

</script>
<script>
$(document).ready(function(){

    $('#generate input').change(function(){

      var $row = $(this).closest('.checker');

     
      var qty = parseInt($row.find('.qty').val());
      var price = parseInt($row.find('.price').val());

      
      var total = qty * price;
      
      document.getElementById('tots').value='' + total ; 
      


    });

});
</script>


