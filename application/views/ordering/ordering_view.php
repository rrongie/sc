<!-- Page Content -->
  <script type="text/javascript">


(function($) {
    $.fn.drags = function(opt) {

        opt = $.extend({handle:"",cursor:"move"}, opt);

        if(opt.handle === "") {
            var $el = this;
        } else {
            var $el = this.find(opt.handle);
        }

        return $el.css('cursor', opt.cursor).on("mousedown", function(e) {
            if(opt.handle === "") {
                var $drag = $(this).addClass('draggable');
            } else {
                var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
            }
            var z_idx = $drag.css('z-index'),
                drg_h = $drag.outerHeight(),
                drg_w = $drag.outerWidth(),
                pos_y = $drag.offset().top + drg_h - e.pageY,
                pos_x = $drag.offset().left + drg_w - e.pageX;
            $drag.css('z-index', 1000).parents().on("mousemove", function(e) {
                $('.draggable').offset({
                    top:e.pageY + pos_y - drg_h,
                    left:e.pageX + pos_x - drg_w
                }).on("mouseup", function() {
                    $(this).removeClass('draggable').css('z-index', z_idx);
                });
            });
            e.preventDefault(); // disable selection
        }).on("mouseup", function() {
            if(opt.handle === "") {
                $(this).removeClass('draggable');
            } else {
                $(this).removeClass('active-handle').parent().removeClass('draggable');
            }
        });

    }
})(jQuery);

$('#dragme').drags();


  </script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Simple Ordering System</h2>
                     
                </div>
                

            <div class="panel-body">
               
               <div class="orders">
                    <!-- show orders via ajax -->
               </div>
                
 <div class="remove col-lg-3" id="dragme"><!-- add order -->
        <div class="well">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <form id="order_form">
             


                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="name">Name</label>
                          <div class="controls">
                            <input id="name" name="name" type="text" placeholder="" class="input-large"autofocus required>
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="order">Order:</label>
                          <div class="controls">
                            <input id="order" name="order" type="text" placeholder="" class="input-large" required>
                            
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="control-group">
                          <label class="control-label" for="submit"></label>
                          <div class="controls">
                            <button id="submit" name="submit" class="btn btn btn-primary">ADD</button>
                          </div>
                        </div>


               
            </form> 
        </div>
 </div>   <!-- end of aadd order -->
        
            

            </div> <!--panel body -->



                <!-- /.col-lg-12 -->
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
    data: $('#order_form').serialize()
    }).success(function(e){
      
        $('.oder_list').html(e);
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

$(document).ready(function(){


    $('#dragme').drags();
});
</script>

