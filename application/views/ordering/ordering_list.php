<?php 

			foreach($get_total as $row){
				

				echo '<div class="col-lg-4 pull-left">';
				echo '<div class="well"> ';
				
				echo'<button title="DELETE" data-conid=" '.$row->id.' "  rel="tooltip" data-placement="bottom" class="delete btn btn-xs btn-danger pull-right"><i class="fa fa-times"></i></button>';
				

				echo'<button title="EDIT" data-conid=" '.$row->id.' "  rel="tooltip" data-placement="bottom" class="edit btn btn-xs btn-primary pull-right"><i class="fa fa-edit"></i></button>';

				echo '<label>Name:&nbsp;</label>'; echo'<span>' .$row->name. '</span><br>';
				echo '<label>Order:&nbsp;</label>'; echo'<span>' .$row->order. '</span><br>';
				echo '<label>qty: &nbsp;</label>'; echo'<span>' .$row->qty. '</span><br>';
				echo '<label>Price: &nbsp;</label>'; echo'<span>' .$row->price. '</span><br>';
				echo '<label>Total: &nbsp;</label>'; echo'<span>' .$row->total. '</span><br>';
				
				echo'</div>';//end of well//
				echo'</div>'; //end of col-lg-4//
			}

			?>



<!--modal for edit order-->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><label>EDIT ORDER</label></center>
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
//tool tip//
   $(document).ready(function(){
	$("[rel='tooltip']").tooltip();
   

    })
//ajax for delete//
$(document).on('click','.delete',function(e){
e.preventDefault();

var id = $(this).data('conid');
var $orders = $(this).closest('div');

 if (confirm('Are you sure you want to delete this?')) {

$.ajax({
	type:'GET',
	url:  "<?php echo base_url().'ordering/delete_order/"+id+"/'?>",
    success: function(){
     $orders.fadeOut(300, function(){
		});
    }

});

}

});


$(document).on('click','.edit',function(e){
e.preventDefault();
var	id = $(this).data('conid');

$('.modal-area').load('<?php echo site_url('ordering/edit_order')?>', {id: id});
$('#myModal').modal('show');


});
</script>


