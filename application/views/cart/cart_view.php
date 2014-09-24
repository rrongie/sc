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
<label>STOCKS:</label>
<?php echo $p['stocks']; ?><br>
<?php echo form_input('quantity', '1'); ?>
<?php echo form_hidden('product_id', $p['id']); ?>
<p></p>
<?php echo form_submit('add', 'Add','class="btn btn-xs btn-primary"'); ?>
</div>
<?php echo form_close(); ?>

<?php endforeach;?>

</div>


<div class="col-lg-7">

<table class="table">

<thead>
    <th>Quantity</th>
    <th>Item</th>
    <th>Price</th>
    <th>Subtotal</th>
    <th>Note</th>
     <th>Action</th>
</thead>

     {updated_cart}
    <tr>

       <td><input type="text" value="{qty}" size="2"> </td>
       <td> {name} </td>
       <td> {price} </td>
       <td> {subtotal} </td>
       <td>{availability}</td>
          <td><a class="delete"href="<?php echo base_url(). 'cart/remove_cart/{rowid}'?>"> <i class="btn btn-xs btn-danger fa fa-times"></i></td>
    </tr>
 
 
  {/updated_cart}
 <td colspan="3"><b>TOTAL</b></td>
   <td><?php echo $this->cart->total();?></td>
</table>
 <input type="hidden" id="validated_cart" name="validated_cart" value="{ready_checkout}">
   <button id="checkout_submit" type="submit" class="btn btn-xs btn-success pull-right">Proceed to Checkout</button>


</div>


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




<script type="text/javascript">


              $(function(){
                
                var qty = $('#validated_cart').val();                

                if (qty == 0 ) {
                  $('#checkout_submit').addClass('disabled');
                }


                $(document).on('keyup', '.qty', function(){

                  $('#checkout_submit').addClass('disabled');

                } );

              });
               
            </script>
