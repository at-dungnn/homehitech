/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
	$(document).on('click','.data_product',function(){
        try {
        		var id = $(this).attr('data-id');
                search(id);
        } catch (e) {
            alert('icons-list li a:' + e.message);
        }
    });

});

/**
 * 
 *
 * @author      :   
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
function search(id) {
    try {
    	var html = '';
        //
        $.ajax({
            type        :   'POST',
            url         :   '/search-product',
            dataType    :   'json',
            data        :   {
                id      : id
            },
            success: function(res) {
                $.each(res.product,function(key, value ){
				     console.log(value['id']);
				     var giam_gia = value['giam_gia']* value['gia']/100;
				     giam_gia = value['gia'] - value['giam_gia'];
				     html = html.concat('<div class="col-sm-4 data_product">'
							+'<div class="product-image-wrapper">'
								+'<div class="single-products">'
										+'<div class="productinfo text-center">'
											+'<img src="upload/product/'+value['img_path']+'" alt="" />'
											+'<h2>Mã : '+value['ma_sanpham']+'</h2>'
											+'<p>Công suất : '+value['cong_suat']+'</p>'
											+'<p>Kích thước : '+value['kich_thuoc']+'</p>'
											+'<p>Quang thông : '+value['quang_thong']+'</p>'
											+'<p>Giá '+value['gia']+'đ</p>'
											+'<p>Giảm giá : '+giam_gia+'đ</p>'
											+'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>'
										+'</div>'
								+'</div>'
								+'<div class="choose">'
									+'<ul class="nav nav-pills nav-justified">'
										+'<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>'
									+'</ul>'
								+'</div>'
							+'</div>'
						+'</div>');
				     
				});
				$("#list_product").html("");
				$("#list_product").html(html);
            }
        });
        
    } catch (e) {
         alert('search' + e.message);
    }
}





















