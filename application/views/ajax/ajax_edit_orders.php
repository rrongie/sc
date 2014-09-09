

{list}
<?php
                  $attributes = array('class' => 'form-horizontal');
                  echo form_open('ordering/validate_edit_order/{id}', $attributes);
            ?>
    <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="name">Name</label>
                          <div class="controls">
                            <input id="name" name="name" type="text" value="{name}"autofocus>
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="order">Order:</label>
                          <div class="controls">
                            <input id="order" name="order" type="text" value="{order}" required>
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="qty">Qty:</label>
                          <div class="controls">
                            <input id="qty" name="qty" type="number" value="{qty}" style="width: 90px;" required="">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="price">Price:</label>
                          <div class="controls">
                            <input id="price" name="price" type="number"  value="{price}"style="width:90px;"placeholder=""required="">
                            
                          </div>
                        </div>


                        <!-- Button -->
                        
                        <hr>	
                            <button id="submit" name="submit" class="btn btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        



{/list}