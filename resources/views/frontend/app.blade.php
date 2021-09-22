<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="../www.w3.org/1999/xhtml/index.html">

<!-- Mirrored from taiwannocgov.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2020 15:56:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{{ asset('frontend/aRzTemplate/aRzDef/aRzImages/favicon.png') }}" type="image/x-icon" />
<title>{{ config('settings.site_title') }}</title>
<link href="{{ asset('frontend/aRzTemplate/aRzDef/aRzCss/aRzStyle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/aRzTemplate/aRzDef/aRzCss/style.css')}}" rel="stylesheet" type="text/css" />
@yield('styles')
<script type="text/javascript" language="javascript" src="{{ asset('frontend/aRzTemplate/aRzDef/aRzJs/jquery-1.10.2.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/aRzTemplate/aRzDef/aRzJs/aRzJs.js') }}"></script>
<style type="text/css">
    #et_pt_portfolio_gallery { margin-left: -15px; }
    .et_pt_portfolio_item { margin-left: 27px; }
    .et_portfolio_small { margin-left: -3px !important; }
    .et_portfolio_small .et_pt_portfolio_item { margin-left: 22px !important; }
    .et_portfolio_large { margin-left: -4px !important; }
    .et_portfolio_large .et_pt_portfolio_item { margin-left: 14px !important; }
    /*#search-form
    {
        display: none;
    }*/
#aRz_1
{
    display: none;
}
</style>


</head>
<body id="home">

	@include('frontend.partials.header')

	@yield('content')

	@include('frontend.partials.footer')

<script type="text/javascript">
//<![CDATA[

jQuery.noConflict();

jQuery('.thumb_popup').css('bottom','106px')

jQuery('ul.superfish').superfish({ 
delay:       200,                            // one second delay on mouseout 
animation:   {'marginLeft':'0px',opacity:'show',height:'show'},  // fade-in and slide-down animation 
speed:       'fast',                          // faster animation speed 
autoArrows:  true,                           // disable generation of arrow mark-up 
onBeforeShow: function(){ this.css('marginLeft','20px'); },
dropShadows: false                            // disable drop shadows 
});

jQuery('ul.nav > li > a.sf-with-ul').parent('li').addClass('sf-ul');


/* search form */

var $searchform = jQuery('#header div#search-form');
var $searchinput = $searchform.find("input#searchinput");
var $searchvalue = $searchinput.val();

$searchform.css("right","25px");
//$searchform.css("visibility","hidden");
$searchform.animate({"right": "-1", "opacity": "toggle"}, "fast");

jQuery("#header a#search-icon").click(function(){
if ($searchform.filter(':hidden').length == 1)  
$searchform.animate({"right": "-50", "opacity": "toggle"}, "slow")
else
$searchform.animate({"right": "50", "opacity": "toggle"}, "slow");
return false;
});

$searchinput.focus(function(){
if (jQuery(this).val() == $searchvalue) jQuery(this).val("");
}).blur(function(){
if (jQuery(this).val() == "") jQuery(this).val($searchvalue);
});


/* footer widgets improvements */

var $footer_widget = jQuery("#footer .widget");

if (!($footer_widget.length == 0)) {
$footer_widget.each(function (index, domEle) {
// domEle == this
if ((index+1)%3 == 0) jQuery(domEle).addClass("last").after("<div class='clear'></div>");
});
};



/* featured slider */

var $featured_area = jQuery('#featured-slider'),
$feature_thumb = jQuery('#featured-thumbs img'),
$active_arrow = jQuery('div#active_item');
ordernum = 1,
pause_scroll = false,
$slider_control = jQuery('#featured-thumbs'), //div#featured-thumbs
$slider_control_tab = $feature_thumb.parent('a');

if (!($featured_area.length == 0)) {
$featured_area.cycle({
timeout: 0,
speed: 300,
cleartypeNoBg: true,
fx: 'cover'
});
};


$featured_area.mouseover(function(){
pause_scroll = true;
}).mouseout(function(){
pause_scroll = false;
});

function gonext(this_element){
$slider_control.find("img.active").removeClass('active');
this_element.find("img").addClass('active');

$active_arrow.animate({"left": this_element.find("img").position().left+55}, "slow");

ordernum = this_element.prevAll('a').length+1;
$featured_area.cycle(ordernum - 1);
};


$slider_control_tab.click(function() {
clearInterval(interval);
gonext(jQuery(this));
return false;
});

jQuery('a#prevlink, a#nextlink').click(function() {
clearInterval(interval);

if (jQuery(this).attr("id") === 'nextlink') {
    
auto_number = $slider_control.find("img.active").parent().prevAll('a').length+1;
if (auto_number === $slider_control_tab.length) auto_number = 0;

} else {
auto_number = $slider_control.find("img.active").parent().prevAll('a').length-1;
if (auto_number === -1) auto_number = $slider_control_tab.length-1;
};

gonext($slider_control_tab.eq(auto_number));
return false;
});

$feature_thumb.hover(function(){         
$next_div = jQuery(this).parent('a').next('div');

$next_div.css('bottom','106px')
$next_div.css({'left':jQuery(this).position().left-10});

jQuery(this).addClass('hover').fadeTo('fast',0.5);
$next_div.css('display','block').animate({"bottom": "96px", "opacity": "1"}, "fast");
},function(){
jQuery(this).removeClass('hover').fadeTo('fast',1);
$next_div.animate({"bottom": "106px", "opacity": "0"}, "fast");
});

var auto_number;
var interval;

$slider_control_tab.bind('autonext', function autonext(){
if (!pause_scroll) gonext(jQuery(this)); 
return false;
});

interval = setInterval(function () {
auto_number = $slider_control.find("img.active").parent().prevAll('a').length+1;
if (auto_number === $slider_control_tab.length) auto_number = 0;
$slider_control_tab.eq(auto_number).trigger('autonext');
}, 5000);


//]]>   
</script>
@stack('scripts')

    

</body>
