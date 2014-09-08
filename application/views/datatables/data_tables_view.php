<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Data Tables + CI</h2>
        
                <div class="panel-body">



            <table id="accounts-view1"class="table table-striped" cellspacing="0">
               
            <thead>
              <a class="add"href="#"><div class="text-center"> <p class="btn btn-xs btn-primary btn-outline"><i class="fa fa-plus"></i> Add User</p></div></a>
                <tr>  
                      <th>Id</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            </tfoot>
            </table>


                </div><!-- panel body -->


            
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->

<!--modal for edit user-->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><label>EDIT USER INFO</label></center>
      </div>
      <div class="modal-body modal-area">
        <!-- boody here -->                      

   <!-- end of body -->
 </div>

</div>
</div>
</div>

<!-- end of modal-->


<!--modal for edit user-->
<div class="modal fade bs-example-modal-sm" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><label>ADD USER</label></center>
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
    
                $(document).ready(function() {
    $('#accounts-view1').dataTable( {
       
        "aaSorting": [[ 10, "asc" ]],
        "bProcessing": true,
        "sAjaxSource": "<?php echo site_url('cheat/get_data_tables'); ?>",
        "aoColumnDefs": [
            {
              "fnRender": function(oObj) {
                  var a;
                  var b;  
                    a = '<a class="con-info label label-success" rel="tooltip" data-placement="bottom"data-conid="'+oObj.aData[0]+'" href="#"><i class="fa fa-pencil-square-o"></i></a> ';
                    
                    b = '<a class="test label label-danger" href="remove_user/'+oObj.aData[0]+'"><i class="fa fa-times" rel="tooltip" data-placement="bottom"></i></a> ';
                    return a + b;
              },
                "aTargets": [ 4 ],
                "sDefaultContent": ""
            }
        ]
    } );
} );

</script>

<script>
$(document).on('click', '.con-info', function(e){
e.preventDefault();

var id = $(this).data('conid');
$('.modal-area').load('<?php echo site_url('cheat/get_user_info_data_tables')?>', {id: id});
$('#myModal').modal('show');

});


$(document).on('click', '.test', function(){

  return confirm("Do you want to remove?");

});
</script>


<script type="text/javascript">

$(document).on('click', '.add', function(e){
e.preventDefault();

$('.modal-area').load('<?php echo site_url('cheat/add_user_data_tables')?>');

$('#myModal1').modal('show');

});


</script>

