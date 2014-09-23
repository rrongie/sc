<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Cart</h2>
         
                </div>
                <!-- /.col-lg-12 -->
           

<div class="col-lg-3">




<?php foreach($item as $p): ?>
<div class="well">
<label>NAME:</label>
<?php echo $p['name']; ?><br>
<label>PRICE:</label>
<?php echo $p['price']; ?><br>
<?php echo form_open('cart/add_cart'); ?>

<?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
<?php echo form_hidden('product_id', $p['id']); ?>
<p></p>
<?php echo form_submit('add', 'Add','class="btn btn-xs btn-primary"'); ?>
</div>
<?php echo form_close(); ?>

<?php endforeach;?>

</div>


<div class="col-lg-4">
<?php if($cart = $this->cart->contents()): ?>
<table class="table">

<thead>
     <th>Quantity</th>
    <th>Item</th>
    <th>Price</th>

  
</thead>


<?php foreach($cart as $item){

echo'
    <tr>
     
       <td> '.$item['qty'].' </td>
       <td> '.$item['name'].' </td>
       <td> '.$item['subtotal'].' </td>
       <td> <a class="delete"href="cart/remove_cart/'.$item['rowid'].'"> <i class="btn btn-xs btn-danger fa fa-times"></i></td>
       
    </tr>

';
}?>
   <td colspan="2"><b>TOTAL</b></td>
   <td><?php echo $this->cart->total();?></td>


</table>

<?php endif; ?>
</div>


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




