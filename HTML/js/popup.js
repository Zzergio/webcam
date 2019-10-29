$(document).ready(function(){
function hidePop(e) {
    e.preventDefault(); 
    $(".black-bg").hide('300');
    };
	$('.close-button').on('click', hidePop)
});

function showPop() {
    $(".black-bg").show('300');
    };