/** 
  * Home-HiTech Web
  * ready - init - event
  * @author DungNN
  * @required 
*/
$(document).ready(function(){
	// Click for active li
   $('.format-li').click(function(){
		addClassActive();
        $(this).addClass('active');
	});
   // Click for active li-vt
   $('.format-li-vt').click(function(){
		addClassActiveVt();
        $(this).addClass('active');
	});
   //Click show hide light section
   $('.light').click(function(){
   		handleShowHideLight();
   		$('.light-amination').addClass('fadeInLeft');
   		$('.telecom-amination').addClass('hidden');
   		$('.camera-amination').addClass('hidden');
   });
   //Click show hide Telecomunication section
   $('.telecomunication').click(function(){
   		handleShowHideTelecomunication();
   		$('.telecom-amination').addClass('fadeInLeft');
   		$('.light-amination').addClass('hidden');
		$('.camera-amination').addClass('hidden');
   });
   //Click show hide Telecomunication section
   $('.camera').click(function(){
   		handleShowHideCamera();
   		$('.camera-amination').addClass('fadeInLeft');
   		$('.telecom-amination').addClass('hidden');
   		$('.light-amination').addClass('hidden');
   });
});


// START FUNCTION

/** 
  * addClassActive
  * examples
  * @author DungNN
  * @required 
*/
function addClassActive(){
	$('.format-ul>li').each(function(){
		$(this).removeClass('active');	    
	});
}
/** 
  * addClassActive
  * examples
  * @author DungNN
  * @required 
*/
function addClassActiveVt(){
	$('.format-ul-vt>li').each(function(){
		$(this).removeClass('active');	    
	});
}
/** 
  * handleShowHideLight
  * examples
  * @author DungNN
  * @required 
*/
function handleShowHideLight(){
	$('.light-amination').removeClass('hidden');
}
/** 
  * handleShowHideLight
  * examples
  * @author DungNN
  * @required 
*/
function handleShowHideTelecomunication(){
	$('.telecom-amination').removeClass('hidden');
}
/** 
  * handleShowHideLight
  * examples
  * @author DungNN
  * @required 
*/
function handleShowHideCamera(){
	$('.camera-amination').removeClass('hidden');
}