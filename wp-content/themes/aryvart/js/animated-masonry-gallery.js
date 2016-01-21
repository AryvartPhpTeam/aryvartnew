$(window).load(function () {

var size = 1;
var button = 1;
var button_class = "gallery-header-center-right-links-current";
var normal_size_class = "gallery-content-center-normal";
var full_size_class = "gallery-content-center-full";
var $container = $('#gallery-content-center');
    
$container.isotope({itemSelector : 'img'});


function check_button(){
	$('.gallery-header-center-right-links').removeClass(button_class);
	if(button==1){
		$("#filter-all").addClass(button_class);
		$("#gallery-header-center-left-title").html('All Galleries');
		}
	if(button==2){
		$("#filter-webdesigning").addClass(button_class);
		$("#gallery-header-center-left-title").html('Design Gallery');
		}
	if(button==3){
		$("#filter-branding").addClass(button_class);
		$("#gallery-header-center-left-title").html('Branding Gallery');
		}	
	if(button==4){
		$("#filter-development").addClass(button_class);
		$("#gallery-header-center-left-title").html('Development Gallery');
		}	
}
	
function check_size(){
	$("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
	if(size==0){
		$("#gallery-content-center").addClass(normal_size_class); 
		$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
		}
	if(size==1){
		$("#gallery-content-center").addClass(full_size_class); 
		$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
		}
	$container.isotope({itemSelector : 'img'});
}


	
$("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
$("#filter-webdesigning").click(function() {  $container.isotope({ filter: '.webdesigning' }); button = 2; check_button();  });
$("#filter-branding").click(function() {  $container.isotope({ filter: '.branding' }); button = 3; check_button();  });
$("#filter-development").click(function() {  $container.isotope({ filter: '.development' }); button = 4; check_button();  });
$("#gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });

$(".lgallery-header-center-right-links").click(function() { 
	
	$id = $(this).attr("id").split("-")[1];
	console.log($id);
	$ind = $(this).index() + 1;
	$container.isotope({ filter: '.taxonomy9' }); 
	$('.gallery-header-center-right-links').removeClass(button_class);
	$(this).addClass(button_class);
});

check_button();
check_size();
});