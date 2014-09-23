<!-- Page Content -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Ajax Guide</h2>
                  
                </div>
               


<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">Ajax GET TYPE</div>
  <div class="panel-body">
    $(document).ready(function(){<br>
        <p></p>
         &nbsp;$.ajax({<br>
        &nbsp;&nbsp;type:'GET',<br>
        &nbsp;&nbsp;url:'<-?php echo base_url(). 'link/here'?>', //remove the  - symbol<br>
        &nbsp;&nbsp;success:function(data){ <br>
         &nbsp;&nbsp; $('#display-perfume-list').html(data);  //where to display <br>
        &nbsp;&nbsp;&nbsp;} <br>

        });<br>

});
  </div>
</div>


</div>



<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">Ajax POST FORM</div>
  <div class="panel-body">
   

$(document).on('click', '#submit', function(e){<br>
e.preventDefault();<br>

<p></p>
$.ajax({<br>
    method:'POST',<br>
    url: '<-?php echo base_url('link/here')?>',    //remove the  - symbol<br>
    data: $('#form_name').serialize() //get the id or class of form <br>
}).success(function(e){ <br>
    $('.modal-area').html(e);  //where to display <br>
}); <br>



});<br>



  </div>
</div>


</div>


<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">AJAX BY ID (DELETE)</div>
  <div class="panel-body">
   

$(document).on('click','.delete',function(e){ <br>
e.preventDefault(); <br>
<p></p>

&nbsp;var id = $(this).data('conid'); //data-conid// <br>
&nbsp;var $orders = $(this).closest('div'); //make a div where to remove <br>

&nbsp; if (confirm('Are you sure you want to delete this?')) { //notif <br>

&nbsp;&nbsp;&nbsp;$.ajax({ <br>
&nbsp;&nbsp;&nbsp;    type:'GET', <br>
&nbsp;&nbsp;&nbsp;    url:  "<-?php echo base_url().'link/here/"+id+"/'?>", //link remove the - <br>
&nbsp;&nbsp;&nbsp;    success: function(){ <br>
&nbsp;&nbsp;&nbsp;     $orders.fadeOut(300, function(){ //call the div to fadeout <br>
&nbsp;        }); <br>
&nbsp;    } <br>

}); <br>

} //end of notif <br>

});



  </div>
</div>


</div>

<div class="col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">AJAX BY ID (EDIT)</div>
  <div class="panel-body">
 
$(document).on('click','.class-name-here',function(){  <br>
<p></p>
var id = $(this).data('id');    //data-id="{id}" sample// <br>
<p></p>
&nbsp;&nbsp;&nbsp;$('.display').load('<---?php echo site_url('link/here')?>', {id: id}); //link and where to display <br>
&nbsp;&nbsp;&nbsp;$('#show-modal').modal('show'); //when id or class click show modal <br>
 }); <br>


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

