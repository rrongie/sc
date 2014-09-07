<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Modal Login From + ajax Validation :3</h2>
                     
                
                    <div class="panel-body">

                      <div class="text-center">
    <button type="button"class="login btn btn-outline btn btn-primary btn-circle btn-xl"><i class="fa fa-sign-in"></i>
          </div> 
              </div>
                    <!-- panel body-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->


<!-- Modal -->

<!--modal for edit user-->
<div class="modal fade bs-example-modal-sm" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><label>log-in</label></center>
      </div>
      <div class="modal-body modal-area">
        <!-- boody here -->                      

   <!-- end of body -->
 </div>

</div>
</div>
</div>

<!-- end of modal-->
<script type="text/javascript">
$(document).on('click', '.login', function(e){
e.preventDefault();

$('.modal-area').load('<?php echo site_url('cheat/view_login')?>');

$('#myModal1').modal('show');

});
</script>