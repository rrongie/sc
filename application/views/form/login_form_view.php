
<script type="text/javascript">

   $(document).ready(function(){
   $('#submit').click(function(){
    

    $.post("<?= base_url() . 'cheat/check_login_fom/'?>",
    $("#form1").serialize(),
    function(result) {
     $("#error_message").html(result);
   },"html");
  });    
        });
</script>

<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Modal Login From + ajax Validation :3</h2>
                     
                
                    <div class="panel-body">


  <div class="control-group text-center">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button type="button" data-toggle="modal" data-target="#myModal"class="btn btn-outline btn btn-primary btn-circle btn-xl"><i class="fa fa-sign-in"></i>
  </div>
</di>             
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Login :3</h4>
      </div>
      <div class="modal-body"><!-- modal body -->
       

<form id="form1"class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div id="error_message" style="color:red" class="text-center"></div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>   
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-5">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="button" id="submit" class="btn btn-info" value="Submit" />
  </div>
</div>

</fieldset>
</form>


      </div><!-- end of modal body-->
    
    </div>
  </div>
</div><!-- end of modal -->


