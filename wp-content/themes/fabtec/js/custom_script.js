jQuery(document).ready(function(){
		jQuery(".slider_img").on("click", function(){
			jQuery(".slider_nav img").removeClass("fade-in");
			var proj_banner = jQuery(this).find('img').attr("data-large");
			jQuery(this).parents(".project_slider").find(".slider_nav img").attr("src",proj_banner ).addClass("fade-in");
		})
})