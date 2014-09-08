{list}
<div class="col-lg-4">
       <div class="well">
			<button title='DELETE'  data-conid="{id}"rel='tooltip' data-placement='bottom'class="delete btn btn-xs btn-danger pull-right"><i class=" fa fa-times"></i></button>
			<button title='EDIT'  data-id="{id}"rel='tooltip' data-placement='bottom'class=" edit btn btn-xs btn-primary pull-right"><i class="fa fa-edit"></i></button>

			<label>Name:</label> <span class="noedit">{name}</span><br>
			<input data-id="{id}"class="editme"><br>
			<label>Order:</label> <span class="noedit">{order}</span><br>
			<input data-id="{id}"class="editme"><br>
			<button data-id="{id}"style="margin-top:10px;"class="editme btn btn-xs btn-primary">UPDATE</button>
        </div><!-- end of well -->
 </div> <!-- end og col-lg-4-->


     {/list}



<script type="text/javascript">
//tool tip//
   $(document).ready(function(){
	$("[rel='tooltip']").tooltip();
   

    })
//ajax for delete//
$(document).on('click','.delete',function(e){
e.preventDefault();

var id = $(this).data('conid');

//alert(id);
var $orders =$(this).closest('div');

$.ajax({
	type:'GET',
	url:  "<?php echo base_url().'ordering/delete_order/"+id+"/'?>",
    success: function(){
     $orders.fadeOut(400, function(){
		});
    }

});

});
//edt//
$(document).on('click','.edit',function(e){
e.preventDefault();

var dataID = $(this).attr("data-id");
//alert(dataID);
 
 $(".editme[data-id=" + dataID + "]").toggle('slow');



});

</script>

