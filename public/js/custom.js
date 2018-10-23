/* show file value after file select */
$('.custom-file-input').on('change',function(){
  $(this).next('.form-control-file').addClass("selected").html($(this).val());
})

// space false handling
$(function() {
	$('#spacefalse').on('keypress', function(e) {
		if (e.which == 32) {
			return false;
		}
	});
});

// form step
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

// upload label event listener
var $attach = $('#attach-project-file'),
    $remove = $('#remove-project-file'),
    $name = $('#attached-project-file');

// initially hide the remove button
$remove.hide();

// do this when file input has changed
// i.e.: a file has been selected
$attach.on('change', function() {
  var val = $(this).val();
  if (val !== '') {
    // if value different than empty
    
    // show the file name as text
    // hide/text/fadeIn creates a nice effect when changing the text
    $name
      .hide()
      .text(val)
      .fadeIn();
    
    // show the remove button
    $remove.fadeIn();
  } else {
    // if value empty, means the file has been removed
    
    // show the default text
    $name
      .hide()
      .text('Click untuk memasukan gambar')
      .fadeIn();
    
    // hide remove button
    $remove.fadeOut();
  }
});

// remove selected file when clicking the remove button
// prevent click bubbling to the parent label and triggering file selection
$remove.on('click', function(e) {
  e.preventDefault();
  e.stopPropagation();

  $attach
    .val('')
    .change(); // trigger change event
});

/* SWITCH EVENT */
$('#checkAvailable').click(function() {
	if ($('#checkAvailable').is(':checked')) {
		$('#isAvailable').text('available');
	} else {
		$('#isAvailable').text('not available');
	}
});