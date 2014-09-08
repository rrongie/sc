<script type="text/javascript">
  

$(document).on('click', '#submit', function(e){
e.preventDefault();


$.ajax({
  method:'POST',
  url: '<?php echo base_url('cheat/check_login_fom')?>',
  data: $('#form1').serialize() // get the form
}).success(function(e){
  $('.modal-area').html(e);  // show modal-area
});



});

</script>


<form id="form1"class="form-horizontal">
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>   
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md">
   <?php echo form_error('username'); ?> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-5">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
    <?php echo form_error('password'); ?>
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