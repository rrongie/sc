{user}
<div class="form2">
<form id="form_edit">

 <img class="profile"src="<?php echo base_url() . 'assets/images/profile/{picture}.png'?>"><br>

 <label>Username :</label><br>
 <input id="user_name" name="username" id="user_name"type="text" value="{username}"><span id="usr_verify" class="verify"></span><br />

  <label>Email :</label> <br>
 <input id="email_address" name="email" value="{email}"type="text"><span id="email_verify" class="verify"></span><br />


<label style="margin-top:10px;">Change position:</label>
						<select  name="type" class="btn btn-xs btn-default"> 
                         	<?php
                         	foreach ($position as $key => $value) {
                         		if ($value['name'] == $user[0]->type) {
                         			echo "<option selected>".$value['name']."</option>";
                         		}else{
                         			echo "<option>".$value['name']."</option>";
                         		}
                         	}
                         	?>

                        </select> <br>

</div>
<hr>
<div class="text-center">
<input type="button" id="submit" value="Save"class="btn btn-primary"> &nbsp;
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</form>
{/user}

