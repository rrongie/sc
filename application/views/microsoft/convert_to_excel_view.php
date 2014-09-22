<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Convert to Excel</h2>
                     <p>GUIDE: https://github.com/EllisLab/CodeIgniter/wiki/PHP-Excel-Class</p>
                </div>
                 
                 <div class="panel-body">
                    <?php echo form_open('microsoft/get_all_ordering_to_excel')?>
                    <input type="submit" value="Covert All ordering Table Files to excel" class="btn btn-danger">
                </form>
                 
                
                <div>&nbsp;</div>
                <div class="col-lg-3">
                    
                    <?php echo form_open('microsoft/convert_input_to_word')?>
                    <div class="form-group">
                        <label class="control-label" for="inputSmall">Name:</label>
                        <input class="form-control input" type="text"  name="name" required>
                    </div>

                     <div class="form-group">
                        <label class="control-label" for="inputSmall">Order:</label>
                        <input class="form-control input" type="text"  name="order" required>
                    </div>

                     <div class="form-group">
                        <label class="control-label" for="inputSmall">Qty:</label>
                        <input class="form-control input" type="text"  name="qty" required>
                    </div>

                     <div class="form-group">
                        <label class="control-label" for="inputSmall">Price:</label>
                        <input class="form-control input" type="text"  name="price" required>
                    </div>
                
                    <input type="submit" class="btn btn-success" value="sumbit">
                </form>

                

                </div>   



                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




