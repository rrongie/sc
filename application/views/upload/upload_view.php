     

<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Upload Image</h2>
                    
                </div>
                
                    <div class="panel-body">

                           

                            <div class="col-md-3 well">
                            
                                <?php
                                if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success text-center">';
                                echo $this->session->flashdata('success');
                                echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                echo '</div>';
                                } ?>
                            
                            <?php echo form_open_multipart('upload/upload_image');?>

                            <label class="control-label" for="author">Insert Image</label>
                            <input required id="image" name="userfile" type="File" placeholder="" class="input-xlarge">
                            <div>&nbsp;</div>
                            <button class="btn btn-xs btn-primary btn-outine">Upload</button>
                            </div>

                            </form>
                             <div class="picture">
                                <!-- load all picture here -->
                            </div>

                    </div><!-- end of panel body-->



                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->



<script type="text/javascript">
$(document).ready(function(){
    $.ajax({

        type:'GET',
        url:'<?php echo base_url('upload/get_images')?>',
        success: function(e){
            $('.picture').html(e);
        }


    })
});
</script>


