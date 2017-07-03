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
        //
        $.ajax({
            type        :   'POST',
            url         :   '/search-product',
            dataType    :   'json',
            data        :   {
                id      : id
            },
            success: function(res) {
                console.log(res);
            }
        });
        
    } catch (e) {
         alert('search' + e.message);
    }
}





















