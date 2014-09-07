<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">JQUERY + CI(flashdata) validation Form  :3</h2>
                </div>
                <!-- /.col-lg-12 -->
            
                <div class="panel-body">
            
            <?php 
            $attributes = array('class' => 'form-horizontal', 'id' => 'commentForm',   );
            echo form_open('cheat/check_form_validation', $attributes);
            ?>

              <?php

            if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success text-center">';
            echo $this->session->flashdata('success');
            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo '</div>';
      
            }

            if ($this->session->flashdata('fail')) {
            echo '<div class="alert alert-danger text-center">';
            echo $this->session->flashdata('fail');
            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo '</div>';
      
            }

            ?>
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username:</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="" class="username form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="email form-control input-md">
    
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="password form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="c_password">Confirm Password:</label>
  <div class="col-md-4">
    <input id="c_password" name="c_password" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit"class="btn btn-primary">submit</button>
  </div>
</div>


</fieldset>


                 </div><!-- end of panel body-->
           </div> <!-- /.row -->
      </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->



<script>
    $(document).ready(function() {
        
        jQuery.validator.addMethod('password', function(value, element) {              //  <-----pass must contain 1 capital and 1 number code
       return this.optional(element) || (value.match(/[A-Z]/) && value.match(/[0-9]/));
       },
        'Password must contain at least one capital and one number.');
        $("#commentForm").validate({  // <---- <form id="commentForm">
            errorElement: "em",
   
       success: function(label) {
              label.text("ok!").addClass("success");
          },

        rules: {
            username: "required",
            email: "required email",
            password: {
                required: true,
                minlength: 5},
                c_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"},
        },
        messages: {
            username: "Enter your Username",
            email: "Enter your Email",
            email: {
                required: "Enter your Email",
                email: "Please enter a valid email address."},
            password:{
                 required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"},
            c_password: {
            required: "Please confirm your password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"},

        }
    })        
     

    });
</script>

