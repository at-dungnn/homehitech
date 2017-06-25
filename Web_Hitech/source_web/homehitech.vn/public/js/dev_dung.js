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
   		handleShowHideLight1();
   		$('.light1-amination').addClass('fadeInLeft');
   		$('.telecom-amination').addClass('hidden');
   		$('.camera-amination').addClass('hidden');
   });
   //Click show hide Telecomunication section
   $('.telecomunication').click(function(){
   		handleShowHideTelecomunication();
   		$('.telecom-amination').addClass('fadeInLeft');
      $('.light1-amination').addClass('hidden');
   		$('.light2-amination').addClass('hidden');
		  $('.camera-amination').addClass('hidden');
   });
   //Click show hide Telecomunication section
   $('.camera').click(function(){
   		handleShowHideCamera();
   		$('.camera-amination').addClass('fadeInLeft');
   		$('.telecom-amination').addClass('hidden');
      $('.light1-amination').addClass('hidden');
   		$('.light2-amination').addClass('hidden');
   });


//NEW FUNCTION FOR PRODUCT


   //handleShowHideLight1
   $('.light1').click(function(){
      handleShowHideLight1();
      $('.light2-amination').addClass('hidden');
      $('.light1-amination').addClass('fadeInLeft');
   });

   //handleShowHideLight2
   $('.light2').click(function(){
      handleShowHideLight2();
      $('.light1-amination').addClass('hidden');
      $('.light2-amination').addClass('fadeInLeft');
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
function handleShowHideLight1(){
	$('.light1-amination').removeClass('hidden');
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

/** 
  * handleShowHideLight2
  * examples
  * @author DungNN
  * @required 
*/
function handleShowHideLight2(){
  $('.light2-amination').removeClass('hidden');
}
