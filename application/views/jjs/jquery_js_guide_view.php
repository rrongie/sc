<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">JQUERY & JS GUIDE</h2>
                 
                </div>
               
<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">GET ELEMENT BY ID</div>
  <div class="panel-body">
 
var one = document.getElementById("one").value; //get the value id <br>
<p></p>
var two = document.getElementById("two").value; <br>
<p></p>

var sum = Number(one) + Number(two); //convert to number <br>
<p></p>
document.getElementById('total').innerHTML = "HEllo" + sum; //with text <br>
<p></p>
document.getElementById('total_input').value='' + test ;  //value only <br>
   



  </div>
</div>



</div>


               
<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">ON CHANGE CALCULATE</div>
  <div class="panel-body">
 //  div id="generate" <br>
    div class="checker" <br>
 <br>
 ------------------------------------------------------------------------------------------
<p></p>

$(document).ready(function(){ <br>

    $('#generate input').change(function(){ <br>

      var $row = $(this).closest('.checker'); <br>

     
      var qty = parseInt($row.find('.qty').val()); <br>
      var price = parseInt($row.find('.price').val()); <br>

      
      var total = qty * price; <br>
      
      document.getElementById('tots').value='' + total ; <br>
      


    });

});



  </div>
</div>



</div>



                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->




