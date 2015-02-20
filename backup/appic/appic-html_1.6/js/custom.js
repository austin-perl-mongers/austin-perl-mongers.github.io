$(document).ready(function() {

//Flikr

$('#flickr').jflickrfeed({
	limit: 			10,
	qstrings: 		{id: '52617155@N08'},
	itemTemplate: 	'<li><a href="{{image_b}}" data-rel="colorbox"><img src="{{image_s}}" alt="{{title}}" /><span class="hover-effect"></span></a></li>'
	},function(data){$('#flickr a').colorbox({'data-rel':'colorbox'});}
);


//Tooltip
$('.custom-tooltip').tooltip();


//Mobile menu
$('#navigation').mobileMenu({
	triggerMenu:'#navigation-toggle',
	subMenuTrigger: ".sub-nav-toggle",
	animationSpeed: 500 
});

	
	var $block =$('<div/>',{
		'class':'top-scroll'
		})
	.append('<a href="#"/>')
	.hide()
	.appendTo('body')
	.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
		
//initialization

var $window = $(window);

	
	if ($window.scrollTop() > 35) {
			showElem();
			
		} else {
			hideElem();
		}


//handlers		

	
	$window.scroll(function () {		
		
			if ($(this).scrollTop() > 35) {
				showElem();
				
			} else {
				hideElem();
			}
		
	});
//functions
function hideElem(){
	
		$('.main-nav-wrap').removeClass('fixed-pos');
		$block.fadeOut();
	}
	
function showElem(){
	
		$('.main-nav-wrap').addClass('fixed-pos');
		$block.fadeIn();
	}

});