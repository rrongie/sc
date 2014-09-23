<div class="col-lg-6">
{query}
<div class="well">
<button data-id="{id}"class="delete btn btn-xs btn-danger pull-right"><i class="fa fa-times"></i></button>
<div><b>Name</b>{name}<br>
<b>Order</b>{order}<br>
<b>Price</b>{price}<br>
<b>Total</b>{total}</div>
</div>
{/query}
</div>

<script type="text/javascript">

$(document).on('click','.delete',function(){

var id = $(this).data('id');
var $orders = $(this).closest('div');
$orders.fadeOut(300, function(){
		});

});

</script>
