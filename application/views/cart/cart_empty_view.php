<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">CART</h2>
                    

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

<?php echo form_hidden('product_id', $p['id']); ?>
<p></p>
<?php echo form_submit('add', 'Add','class="btn btn-xs btn-primary"'); ?>
</div>
<?php echo form_close(); ?>

<?php endforeach;?>

</div>

<div class="col-lg-6">
   <div class="well">
   <h4>Cart is Empty</h4>
   <p>You have no items in your cart.</p>
   </div>
<div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>

<!-- /#wrapper -->




