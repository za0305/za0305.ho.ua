
					// SLIDER
$(function(){ 

	$(".main_content_page").not(":first").hide();

	$(".main_nav_page").click(function() {
		$(".main_nav_page").removeClass("active").eq($(this).index()).addClass("active");
		$(".main_content_page").hide().eq($(this).index()).fadeIn();
	}).eq(0).addClass("active");

});

					// HEADER MOBILE MENU
$(function(){ 

	
    var check = true;

	$("#sandwich, .menu_item").click(function() {
		
		$("#sandwich").toggleClass("active");

		$(".header_mobile_menu_content").slideToggle(1000);

		if (check){
			$(".header_mobile_menu").css( 'backgroundColor', 'rgba(0,0,0,0.6)');
			check = false;
		}else{
			$(".header_mobile_menu").css( 'backgroundColor', 'transparent');
			check = true;
		}
	});

});

					// SECTION ARROW

$(function(){ 

	$(".reviews_end").mouseover(function() {
		$('.reviews_end').addClass('move')


		$(".reviews_end").mouseout(function(){
			$('.reviews_end').removeClass('move')
		});

	});


});



					// TABS

$(function(){ 

					// TAB COMPANY
	$(".tabs_company_content_item").not(":first").hide();

	$(".tabs_company_nav_item").click(function() {
		$(".tabs_company_nav_item").removeClass("active").eq($(this).index()).addClass("active");
		$(".tabs_company_content_item").hide().eq($(this).index()).fadeIn();
	}).eq(0).addClass("active");


					// TAB PRODUCT
	$(".tabs_product_nav:first").addClass("active");
    $(".tabs_product_content:not(:first)").hide();
 
    $(".tabs_product_nav ").click(function(){
 
        $(this).next(".tabs_product_content").slideToggle()
        .siblings(".tabs_product_content:visible").slideUp();
        $(this).toggleClass("active");
        $(this).siblings(".tabs_product_nav").removeClass("active");
     });



});





					// ABOUT US MODAL

$(function(){ 

	$(".about_us_img").click(function() {

		$(".about_us_img_modal").fadeIn();

	});

	$(".about_us_img_modal").click(function() {

		$(".about_us_img_modal").fadeOut();

	});


});



				// GET CONTENT ARTICLE



function getNews(idArtickle) {

	var contentNews = $('.news').html();   //get news content
	var param = idArtickle; 

	$.ajax({             //send request with article id
	 url: "/wp-admin/admin-ajax.php",
	 type: "POST",
	 data: "action=myaction&param=" + param , 
	 success: function(data, textStatus){
	 
			$('.news').html('<div class="news_single"><div class="news_item">'+ data +'</div></div><span class="news_back">\<< Go back</span>');

			$(".news_back ").on( "click", function() {
				$('.news').html( contentNews );
				
			});

		}

	});
}

