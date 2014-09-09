<style type="text/css">

.edit_img{
	
}

</style>

{img}
<div class="drag_me">
<div class="col-lg-2">
<div class="well">


<img style="width:100px; height:150px;"src="<?php echo base_url() . 'assets/images/upload/{image}' ?>">



<div>&nbsp;</div>
<button title="EDIT"rel="tooltip" data-id="{id}"data-placement="bottom" class="edit btn btn-xs btn-primary "><i class="fa fa-edit"></i></button>
<button title="DELETE"rel="tooltip" data-id="{id}"data-placement="bottom" class="delete btn btn-xs btn-danger "><i class="fa fa-times"></i></button>
</div>
</div>
</div>

{/img}


<script type="text/javascript">

$(document).on('click','.delete',function(e){
e.preventDefault();
var $picture = $(this).closest('div');
var id = $(this).data('id');
//alert(id);
 $.ajax({

 	type:'GET',
 	url:"<?php echo base_url(). 'upload/remove_image/"+id+"/'?>",
 	success:function(e){
 		$picture.fadeOut(300, function(){
		});
 	}


 })


});

</script>
<script type="text/javascript">

(function($) {
    $.fn.drags = function(opt) {

        opt = $.extend({handle:"",cursor:"move"}, opt);

        if(opt.handle === "") {
            var $el = this;
        } else {
            var $el = this.find(opt.handle);
        }

        return $el.css('cursor', opt.cursor).on("mousedown", function(e) {
            if(opt.handle === "") {
                var $drag = $(this).addClass('draggable');
            } else {
                var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
            }
            var z_idx = $drag.css('z-index'),
                drg_h = $drag.outerHeight(),
                drg_w = $drag.outerWidth(),
                pos_y = $drag.offset().top + drg_h - e.pageY,
                pos_x = $drag.offset().left + drg_w - e.pageX;
            $drag.css('z-index', 1000).parents().on("mousemove", function(e) {
                $('.draggable').offset({
                    top:e.pageY + pos_y - drg_h,
                    left:e.pageX + pos_x - drg_w
                }).on("mouseup", function() {
                    $(this).removeClass('draggable').css('z-index', z_idx);
                });
            });
            e.preventDefault(); // disable selection
        }).on("mouseup", function() {
            if(opt.handle === "") {
                $(this).removeClass('draggable');
            } else {
                $(this).removeClass('active-handle').parent().removeClass('draggable');
            }
        });

    }
})(jQuery);


$('.drag_me').drags();

</script>