jQuery(document).ready(function(){
	var navOffset = jQuery("#wrap").offset().top;

jQuery(window).scroll(function(){
	var scrollpos=jQuery(window).scrollTop();
jQuery(".status").html(scrollpos);
if (scrollpos>=navOffset) {
	jQuery("#wrap").addClass('fixed');
}
else{
	jQuery("#wrap").removeClass('fixed');

}
});

	

});