
<div class="form2">

<form id="form_edit">
<label>Username :</label><br>
 <input id="user_name" name="username" id="user_name"type="text" value=""><span id="usr_verify" class="verify"></span><br />
<?php echo form_error('username'); ?>
  <label>Email :</label> <br>
 <input id="email_address" name="email" value=""type="text"><span id="email_verify" class="verify"></span><br />
<?php echo form_error('email'); ?>

</div>
<hr>
<div class="text-center">
<input type="button" id="submit" value="Save"class="btn btn-primary"> &nbsp;

  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
<div id="general-ajax-load" style="display:none">
		<img src="<?php echo base_url() . "assets/images/gif-load.gif";?>">
	</div>
</form>

<script type="text/javascript">
	

$(document).on('click', '#submit', function(e){
e.preventDefault();


$.ajax({
	method:'POST',
	url: '<?php echo base_url('cheat/ajax_add_user_data_tables')?>',
	data: $('#form_edit').serialize()
}).success(function(e){
	$('.modal-area').html(e);
});



});

</script>





