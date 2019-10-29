$(function() {
	var $text = $(".faq-cont-item-question"),$contex = $(".faq-cont-item-answer");
	$text.on("click", function() {
	$text.not($(this).toggleClass("faq-active")).removeClass("faq-active");
	var i = $text.index(this);
	$contex.not($contex.eq(i).slideToggle()).slideUp()
})
});