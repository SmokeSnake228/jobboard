(function($) {


  $(window).load(function(){
    $('.page-loading').fadeOut();

    if ($("select#search_categories")[0]){
    jQuery('select#search_categories').select2('destroy');
    jQuery('select#search_categories').chosen();
  }
 });


 $(".open-menu").click(function() {
  $(".navbar-collapse").addClass("in");
});

    $(".close-menu").click(function() {
  $(".navbar-collapse").removeClass("in");
});

$(".open-menu").keypress(function(e) {
var key = e.which;
if (key == 13) // the enter key code
{
  $(".navbar-collapse").addClass("in");
 }
});

    $(".close-menu").keypress(function(e) {
var key = e.which;
if (key == 13) // the enter key code
{
  $(".navbar-collapse").removeClass("in");
}
});



$('#job-category').chosen().change( function(obj, result) {
  console.debug("changed: %o", arguments);
  
  console.log("selected: " + result.selected);
});
jQuery('#job-region').chosen();
jQuery("#company_tags").chosen({
  no_results_text:'',
}).on('chosen:no_results' , function(evt, params){

var error = $('.chosen-results .no-results');
var liveText = $('.chosen-results .no-results>span').text();
error.empty().append('<span id= "new-error">Not Found Add&nbsp;<a id="com-link">' + liveText  +'</a> As A New Company</span>' );
$('#com-link').on('click',function(){
$("#company_tags").append('<option class="custom" selected value="'+liveText+'">'+liveText+'</option>').trigger("chosen:updated");
jQuery('#company_website,#company_tagline,#company_video,#company_twitter,#company_logo').prop('disabled', false);    

});
});


    function responsiveIframe() {
        var videoSelectors = [
            'iframe[src*="player.vimeo.com"]',
            'iframe[src*="youtube.com"]',
            'iframe[src*="youtube-nocookie.com"]',
            'iframe[src*="kickstarter.com"][src*="video.html"]',
            'iframe[src*="screenr.com"]',
            'iframe[src*="blip.tv"]',
            'iframe[src*="dailymotion.com"]',
            'iframe[src*="viddler.com"]',
            'iframe[src*="qik.com"]',
            'iframe[src*="revision3.com"]',
            'iframe[src*="hulu.com"]',
            'iframe[src*="funnyordie.com"]',
            'iframe[src*="flickr.com"]',
            'embed[src*="v.wordpress.com"]',
            'iframe[src*="videopress.com"]',
            'embed[src*="videopress.com"]'
            // add more selectors here
        ];
        var allVideos = videoSelectors.join(',');
        jQuery(allVideos).wrap('<span class="media-holder" />');
    }

    // Responsive Iframes
    responsiveIframe();



})(jQuery);

if (jQuery(window).width() < 991){
  const  job_stack_focusableElements =
  'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
const job_stack_modal = document.querySelector('#navbar-collapse'); 

const job_stack_firstFocusableElement = job_stack_modal.querySelectorAll(job_stack_focusableElements)[0]; 
const job_stack_focusableContent = job_stack_modal.querySelectorAll(job_stack_focusableElements);
const job_stack_lastFocusableElement = job_stack_focusableContent[job_stack_focusableContent.length - 1];


document.addEventListener('keydown', function(e) {
let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

if (!isTabPressed) {
  return;
}

if (e.shiftKey) { // if shift key pressed for shift + tab combination
  if (document.activeElement === job_stack_firstFocusableElement) {
    job_stack_lastFocusableElement.focus(); // add focus for the last focusable element
    e.preventDefault();
  }
} else { // if tab key is pressed
  if (document.activeElement === job_stack_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
    job_stack_firstFocusableElement.focus(); // add focus for the first focusable element
    e.preventDefault();
  }
}
});

job_stack_firstFocusableElement.focus();
  }


  document.addEventListener('DOMContentLoaded', () => {
    const div = document.createElement('div')
    div.classList.add('line')

    console.log(div);
    document.querySelector('#gallery-1').append(div)
    document.querySelector('#gallery-2').append(div)
    document.querySelector('#gallery-3').append(div)
    document.querySelector('#gallery-4').append(div)
    document.querySelector('#gallery-5').append(div)
    document.querySelector('#gallery-6').append(div)
  })