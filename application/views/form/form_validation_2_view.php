<script type="text/javascript">
$(document).ready(function(){
   $('#submit').click(function(){
    

    $.post("<?= base_url() . 'cheat/check_form_validation_2/'?>",
    $("#form2").serialize(),
    function(result) {
     $("#error_message").html(result);
   },"html");
  });    
        });
</script>


<style type="text/css">
.verify
{
    margin-top: 6px;
    margin-left: 9px;
    position: absolute;
    width: 16px;
    height: 16px;
}

#form2{
margin-left: 390px;
}

#user_name,#email_address,#password,#con_password{
  font-size: 19px;
  line-height: 25px;
  width: 250px;
  border-radius:3px;
}

</style>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">jQuery + Ajax form validation </h2>
                    
                </div>
               

                <div class="panel-body">



<div id="error_message" style="color:red" class="text-center"></div>
<form id="form2">


 <label>Username :</label><br>
 <input id="user_name" name="user_name" id="user_name"type="text" value="<?php echo set_value('user_name'); ?>"><span id="usr_verify" class="verify"></span><br />

  <label>Email :</label> <br>
 <input id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>"type="text"><span id="email_verify" class="verify"></span><br />

<label>Password :</label> <br>
<input type="password" id="password" name="password"><span id="password_verify" class="verify"></span> <br />

<label>Confirm Password :</label> <br>
<input type="password" id="con_password" name="con_password"><span id="confrimpwd_verify" class="verify"></span> <br />

<input type="button" id="submit" style="margin-top:10px;" value="submit"class="btn btn-primary">


</form>


    
 </div><!--pnael body -->

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




<script type="text/javascript">
$(document).ready(function(){
$("#user_name").keyup(function(){
    
        if($("#user_name").val().length >= 4)
        {
        
    $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>/cheat/check_username",
            data: "name="+$("#user_name").val(),
            success: function(msg){
                if(msg=="true")
                {
                    $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" });
                }
                else
          {
                    $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/cross.png')" });
                }
            }
        });
     
    }
        else 
    {
            $("#usr_verify").css({ "background-image": "none" });
        }
    });
    

$("#email_address").keyup(function(){
        var email = $("#email_address").val();
      
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" });
               email_con=true;
               register_show();
            } else {
               
                $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/cross.png')" });
            }
 
        }
        else {
            $("#email_verify").css({ "background-image": "none" });
        }

    });
  
  $("#password").keyup(function(){
        
        if($("#con_password").val().length >= 4)
        {
            if($("#con_password").val()!=$("#password").val())
            {
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/cross.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/iamges/icons/cross.png')" });
                pwd=false;
                register_show();
            }
            else{
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" });
            }
        }
    });
    
    $("#con_password").keyup(function(){
        
        if($("#password").val().length >=4)
        {
            if($("#con_password").val()!=$("#password").val())
            {
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/cross.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/cross.png')" });
                pwd=false;
                register_show();
            }
            else{
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/icons/check.png')" });

            }
        }
    });
});
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
  }
</script>