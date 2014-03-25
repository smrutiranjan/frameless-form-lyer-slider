<?php
/*
Plugin Name: Frameless Form
Plugin URI: https://github.com/smrutiranjan/frameless-form-lyer-slider
Description: This is a custom widget allow to execute custom search form widget. you can <a href="https://github.com/smrutiranjan/frameless-form-lyer-slider/archive/master.zip">download </a>the latest file from <a href="https://github.com/smrutiranjan/frameless-form-lyer-slider/archive/master.zip">here</a> for upgrade the plugin.
Author: Smrutiranjan
Author URI: http://smrutiranjan.in
Version: 1.1
Text Domain: Frameless-form
*/

define('Frameless_form_TEXT_DOMAIN','Frameless_form');
define("PLUGIN_NAME","Frameless Form");
define("PLUGIN_TAGLINE","Customize your Form setting");

register_activation_hook(__FILE__,'frameless_form_install');

function Frameless_form_load_text_domain(){
	load_plugin_textdomain( Frameless_form_TEXT_DOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

function frameless_form_install()
{
$pagelayout1='
.custom_div_left{width: 45%; float: left; margin: 0px; padding: 0px; text-align: left; line-height: 25px;}
.custom_div_right{width: 45%; float: right; margin: 0px; padding: 0px; text-align: left; line-height: 25px;}
/* SelectBoxIt container */
.selectboxit-container {
  position: relative;
  display: block;
  vertical-align: top;
}

/* Styles that apply to all SelectBoxIt elements */
.selectboxit-container * {
  font: 14px Helvetica, Arial;
  /* Prevents text selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: -moz-none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  outline: none;
  white-space: nowrap;
}

/* Button */
.selectboxit-container .selectboxit {
  width: 100%; /* Width of the dropdown button */
  cursor: pointer;
  margin: 0;
  padding: 0;
  border-radius: 6px;
  overflow: hidden;
  display: block;
  position: relative;
}

/* Height and Vertical Alignment of Text */
.selectboxit-container span, .selectboxit-container .selectboxit-options a {
  height: 35px; /* Height of the drop down */
  line-height:35px; /* Vertically positions the drop down text */
  display: block;
}

/* Focus pseudo selector */
.selectboxit-container .selectboxit:focus {
  outline: 0;
}

/* Disabled Mouse Interaction */
.selectboxit.selectboxit-disabled, .selectboxit-options .selectboxit-disabled {
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  cursor: default;
}

/* Button Text */
.selectboxit-text {
  text-indent: 5px;
  overflow: hidden;
  text-overflow: ellipsis;
  float: left;
color:#111111;
font:bold 13px Arial,Helvetica;
}

.selectboxit .selectboxit-option-icon-container {
  margin-left: 5px;
}

/* Options List */
.selectboxit-container .selectboxit-options {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  min-width: 100%;  /* Minimum Width of the dropdown list box options */
  *width: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  overflow-x: hidden;
  overflow-y: auto;
  cursor: pointer;
  display: none;
  z-index: 9999999999999;
  border-radius: 6px;
  text-align: left;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

/* Individual options */
 .selectboxit-option .selectboxit-option-anchor{
  padding: 0 2px;
}

/* Individual Option Hover Action */
.selectboxit-option .selectboxit-option-anchor:hover {
  text-decoration: none;
}

/* Individual Option Optgroup Header */
.selectboxit-option, .selectboxit-optgroup-header {
  text-indent: 5px; /* Horizontal Positioning of the select box option text */
  margin: 0;
  list-style-type: none;
}

/* The first Drop Down option */
.selectboxit-option-first {
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}

/* The first Drop Down option optgroup */
.selectboxit-optgroup-header + .selectboxit-option-first {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}

/* The last Drop Down option */
.selectboxit-option-last {
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
}

/* Drop Down optgroup headers */
.selectboxit-optgroup-header {
  font-weight: bold;
}

/* Drop Down optgroup header hover psuedo class */
.selectboxit-optgroup-header:hover {
  cursor: default;
}

/* Drop Down down arrow container */
.selectboxit-arrow-container {
  /* Positions the down arrow */
  width: 30px;
  position: absolute;
  right: 0;
}

/* Drop Down down arrow */
.selectboxit .selectboxit-arrow-container .selectboxit-arrow {
  /* Horizontally centers the down arrow */
  margin: 0 auto;
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
}

/* Drop Down down arrow for jQueryUI and jQuery Mobile */
.selectboxit .selectboxit-arrow-container .selectboxit-arrow.ui-icon {
  top: 30%;
}

/* Drop Down individual option icon positioning */
.selectboxit-option-icon-container {
  float: left;
}

.selectboxit-container .selectboxit-option-icon {
  margin: 0;
  padding: 0;
  vertical-align: middle;
}

/* Drop Down individual option icon positioning */
.selectboxit-option-icon-url {
  width: 18px;
  background-size: 18px 18px;
  background-repeat: no-repeat;
  height: 100%;
  background-position: center;
  float: left;
}

.selectboxit-rendering {
  display: inline-block !important;
  *display: inline !important;
  zoom: 1 !important;
  visibility: visible !important;
  position: absolute !important;
  top: -9999px !important;
  left: -9999px !important;
}

/* jQueryUI and jQuery Mobile compatability fix - Feel free to remove this style if you are not using jQuery Mobile */
.jqueryui .ui-icon {
  background-color: inherit;
}

/* Another jQueryUI and jQuery Mobile compatability fix - Feel free to remove this style if you are not using jQuery Mobile */
.jqueryui .ui-icon-triangle-1-s {
  background-position: -64px -16px;
}

/*
  Default Theme
  -------------
  Note: Feel free to remove all of the CSS underneath this line if you are not using the default theme
*/
.selectboxit-btn {
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #b3b3b3;
}

.selectboxit-btn.selectboxit-enabled:hover,
.selectboxit-btn.selectboxit-enabled:focus,
.selectboxit-btn.selectboxit-enabled:active {
  color: #333333;
  background:none;
}

.selectboxit-btn.selectboxit-enabled:hover,
.selectboxit-btn.selectboxit-enabled:focus {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
}

.selectboxit-default-arrow {
  width: 0;
  height: 0;
  border-top: 4px solid #000000;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.selectboxit-list {
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.selectboxit-list .selectboxit-option-anchor {
  color: #333333;
}

.selectboxit-list > .selectboxit-focus > .selectboxit-option-anchor {
  color: #ffffff;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-repeat: repeat-x;
}

.selectboxit-list > .selectboxit-disabled > .selectboxit-option-anchor {
  color: #999999;
}
.frameless_form_div h1{  
    display: block;
    font-size: 17px;
    font-weight: 700;
    line-height: 23px;
    margin: 0;
    padding: 20px 0 0;
    text-align: left;
}	
.frameless_form_div .col1{width:49%;float:left;}
.frameless_form_div.col2{width:49%;float:left;margin-left:2%;}
.frameless_form_div .clear5{clear:both;height:1px;}
.frameless_form_div h1{
	color:#59595a;
	text-transform:capitalize;
	font-weight:bold;
	border-bottom:2px solid #b4b4b5;
	padding:0;
	margin:0;
}
.frameless_form_div{
	font-size:13px;
	padding:5px;
	border-radius:8px;
	border:2px solid #026cd6;
	background-color:#026cd6;
}
#pagetxtStartDate,#pagetxtEndDate{
	background:none;
	width:86%;
	padding:0px;
	border:none;
	color:#111111;
	font:bold 13px Arial,Helvetica;
	text-indent:10px;
}
.ui-input-text input, .ui-input-search input{
min-height:2.6em;
}
.ui-select .ui-btn > span:not(.ui-li-count) {
text-align:left;
}
.frameless_form_div label{
color:#fff;
}
.ui-datepicker .ui-datepicker-header {
background:none repeat scroll 0 0 #026CD6;
color:#fff;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
 background:none repeat scroll 0 0 #026CD6;
    color: #FFFFFF;
}
.ui-icon-arrow-d{
background:url('.plugins_url('down_arrow.png', __FILE__).') no-repeat;
}
.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
color:#111;
background:none repeat scroll 0 0 #026CD6;
border:1px solid #026CD6;
}
.ui-datepicker .ui-datepicker-next span {
background:url('.plugins_url('next.png', __FILE__).') no-repeat;
}
.ui-datepicker .ui-datepicker-prev span{
background:url('.plugins_url('prev.png', __FILE__).') no-repeat;
}
.ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
color:#111;
background:none;border:none;
}
.ui-state-hover, .ui-widget-content .ui-state-hover{
color:#111;
}
.frameless_form_div ul li{
	list-style-type:none;	
	padding:0;
	border:none;
	margin:0;
}
.frameless_form_div img{
vertical-align:middle;
}';
	$pagelayout2='/* Dropdown control */
	.selectBox-dropdown {
    min-width: 150px;
    position: relative;
    border: solid 1px #BBB;
    line-height: 1.5;
    text-decoration: none;
    text-align: left;
    color: #000;
    outline: none;
    vertical-align: middle;
    background: #F2F2F2;
    background: -moz-linear-gradient(top, #F8F8F8 1%, #E1E1E1 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #F8F8F8), color-stop(100%, #E1E1E1));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#F8F8F8", endColorstr="#E1E1E1", GradientType=0);
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .75);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .75);
    box-shadow: 0 1px 0 rgba(255, 255, 255, .75);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    display: inline-block;
    cursor: default;
}

.selectBox-dropdown:focus,
.selectBox-dropdown:focus .selectBox-arrow {
    border-color: #666;
}

.selectBox-dropdown.selectBox-menuShowing-bottom {
    -moz-border-radius-bottomleft: 0;
    -moz-border-radius-bottomright: 0;
    -webkit-border-bottom-left-radius: 0;
    -webkit-border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.selectBox-dropdown.selectBox-menuShowing-top {
    -moz-border-radius-topleft: 0;
    -moz-border-radius-topright: 0;
    -webkit-border-top-left-radius: 0;
    -webkit-border-top-right-radius: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.selectBox-dropdown .selectBox-label {
    padding: 2px 8px;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
}

.selectBox-dropdown .selectBox-arrow {
    position: absolute;
    top: 0;
    right: 0;
    width: 23px;
    height: 100%;
    background: url('.plugins_url('jquery.selectBox-arrow.gif', __FILE__).') 50% center no-repeat;
    border-left: solid 1px #BBB;
}

/* Dropdown menu */
.selectBox-dropdown-menu {
    position: absolute;
    z-index: 99999;
    max-height: 200px;
    min-height: 1em;
    border: solid 1px #BBB; /* should be the same border width as .selectBox-dropdown */
    background: #FFF;
    -moz-box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

/* Inline control */
.selectBox-inline {
    min-width: 150px;
    outline: none;
    border: solid 1px #BBB;
    background: #FFF;
    display: inline-block;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    overflow: auto;
}

.selectBox-inline:focus {
    border-color: #666;
}

/* Options */
.selectBox-options,
.selectBox-options LI,
.selectBox-options LI A {
    list-style: none;
    display: block;
    cursor: default;
    padding: 0;
    margin: 0;
}

.selectBox-options.selectBox-options-top{
    border-bottom:none;
	margin-top:1px;
	-moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.selectBox-options.selectBox-options-bottom{
	border-top:none;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -webkit-border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.selectBox-options LI A {
    line-height: 1.5;
    padding: 0 .5em;
    white-space: nowrap;
    overflow: hidden;
    background: 6px center no-repeat;
}

.selectBox-options LI.selectBox-hover A {
    background-color: #EEE;
}

.selectBox-options LI.selectBox-disabled A {
    color: #888;
    background-color: transparent;
}

.selectBox-options LI.selectBox-selected A {
    background-color: #C8DEF4;
}

.selectBox-options .selectBox-optgroup {
    color: #666;
    background: #EEE;
    font-weight: bold;
    line-height: 1.5;
    padding: 0 .3em;
    white-space: nowrap;
}

/* Disabled state */
.selectBox.selectBox-disabled {
    color: #888 !important;
}

.selectBox-dropdown.selectBox-disabled .selectBox-arrow {
    opacity: .5;
    filter: alpha(opacity=50);
    border-color: #666;
}

.selectBox-inline.selectBox-disabled {
    color: #888 !important;
}

.selectBox-inline.selectBox-disabled .selectBox-options A {
    background-color: transparent !important;
}
h1{  
    display: block;
    font-size: 17px;
    font-weight: 700;
    line-height: 23px;
    margin: 0;
    padding: 20px 0 0;
    text-align: left;
}			
.frameless_form_div{
    font-size:13px;
}

.clear5{clear:both;height:5px;}
h1{
	color:#fff;
	text-transform:capitalize;
	font-weight:bold;
	border-bottom:2px solid #fff;
	padding:0;
	margin:0;
}
.sel{
	width:100%;
}
label{
	color:#fff;
}
.frameless_form_div{
	padding:5px;
	border-radius:8px;
	border:2px solid #000;
	background-color:#ea6420;
}
#pagetxtStartDate,#pagetxtEndDate{
	float:right;
}
.frameless_form_div img{
vertical-align:middle;
}';
	$pagelayout3='/*======================================================================
	Selectric
======================================================================*/
.selectricWrapper { position: relative; margin: 10px 0; cursor: pointer; }
.selectricDisabled { filter: alpha(opacity=50); opacity: 0.5; cursor: default; -webkit-touch-callout: none; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
.selectricOpen { z-index: 9999; }
.selectricHideSelect { position: relative; overflow: hidden; }
.selectricHideSelect select { position: absolute; left: -100%; }
.selectric { background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(to bottom, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#ffffffff\', endColorstr=\'#ffe6e6e6\', GradientType=0); border-color: #e6e6e6 #e6e6e6 #bfbfbf; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); *background-color: #e6e6e6; filter: progid:DXImageTransform.Microsoft.gradient(enabled = false); border: 1px solid #cccccc; *border: 0; border-bottom-color: #b3b3b3; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; position: relative; }
.selectricOpen .selectric { border-color: #CCC; background: #F0F0F0; z-index: 9999; }
.selectric .label { display: block; white-space: nowrap; overflow: hidden; margin: 0 30px 0 0; padding: 6px; /*font-size: 12px; line-height: 1.7; color: #444; */}
.selectric .button { position: absolute; right: 0; top: 0; height: 30px; width: 30px; color: #1966a5; text-align: center; font: normal 18px/30px sans-serif; }
.selectricHover .selectric { border-color: #CCC; }
.selectricHover .selectric .button { color: #888; }
.selectricTempShow { position: absolute !important; visibility: hidden !important; display: block !important; }

/* Items box */
.selectricItems ul,
.selectricItems li { list-style: none; padding: 0; margin: 0; min-height: 20px; line-height: 20px; font-size: 12px; }
.selectricItems { display: none; position: absolute; overflow: auto; top: 100%; left: 0; background: #F9F9F9; border: 1px solid #CCC; z-index: 9998; box-shadow: 0 0 10px -6px; }
.selectricOpen .selectricItems { display: block; }
.selectricItems li { padding: 5px; cursor: pointer; display: block; border-bottom: 1px solid #EEE; color: #666; border-top: 1px solid #FFF; }
.selectricItems li.selected { background: #EFEFEF; color: #444; border-top-color: #E0E0E0; }
.selectricItems li:hover { background: #F0F0F0; color: #444; }
h1{  
    display: block;
    font-size: 17px;   
    margin: 0;
    padding: 5px 0 0;
    text-align: left;
    color:#fff;
    text-transform:capitalize;
   font-weight:bold;
   border-bottom:2px solid #fff;	
}			
.frameless_form_div{
    font-size:13px;
}
.col1{width:49%;float:left;}
.col2{width:49%;float:left;margin-left:2%;}
.clear5{clear:both;height:5px;}
.selectric .label{color:#333;text-align:left;padding:10px 6px;margin:0;font-weight:normal;font-size:1em;}
label{
	color:#fff;
	font-family: sans-serif;
    font-size: 1em;
    line-height: 1.3;
}
.frameless_form_div{
	padding:5px;
	border-radius:8px;
	border:2px solid #1966a5;
	background-color:#1966a5;
	color:#fff;
}
#pagetxtStartDate,#pagetxtEndDate{
	background:none;
	width:81%;
       border:none;
       float:left;
}
.frameless_form_div img{
vertical-align:middle;
}';
	
	delete_option( 'pageform1_css');
	add_option( 'pageform1_css',$pagelayout1, '', 'yes' ); 
	
	delete_option( 'pageform2_css');
	add_option( 'pageform2_css',$pagelayout2, '', 'yes' ); 
	
	delete_option( 'pageform3_css');
	add_option( 'pageform3_css',$pagelayout3, '', 'yes' ); 
	
	delete_option('pageform1_wg_bg_color');
	add_option( 'pageform1_wg_bg_color','#026CD6', '', 'yes' ); 
	
	delete_option('pageform2_wg_bg_color');
	add_option( 'pageform2_wg_bg_color','#ea6420', '', 'yes' ); 
	
	delete_option('pageform3_wg_bg_color');
	add_option( 'pageform3_wg_bg_color','#1966a5', '', 'yes' ); 
	
	delete_option('pageform1_header_img_en');
	add_option('pageform1_header_img_en','headlogo.png', '', 'yes' );
	
	delete_option('pageform2_header_img_en');
	add_option('pageform2_header_img_en','headlogo.png', '', 'yes' );
	
	delete_option('pageform3_header_img_en');
	add_option('pageform3_wg_bg_img','headlogo.png', '', 'yes' );
	
	
	delete_option('pageform1_wg_bg_img');
	add_option( 'pageform1_wg_bg_img','026081-572-TA.jpg', '', 'yes' ); 
	
	delete_option('pageform2_wg_bg_img');
	add_option( 'pageform2_wg_bg_img','026081-572-TA.jpg', '', 'yes' ); 
	
	delete_option('pageform3_wg_bg_img');
	add_option( 'pageform3_wg_bg_img','026081-572-TA.jpg', '', 'yes' ); 
}
add_action('plugins_loaded','frameless_form_load_text_domain');
add_action( 'init', 'frameless_front_js' );

if ( is_admin() ){ // admin actions
	add_action('admin_menu', 'frameless_form_setting');	
	add_action( 'admin_init', 'frameless_form_setting_admin_stylesheet' );  
}
function frameless_front_js() {
	 if (wp_script_is('rollover1.js','enqueued')) {
       return;
     } else {
       wp_register_script( 'rollover1-js', plugins_url('rollover1.js', __FILE__));
		wp_enqueue_script( 'rollover1-js' );
     }
}
function frameless_form_setting_admin_stylesheet() {
	wp_register_style( 'frameless_form_setting-style', plugins_url('frameless_form_setting-admin.css', __FILE__) );
	wp_enqueue_style( 'frameless_form_setting-style' );
}
function frameless_form_setting() {
	add_menu_page( 'Frameless Form', 'Frameless Form', 'manage_options', 'set_form_layout1', 'frameless_form_setting_urls'); 		
	add_submenu_page('set_form_layout1', __( 'Layout2', 'frameless_form'), __( 'Layout2', 'frameless_form' ), 'manage_options', 'set_form_layout2', 'set_form_layout2');
	add_submenu_page('set_form_layout1', __( 'Layout3', 'frameless_form'), __( 'Layout3', 'frameless_form' ), 'manage_options', 'set_form_layout3', 'set_form_layout3');
	add_submenu_page('set_form_layout1', __( 'Language', 'frameless_form'), __( 'Language', 'frameless_form' ), 'manage_options', 'set_form_lang', 'set_form_lang');
}
function frameless_form_setting_urls() {
	$msg='';
	if(isset($_POST['save'])){	
		$allowedExts = array("gif", "jpeg", "jpg", "png");		
		
		$filenamearr=array('pageform1_wg_bg_img','pageform1_header_img_en','pageform1_header_img_ge','pageform1_header_img_fr','pageform1_header_img_du');
		foreach($filenamearr as $filename)
		{
			$temp = explode(".", $_FILES[$filename]["name"]);
			$extension = end($temp);
			if(($_FILES[$filename]["size"] < 200000) && in_array($extension, $allowedExts))
			{
				if ($_FILES[$filename]["error"] > 0)
				{
					$msg="Error while uploading file";
				}
				else
				{
					 move_uploaded_file($_FILES[$filename]["tmp_name"],plugin_dir_path( __FILE__ )."/upload/" . $_FILES[$filename]["name"]);
					 delete_option( $filename);
					 add_option( $filename,$_FILES[$filename]["name"], '', 'yes' );
				}
			}
		}		
		
		if(isset($_POST['pageform1_css']))
		{
			delete_option( 'pageform1_css');
			add_option( 'pageform1_css',$_POST["pageform1_css"], '', 'yes' ); 
		}
		if(isset($_POST["pageform1_wg_bg_color"]))
		{
			delete_option( 'pageform1_wg_bg_color');
			add_option( 'pageform1_wg_bg_color',$_POST["pageform1_wg_bg_color"], '', 'yes' ); 
		}
		$msg="Setting has been saved successfully.";
	}
	?>
    <div class="pea_admin_wrap">
        <div class="pea_admin_top">
            <h1><?php echo PLUGINNAME ?> <small> - <?php echo PLUGINTAGLINE ?></small> - Layout1</h1>
        </div>        
 		<?php if($msg!=""){ echo '<div class="msg">'.$msg.'</div>';}?>
        <div class="pea_admin_main_wrap">
            <div class="pea_admin_main_left">
            <form method="post" action="" name="form1" enctype="multipart/form-data">
            	<p>Upload header image for english&nbsp;&nbsp;&nbsp;<input type="file" name="pageform1_header_img_en"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform1_header_img_en') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for german&nbsp;&nbsp;&nbsp;<input type="file" name="pageform1_header_img_ge"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform1_header_img_ge') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for france&nbsp;&nbsp;&nbsp;<input type="file" name="pageform1_header_img_fr"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform1_header_img_fr') , __FILE__ );?>" target="_blank">Preview</a></p> 
                
                 <p>Upload header image for netherland&nbsp;&nbsp;&nbsp;<input type="file" name="pageform1_header_img_du"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform1_header_img_du') , __FILE__ );?>" target="_blank">Preview</a></p>    
                    
                 <p>Set Widget Background Color&nbsp;&nbsp;&nbsp;<input type="text" name="pageform1_wg_bg_color" value="<?php echo get_option('pageform1_wg_bg_color');?>"/></p>
                  <p>Set Widget Background Image&nbsp;&nbsp;&nbsp;<input type="file" name="pageform1_wg_bg_img" />&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform1_wg_bg_img') , __FILE__ );?>" target="_blank">Preview</a></p>                   
                 <p>Stylesheet&nbsp;&nbsp;(<strong>Shortcode:</strong>&nbsp;[travelwheels_form1 lang='en']&nbsp;[travelwheels_form1 lang='ge']&nbsp;[travelwheels_form1 lang='fr']&nbsp;[travelwheels_form1 lang='du'])</p>
                <p><textarea name="pageform1_css" class="regular-text csstxt"><?php echo stripslashes(get_option('pageform1_css'));?></textarea></p>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Setings') ?>" name="save"/>
                </p>
			</form>            
            </div>
		</div>            
    </div>
    <?php
}
function set_form_layout2() {
	$msg='';
	if(isset($_POST['save'])){		
		$allowedExts = array("gif", "jpeg", "jpg", "png");		
		
		$filenamearr=array('pageform2_wg_bg_img','pageform2_header_img_en','pageform2_header_img_ge','pageform2_header_img_fr','pageform2_header_img_du');
		foreach($filenamearr as $filename)
		{
			$temp = explode(".", $_FILES[$filename]["name"]);
			$extension = end($temp);
			if(($_FILES[$filename]["size"] < 200000) && in_array($extension, $allowedExts))
			{
				if ($_FILES[$filename]["error"] > 0)
				{
					$msg="Error while uploading file";
				}
				else
				{
					 move_uploaded_file($_FILES[$filename]["tmp_name"],plugin_dir_path( __FILE__ )."/upload/" . $_FILES[$filename]["name"]);
					 delete_option( $filename);
					 add_option( $filename,$_FILES[$filename]["name"], '', 'yes' );
				}
			}
		}		
		if(isset($_POST['pageform2_css']))
		{
			delete_option( 'pageform2_css');
			add_option( 'pageform2_css',$_POST["pageform2_css"], '', 'yes' ); 
		}
		if(isset($_POST["pageform2_wg_bg_color"]))
		{
			delete_option( 'pageform2_wg_bg_color');
			add_option( 'pageform2_wg_bg_color',$_POST["pageform2_wg_bg_color"], '', 'yes' ); 
		}
		$msg="Setting has been saved successfully.";
	}
	?>
    <div class="pea_admin_wrap">
        <div class="pea_admin_top">
            <h1><?php echo PLUGINNAME ?> <small> - <?php echo PLUGINTAGLINE ?></small> - Layout2</h1>
        </div>
 		<?php if($msg!=""){ echo '<div class="msg">'.$msg.'</div>';}?>

        <div class="pea_admin_main_wrap">
            <div class="pea_admin_main_left">
             <form method="post" action="" name="form1" enctype="multipart/form-data">
            	<p>Upload header image for english&nbsp;&nbsp;&nbsp;<input type="file" name="pageform2_header_img_en"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform2_header_img_en') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for german&nbsp;&nbsp;&nbsp;<input type="file" name="pageform2_header_img_ge"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform2_header_img_ge') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for france&nbsp;&nbsp;&nbsp;<input type="file" name="pageform2_header_img_fr"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform2_header_img_fr') , __FILE__ );?>" target="_blank">Preview</a></p> 
                
                 <p>Upload header image for netherland&nbsp;&nbsp;&nbsp;<input type="file" name="pageform2_header_img_du"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform2_header_img_du') , __FILE__ );?>" target="_blank">Preview</a></p> 
                 
                   <p>Set Widget Background Color&nbsp;&nbsp;&nbsp;<input type="text" name="pageform2_wg_bg_color" value="<?php echo get_option('pageform2_wg_bg_color');?>"/></p>
                  <p>Set Widget Background Image&nbsp;&nbsp;&nbsp;<input type="file" name="pageform2_wg_bg_img" />&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform2_wg_bg_img') , __FILE__ );?>" target="_blank">Preview</a></p> 
                         
                <p>Stylesheet&nbsp;&nbsp;(<strong>Shortcode:</strong>&nbsp;[travelwheels_form2 lang='en']&nbsp;[travelwheels_form2 lang='ge']&nbsp;[travelwheels_form2 lang='fr']&nbsp;[travelwheels_form2 lang='du'])</p>
                <p><textarea name="pageform2_css" class="regular-text csstxt"><?php echo stripslashes(get_option('pageform2_css'));?></textarea></p>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Setings') ?>" name="save"/>
                </p>
			</form>            
            </div>
		</div>            
    </div>
    <?php
}
function set_form_layout3() {
	$msg='';
	if(isset($_POST['save'])){		
		$allowedExts = array("gif", "jpeg", "jpg", "png");		
		
		$filenamearr=array('pageform3_wg_bg_img','pageform3_header_img_en','pageform3_header_img_ge','pageform3_header_img_fr','pageform3_header_img_du');
		foreach($filenamearr as $filename)
		{
			$temp = explode(".", $_FILES[$filename]["name"]);
			$extension = end($temp);
			if(($_FILES[$filename]["size"] < 200000) && in_array($extension, $allowedExts))
			{
				if ($_FILES[$filename]["error"] > 0)
				{
					$msg="Error while uploading file";
				}
				else
				{
					 move_uploaded_file($_FILES[$filename]["tmp_name"],plugin_dir_path( __FILE__ )."/upload/" . $_FILES[$filename]["name"]);
					 delete_option( $filename);
					 add_option( $filename,$_FILES[$filename]["name"], '', 'yes' );
				}
			}
		}		
		if(isset($_POST['pageform3_css']))
		{
			delete_option( 'pageform3_css');
			add_option( 'pageform3_css',$_POST["pageform3_css"], '', 'yes' ); 
		}
		if(isset($_POST["pageform3_wg_bg_color"]))
		{
			delete_option( 'pageform3_wg_bg_color');
			add_option( 'pageform3_wg_bg_color',$_POST["pageform3_wg_bg_color"], '', 'yes' ); 
		}
		$msg="Setting has been saved successfully.";
	}
	?>
    <div class="pea_admin_wrap">
        <div class="pea_admin_top">
            <h1><?php echo PLUGINNAME ?> <small> - <?php echo PLUGINTAGLINE ?></small> - Layout3 </h1>
        </div>
 		<?php if($msg!=""){ echo '<div class="msg">'.$msg.'</div>';}?>

        <div class="pea_admin_main_wrap">
            <div class="pea_admin_main_left">
             <form method="post" action="" name="form3" enctype="multipart/form-data">
            	<p>Upload header image for english&nbsp;&nbsp;&nbsp;<input type="file" name="pageform3_header_img_en"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform3_header_img_en') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for german&nbsp;&nbsp;&nbsp;<input type="file" name="pageform3_header_img_ge"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform3_header_img_ge') , __FILE__ );?>" target="_blank">Preview</a></p>    
                
                <p>Upload header image for france&nbsp;&nbsp;&nbsp;<input type="file" name="pageform3_header_img_fr"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform3_header_img_fr') , __FILE__ );?>" target="_blank">Preview</a></p> 
                
                 <p>Upload header image for netherland&nbsp;&nbsp;&nbsp;<input type="file" name="pageform3_header_img_du"/>&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform3_header_img_du') , __FILE__ );?>" target="_blank">Preview</a></p> 
                 
                 <p>Set Widget Background Color&nbsp;&nbsp;&nbsp;<input type="text" name="pageform3_wg_bg_color" value="<?php echo get_option('pageform3_wg_bg_color');?>"/></p>
                  <p>Set Widget Background Image&nbsp;&nbsp;&nbsp;<input type="file" name="pageform3_wg_bg_img" />&nbsp;<a href="<?php echo plugins_url('/upload/'.get_option( 'pageform3_wg_bg_img') , __FILE__ );?>" target="_blank">Preview</a></p> 
                        
                 <p>Stylesheet&nbsp;&nbsp;(<strong>Shortcode:</strong>&nbsp;[travelwheels_form3 lang='en']&nbsp;[travelwheels_form3 lang='ge']&nbsp;[travelwheels_form3 lang='fr']&nbsp;[travelwheels_form3 lang='du'])</p>
                <p><textarea name="pageform3_css" class="regular-text csstxt"><?php echo stripslashes(get_option('pageform3_css'));?></textarea></p>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Setings') ?>" name="save"/>
                </p>
			</form>            
            </div>
		</div>            
    </div>
    <?php
}

function set_form_lang()
{
	$msg='';
	if(isset($_POST['save'])){			
		
		$postarr=array('pickuplocation_form_en','pickupdate_form_en','dropofflocation_form_en','dropoffdate_form_en','pickuplocation_form_da','pickupdate_form_da','dropofflocation_form_da','dropoffdate_form_da','pickuplocation_form_fr','pickupdate_form_fr','dropofflocation_form_fr','dropoffdate_form_fr','pickuplocation_form_du','pickupdate_form_du','dropofflocation_form_du','dropoffdate_form_du');
		foreach($postarr as $value)
		{
			if($_POST[$value]!="")
			{
				delete_option($value);
				add_option( $value,$_POST[$value], '', 'yes' );
				//echo $value.'=>'.$_POST[$value]."<br/>";
			}			
		}
		$msg="Setting has been saved successfully.";
	}
	?>
    <div class="pea_admin_wrap">
        <div class="pea_admin_top">
            <h1><?php echo PLUGINNAME ?> <small> - set language</small></h1>
        </div>
 		<?php if($msg!=""){ echo '<div class="msg">'.$msg.'</div>';}?>

        <div class="pea_admin_main_wrap">
            <div class="pea_admin_main_left">
             <form method="post" action="" name="setlangform">
             <table cellpadding="2" cellspacing="2" border="0" width="100%">
             <tr>
             	<td align="left"><table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td colspan="2" align="left"><h2>English</h2></td>
  </tr>
  <tr>
    <td>Pickup Location</td>
    <td>
    <input type="text"  name="pickuplocation_form_en" value="<?php echo get_option("pickuplocation_form_en");?>" class="regular-text"/>
    </td>
  </tr>
  <tr>
    <td>Pickup Date</td>
    <td><input type="text"  name="pickupdate_form_en" value="<?php echo get_option("pickupdate_form_en");?>" class="regular-text"/></td>
  </tr>
   <tr>
    <td>Dropoff Location</td>
    <td><input type="text"  name="dropofflocation_form_en" value="<?php echo get_option("dropofflocation_form_en");?>" class="regular-text"/></td>
  </tr>
  <tr>
    <td>Dropoff Date</td>
    <td><input type="text"  name="dropoffdate_form_en" value="<?php echo get_option("dropoffdate_form_en");?>" class="regular-text"/></td>
  </tr>
</table></td>
                <td align="right"><table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td colspan="2" align="left"><h2>German</h2></td>
  </tr>
  <tr>
    <td>Pickup Location</td>
    <td>
    <input type="text"  name="pickuplocation_form_da" value="<?php echo get_option("pickuplocation_form_da");?>" class="regular-text"/>
    </td>
  </tr>
  <tr>
    <td>Pickup Date</td>
    <td><input type="text"  name="pickupdate_form_da" value="<?php echo get_option("pickupdate_form_da");?>" class="regular-text"/></td>
  </tr>
   <tr>
    <td>Dropoff Location</td>
    <td><input type="text"  name="dropofflocation_form_da" value="<?php echo get_option("dropofflocation_form_da");?>" class="regular-text"/></td>
  </tr>
  <tr>
    <td>Dropoff Date</td>
    <td><input type="text"  name="dropoffdate_form_da" value="<?php echo get_option("dropoffdate_form_da");?>" class="regular-text"/></td>
  </tr>
</table></td>
             </tr>
			<tr>
            	<td align="left"><table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td colspan="2" align="left"><h2>French</h2></td>
  </tr>
  <tr>
    <td>Pickup Location</td>
    <td>
    <input type="text"  name="pickuplocation_form_fr" value="<?php echo get_option("pickuplocation_form_fr");?>" class="regular-text"/>
    </td>
  </tr>
  <tr>
    <td>Pickup Date</td>
    <td><input type="text"  name="pickupdate_form_fr" value="<?php echo get_option("pickupdate_form_fr");?>" class="regular-text"/></td>
  </tr>
   <tr>
    <td>Dropoff Location</td>
    <td><input type="text"  name="dropofflocation_form_fr" value="<?php echo get_option("dropofflocation_form_fr");?>" class="regular-text"/></td>
  </tr>
  <tr>
    <td>Dropoff Date</td>
    <td><input type="text"  name="dropoffdate_form_fr" value="<?php echo get_option("dropoffdate_form_fr");?>" class="regular-text"/></td>
  </tr>
</table></td>
                <td align="right"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                  <tr>
                    <td colspan="2" align="left"><h2>Netherlands</h2></td>
                  </tr>
                  <tr>
                    <td>Pickup Location</td>
                    <td>
                    <input type="text"  name="pickuplocation_form_du" value="<?php echo get_option("pickuplocation_form_du");?>" class="regular-text"/>
                    </td>
                  </tr>
                  <tr>
                    <td>Pickup Date</td>
                    <td><input type="text"  name="pickupdate_form_du" value="<?php echo get_option("pickupdate_form_du");?>" class="regular-text"/></td>
                  </tr>
                   <tr>
                    <td>Dropoff Location</td>
                    <td><input type="text"  name="dropofflocation_form_du" value="<?php echo get_option("dropofflocation_form_du");?>" class="regular-text"/></td>
                  </tr>
                  <tr>
                    <td>Dropoff Date</td>
                    <td><input type="text"  name="dropoffdate_form_du" value="<?php echo get_option("dropoffdate_form_du");?>" class="regular-text"/></td>
                  </tr>
                </table></td>
            </tr>
                </table>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Language Seting') ?>" name="save"/>
                </p>
			</form>            
            </div>
		</div>            
    </div>
<?php    
}
add_shortcode("travelwheels_form1","fnform1");
add_shortcode("travelwheels_form2","fnform2");
add_shortcode("travelwheels_form3","fnform3");

function getlangconstants($setlang,$text)
{
	$outputarr=array();
	if($setlang == 'en')
	{
		$outputarr['pickuplocation_lvl']=get_option("pickuplocation_form_en");
		$outputarr['pickupdate_lvl']=get_option("pickupdate_form_en");
		$outputarr['dropofflocation_lvl']=get_option("dropofflocation_form_en");
		$outputarr['dropoffdate_lvl']=get_option("dropoffdate_form_en");
		$outputarr['headerimgurl']=plugins_url('/upload/'.get_option( 'pageform'.$text.'_header_img_en'), __FILE__);
	}
	elseif($setlang == 'ge')
	{
		$outputarr['pickuplocation_lvl']=get_option("pickuplocation_form_da");
		$outputarr['pickupdate_lvl']=get_option("pickupdate_form_da");
		$outputarr['dropofflocation_lvl']=get_option("dropofflocation_form_da");
		$outputarr['dropoffdate_lvl']=get_option("dropoffdate_form_da");
		$outputarr['headerimgurl']=plugins_url('/upload/'.get_option( 'pageform'.$text.'_header_img_ge'), __FILE__);
	}
	elseif($setlang == 'fr')
	{
		$outputarr['pickuplocation_lvl']=get_option("pickuplocation_form_fr");
		$outputarr['pickupdate_lvl']=get_option("pickupdate_form_fr");
		$outputarr['dropofflocation_lvl']=get_option("dropofflocation_form_fr");
		$outputarr['dropoffdate_lvl']=get_option("dropoffdate_form_fr");
		$outputarr['headerimgurl']=plugins_url('/upload/'.get_option( 'pageform'.$text.'_header_img_fr'), __FILE__);
	}
	elseif($setlang == 'du')
	{
		$outputarr['pickuplocation_lvl']=get_option("pickuplocation_form_du");
		$outputarr['pickupdate_lvl']=get_option("pickupdate_form_du");
		$outputarr['dropofflocation_lvl']=get_option("dropofflocation_form_du");
		$outputarr['dropoffdate_lvl']=get_option("dropoffdate_form_du");
		$outputarr['headerimgurl']=plugins_url('/upload/'.get_option( 'pageform'.$text.'_header_img_du'), __FILE__);
	}
	else
	{
		$outputarr['pickuplocation_lvl']=get_option("pickuplocation_form_en");
		$outputarr['pickupdate_lvl']=get_option("pickupdate_form_en");
		$outputarr['dropofflocation_lvl']=get_option("dropofflocation_form_en");
		$outputarr['dropoffdate_lvl']=get_option("dropoffdate_form_en");
		$outputarr['headerimgurl']=plugins_url('/upload/'.get_option( 'pageform'.$text.'_header_img_en'), __FILE__);
	}
	return $outputarr;
}

function fnform1($attr)
{
	$lang=$attr["lang"];
	$lang_res=getlangconstants($lang,'1');
	$str='';
	$str .='<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />
	  <link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/i18n/jquery-ui-i18n.min.js"></script>	
	  <script src="'.plugins_url("jquery.selectBoxIt.js", __FILE__).'"></script> 
		<style>'.get_option('pageform1_css').'
			.ui-datepicker .ui-datepicker-header {background:none repeat scroll 0 0 #026CD6;color:#FFFFFF}
			.frameless_widget_div ul li{background:none;padding:5px;margin:0;}
			.tabsidebar .ui-widget-content{	border:none;}
			.ui-tabs .ui-tabs-panel{padding:0;}
			.content_left .ui-tabs{padding:0;}			
            </style>
		<script>jQuery( document ).ready(function($) {
function getsc()
{
	var widths=$(window).width();			
	var heights=$(window).height();
	if(widths <= 768){
	$("html").prepend($("#frameless_widget_section").html());
	$("#frameless_widget_section").hide();
	}
   $("div .frameless_widget_div .selectBox-dropdown").hide();
	
}
function resizeDatepicker() {
	setTimeout(function() {
		var widths=$(window).width();
		$("#ui-datepicker-div").width("250px");
		$("#ui-datepicker-div").css({margin:"40px 0 0 0"});
		$(".ui-datepicker-group").width("100%");
	}, 0);
}	
	getsc();';
	if($lang == 'en') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[""] );';}
			else if($lang == 'ge') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "de" ] );';}
			else if($lang == 'fr') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );';}
			else if($lang == 'du') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "nl" ] );';}
			else { echo '$.datepicker.setDefaults( $.datepicker.regional[ "" ] );';}
$str .= '$("#pagePickupLocationID,#pageDropoffLocationID").selectBoxIt({


theme: "jquerymobile",


});
$("#pagetxtStartDate_div").datepicker({ 
	showOn: "button",
	buttonImage: "'.plugins_url('cal.gif',__FILE__).'",
	buttonImageOnly: true,									  
	 minDate: 0,
	 maxDate: "+18M +14D",
	 showAnim: "fadeIn",
	 numberOfMonths: 3,
	 dateFormat: "dd/mm/yy",
	 showButtonPanel: true,
	 defaultDate: +2,
	 beforeShow: function(input, inst)
	{
		var widths=$(window).width();			
		var heights=$(window).height();
		if(widths <= 768){					
			$.datepicker._pos = $.datepicker._findPos(input); 
			$.datepicker._pos[0] = $.datepicker._pos[0]-260; 
			$.datepicker._pos[1] = "50"; 
			resizeDatepicker();
		}
	},
	 onClose: function (dateText, picker) {
		document.getElementById("pagetxtStartDate").value=dateText;					
	 }
	 });
$("#pagetxtEndDate_div").datepicker({ 
	showOn: "button",
	buttonImage: "'.plugins_url('cal.gif',__FILE__).'",
	buttonImageOnly: true,									  
	 minDate: 0,
	 maxDate: "+18M +14D",
	 showAnim: "fadeIn",
	 numberOfMonths: 3,
	 defaultDate: +16,
	 dateFormat: "dd/mm/yy",
	 showButtonPanel: true,	
	beforeShow: function(input, inst)
	{
		var widths=$(window).width();			
		var heights=$(window).height();
		if(widths <= 768){					
			$.datepicker._pos = $.datepicker._findPos(input); 
			$.datepicker._pos[0] = $.datepicker._pos[0]-260;
			$.datepicker._pos[1] = "50";
			resizeDatepicker();
		}
	},
	 onClose: function (dateText, picker) {
		document.getElementById("pagetxtEndDate").value=dateText;					
	 }
	 });
});	
function myTrim(x){return x.replace(/^\s+|\s+$/gm,\'\');}
 function updatefield()
{
	var startdate=document.getElementById("pagetxtStartDate").value;
	var pickarr=startdate.split("/");
	document.getElementById("PickupDay").value=pickarr[0];
	document.getElementById("PickupMonth").value=pickarr[1];
	document.getElementById("PickupYear").value=pickarr[2];
	
	var enddate=document.getElementById("pagetxtEndDate").value;
	var droparr=enddate.split("/");
	document.getElementById("DropoffDay").value=droparr[0];
	document.getElementById("DropoffMonth").value=droparr[1];
	document.getElementById("DropoffYear").value=droparr[2];  
	if(myTrim(document.getElementById(\'pagetxtStartDate\').value) == "" || myTrim(document.getElementById(\'pagetxtEndDate\').value) == "" )
	{
		alert("please enter the start date & end date of your travel.");
		return false;
	}
	else
	{
		document.getElementById(\'theform\').submit();
	}
}</script>
		<div id="frameless_form_section">
             <div class="frameless_form_div" data-role="content" style="background-image:url(\''.plugins_url('/upload/'.get_option( 'pageform1_wg_bg_img') , __FILE__ ).'\');background-color:'.get_option('pageform1_wg_bg_color').';border:2px solid '.get_option('pageform1_wg_bg_color').'" style="width:700px">            
			<form target="_blank" id="theform" action="https://secure.rentalcarmanager.com.au/ssl/AUTravelWheels107/bondi/webstep2.asp?refid=&amp;URL=" name="theform" method="post">';
			
			if($lang_res['headerimgurl']!=""){
			$str .= '<div align="left"><img src="'.$lang_res['headerimgurl'].'" border="0"/></div>';
			} else {
			$str .= '<h1>Enter Your Travel Details</h1>'; } 
			$str .= '  <div class="custom_div_left">          
		<label>'.$lang_res["pickuplocation_lvl"].'</label>
		<select name="PickupLocationID" id="pagePickupLocationID">
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option selected="selected" value="1">Sydney &nbsp;</option>
		</select>
		</div>
		<div class="custom_div_right">
	<label>'.$lang_res["pickupdate_lvl"].'</label>
	   <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c"> <input  type="text" id="pagetxtStartDate" data-theme="a" value="'. date("d/m/Y",strtotime("+2 day")).'"/><input  type="hidden" id="pagetxtStartDate_div"/></div>   
	</div>
	<div class="clear5"></div>
	<div class="custom_div_left">
		<label>'.$lang_res["dropofflocation_lvl"].'</label>
		<select name="DropoffLocationID" id="pageDropoffLocationID">               
		   <option value="Same" selected="selected">Same As Pickup</option>
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option value="1">Sydney &nbsp;</option>
		</select>	
		</div>
		<div class="custom_div_right">
	 <label>'.$lang_res["dropoffdate_lvl"].'</label>
	   <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c"><input type="text" id="pagetxtEndDate" data-role="date" value="'.date("d/m/Y",strtotime("+16 day")).'"/><input type="hidden" id="pagetxtEndDate_div"/></div>		
	 </div>
	  <div class="clear5" style="height:10px;"></div>
	  <input type="hidden" value="9" name="CategoryTypeID"/>
	<img border="0" oldsrc="'.plugins_url( 'search.png' , __FILE__).'" srcover="'.plugins_url( 'search_ho.png' , __FILE__).'" src="'.plugins_url( 'search.png' , __FILE__).'" onclick="return updatefield();"/>
	 <input type="hidden" name="PickupDay" id="PickupDay"/><input type="hidden" name="PickupMonth" id="PickupMonth"/><input type="hidden" name="PickupYear" id="PickupYear"/>
	 <input type="hidden" name="DropoffDay" id="DropoffDay"/><input type="hidden" name="DropoffMonth" id="DropoffMonth"/><input type="hidden" name="DropoffYear" id="DropoffYear"/>
	 <div class="clear5"></div>
	 </form>
				</div>
			</div>
			<div class="clear5"></div>
		</div>
';
return $str;
}
function fnform2($attr)
{
	$lang=$attr["lang"];
	$lang_res=getlangconstants($lang,'2');
	$str ='';
   $str .= '<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/i18n/jquery-ui-i18n.min.js"></script>	
	<script src="'.plugins_url('jquery.selectBox.js', __FILE__).'"></script> 
	<style>'.get_option('pageform2_css').'</style>
	<script>function getsc()
		{
			var widths=$(window).width();			
			var heights=$(window).height();
			if(widths <= 768){
			$("html").prepend($("#frameless_form_section").html());
			$("#frameless_form_section").hide();
			}				
		}
		function resizeDatepicker() {
			setTimeout(function() {
				var widths=$(window).width();
				$("#ui-datepicker-div").width("250px");
				$("#ui-datepicker-div").css({margin:"40px 0 0 0"});
				$(".ui-datepicker-group").width("100%");
			}, 0);
		}
		$(function() {	
			getsc();';
		if($lang == 'en') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[""] );';}
			else if($lang == 'ge') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "de" ] );';}
			else if($lang == 'fr') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );';}
			else if($lang == 'du') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "nl" ] );';}
			else { echo '$.datepicker.setDefaults( $.datepicker.regional[ "" ] );';}	
			
		  $str .= '$("#pagetxtStartDate,#pagetxtEndDate").datepicker(
		   { 
			 minDate: 0,
			 maxDate: "+18M +14D",
			 showAnim: "fadeIn",
			 numberOfMonths: 3,
			 dateFormat: "dd/mm/yy",
			 beforeShow: function(input, inst)
				{
					var widths=$(window).width();			
					var heights=$(window).height();
					if(widths <= 768){					
						$.datepicker._pos = $.datepicker._findPos(input); 
						$.datepicker._pos[0] = $.datepicker._pos[0]-260; 
						$.datepicker._pos[1] = "50";
						resizeDatepicker();
					}
				}
		   }); 
			$( "#pagedatepicker-btn" ).datepicker({
			onSelect: function(date) {
				document.getElementById("pagetxtStartDate").value=date;
				document.getElementById("pagedatepicker-btn").value="Select Date";
			},
			 minDate: 0,
			 maxDate: "+18M +14D",
			 showAnim: "fadeIn",
			 numberOfMonths: 3,
			 dateFormat: "dd/mm/yy",
			 beforeShow: function(input, inst)
				{
					var widths=$(window).width();			
					var heights=$(window).height();
					if(widths <= 768){					
						$.datepicker._pos = $.datepicker._findPos(input);
						$.datepicker._pos[0] = $.datepicker._pos[0]-260;
						$.datepicker._pos[1] = "50";
						resizeDatepicker();
					}
				}
		});
		$( "#pagedatepicker1-btn" ).datepicker({
			onSelect: function(date) {
			document.getElementById("pagetxtEndDate").value=date;
			document.getElementById("pagedatepicker1-btn").value="Select Date";
			},
			 minDate: 0,
			 maxDate: "+18M +14D",
			 showAnim: "fadeIn",
			 numberOfMonths: 3,
			 dateFormat: "dd/mm/yy",
			 beforeShow: function(input, inst)
				{
					var widths=$(window).width();			
					var heights=$(window).height();
					if(widths <= 768){					
						$.datepicker._pos = $.datepicker._findPos(input); 
						$.datepicker._pos[0] = $.datepicker._pos[0]-260; 
						$.datepicker._pos[1] = "50"; 
						resizeDatepicker();
					}
				}
		});
		$("#pageDropoffLocationID,#pagePickupLocationID").selectBox({
			 mobile: true
			});
		});
		function updatefield()
		{
			var startdate=document.getElementById("pagetxtStartDate").value;
			var pickarr=startdate.split("/");
			document.getElementById("PickupDay").value=pickarr[0];
			document.getElementById("PickupMonth").value=pickarr[1];
			document.getElementById("PickupYear").value=pickarr[2];
			
			var enddate=document.getElementById("pagetxtEndDate").value;
			var droparr=enddate.split("/");
			document.getElementById("DropoffDay").value=droparr[0];
			document.getElementById("DropoffMonth").value=droparr[1];
			document.getElementById("DropoffYear").value=droparr[2];            
		}
	</script>
		<div id="frameless_form_section">
            <div class="clear5"></div>
            <div class="frameless_form_div" data-role="content" style="background-image:url(\''.plugins_url('/upload/'.get_option( 'pageform2_wg_bg_img') , __FILE__ ).'\');background-color:'.get_option('pageform2_wg_bg_color').';border:2px solid '.get_option('pageform2_wg_bg_color').'">
		   <form target="_blank" id="theform" action="https://secure.rentalcarmanager.com.au/ssl/AUTravelWheels107/bondi/webstep2.asp?refid=&amp;URL=" name="theform" method="post">';
		   if(get_option( 'pageform2_header_img')!=""){
			$str .= '<div align="left"><img src="'.plugins_url( 'frameless-form/upload/'.get_option( 'pageform2_header_img') , dirname(__FILE__) ).'" border="0"/></div>';
            }
            else {
			$str .='<h1><Enter Your Travel Dates/h1>';
            } 
			$str .='<div class="clear5"></div><div class="clear5"></div>                              
		<select name="PickupLocationID" id="pagePickupLocationID" data-mini="true" class="sel">
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option selected="selected" value="1">Sydney &nbsp;</option>
		</select>           
	<div class="clear5"></div>                 
	<input type="button" id="pagedatepicker-btn" value="Select Date" class="ui-button ui-widget ui-state-default ui-corner-all" style="width:45%"/> &nbsp;&nbsp;          
	<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c" style="background: none repeat scroll 0 0 #FFFFFF;border-color: #DDDDDD;color: #333333;
text-shadow: 0 1px 0 #F3F3F3;width:45%;display:block;float:right;margin:0;"><input type="text" id="pagetxtStartDate" value="'.date("d/m/Y",strtotime("+2 day")).'"/></div>
	<div class="clear5"></div>
	<label><strong>STEP3:RETURNING</strong> </label>
	<div class="clear5"></div>
		<select name="DropoffLocationID" id="pageDropoffLocationID" data-mini="true" class="sel"> 
		   <option value="Same" selected="selected">Same As Pickup</option>
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option value="1">Sydney &nbsp;</option>
		</select>
		<div class="clear5"></div> 
   <input  type="button" id="pagedatepicker1-btn" value="Select Date" class="ui-button ui-widget ui-state-default ui-corner-all" style="width:45%"/> &nbsp;&nbsp;          
	 <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c" style="background: none repeat scroll 0 0 #FFFFFF;border-color: #DDDDDD;color: #333333;
text-shadow: 0 1px 0 #F3F3F3;width:45%;display:block;float:right;margin:0;"><input type="text" id="pagetxtEndDate" value="'.date("d/m/Y",strtotime("+16 day")).'"/></div>
   
	 <div class="clear5"></div>
	 <input type="hidden" value="9" name="CategoryTypeID"/>
	 <input type="hidden" name="PickupDay" id="PickupDay"/><input type="hidden" name="PickupMonth" id="PickupMonth"/><input type="hidden" name="PickupYear" id="PickupYear"/>
	 <input type="hidden" name="DropoffDay" id="DropoffDay"/><input type="hidden" name="DropoffMonth" id="DropoffMonth"/><input type="hidden" name="DropoffYear" id="DropoffYear"/>
	 <input value="Search" class="ui-button ui-widget ui-state-default ui-corner-all" type="submit" onclick="updatefield()" style="width:100%"/>
	 <div class="clear5"></div>
	 </form>
		</div>
		<div class="clear5"></div>
		</div>
	';
	return $str;
}
function fnform3($attr)
{
	$lang=$attr["lang"];
	$lang_res=getlangconstants($lang,'3');
	$str ='';
	$str .= '<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/i18n/jquery-ui-i18n.min.js"></script>	
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="'.plugins_url('jquery.selectric.js', __FILE__).'"></script>            
		<style>'.get_option('pageform3_css').'</style>
		<script> function getsc()
			{
				var widths=$(window).width();			
				var heights=$(window).height();
				if(widths <= 768){
				$("html").prepend($("#frameless_form_section").html());
				$("#frameless_form_section").hide();
				}
				
			}
			function resizeDatepicker() {
    			setTimeout(function() {
					var widths=$(window).width();
					$("#ui-datepicker-div").width("250px");
					$("#ui-datepicker-div").css({margin:"40px 0 0 0"});
					$(".ui-datepicker-group").width("100%");
				}, 0);
			}
            $(function() {	
			getsc();';
			if($lang == 'en') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[""] );';}
			else if($lang == 'ge') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "de" ] );';}
			else if($lang == 'fr') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );';}
			else if($lang == 'du') { $str .= '$.datepicker.setDefaults( $.datepicker.regional[ "nl" ] );';}
			else { echo '$.datepicker.setDefaults( $.datepicker.regional[ "" ] );';}
		  $str .= '$("#pagetxtStartDate_div").datepicker({ 
			showOn: "button",
			buttonImage: "'.plugins_url('cal1.gif', __FILE__).'",
			buttonImageOnly: true,									  
			 minDate: 0,
			 maxDate: "+18M +14D",
			 showAnim: "fadeIn",
			 numberOfMonths: 3,
			 dateFormat: "dd/mm/yy",
			 showButtonPanel: true,
			  beforeShow: function(input, inst)
				{
					var widths=$(window).width();			
					var heights=$(window).height();
					if(widths <= 768){					
						$.datepicker._pos = $.datepicker._findPos(input); 
						$.datepicker._pos[0] = $.datepicker._pos[0]-260; 
						$.datepicker._pos[1] = "50";
						resizeDatepicker();
					}
				},
			 onClose: function (dateText, picker) {
				document.getElementById("pagetxtStartDate").value=dateText;					
			 }
			 });
		 $("#pagetxtEndDate_div").datepicker({ 
			showOn: "button",
			buttonImage: "'.plugins_url('cal1.gif', __FILE__).'",
			buttonImageOnly: true,									  
			 minDate: 0,
			 maxDate: "+18M +14D",
			 showAnim: "fadeIn",
			 numberOfMonths: 3,
			 dateFormat: "dd/mm/yy",
			 showButtonPanel: true,
			  beforeShow: function(input, inst)
				{
					var widths=$(window).width();			
					var heights=$(window).height();
					if(widths <= 768){					
						$.datepicker._pos = $.datepicker._findPos(input);
						$.datepicker._pos[0] = $.datepicker._pos[0]-260;
						$.datepicker._pos[1] = "50"; 
						resizeDatepicker();
					}
				},
			 onClose: function (dateText, picker) {
				document.getElementById("pagetxtEndDate").value=dateText;					
			 }
			 });
		  $("#pageDropoffLocationID,#pagePickupLocationID").selectric();
		});	
		function updatefield()
		{
			var startdate=document.getElementById("pagetxtStartDate").value;
			var pickarr=startdate.split("/");
			document.getElementById("PickupDay").value=pickarr[0];
			document.getElementById("PickupMonth").value=pickarr[1];
			document.getElementById("PickupYear").value=pickarr[2];
			
			var enddate=document.getElementById("pagetxtEndDate").value;
			var droparr=enddate.split("/");
			document.getElementById("DropoffDay").value=droparr[0];
			document.getElementById("DropoffMonth").value=droparr[1];
			document.getElementById("DropoffYear").value=droparr[2];            
		}
		</script>
		<div id="frameless_form_section">
            <div class="clear5"></div>
             <div class="frameless_form_div" data-role="content" style="background-image:url(\''.plugins_url('/upload/'.get_option( 'pageform3_wg_bg_img') , __FILE__ ).'\');background-color:'.get_option('pageform3_wg_bg_color').';border:2px solid '.get_option('pageform3_wg_bg_color').'">
			<form target="_blank" id="theform" action="https://secure.rentalcarmanager.com.au/ssl/AUTravelWheels107/bondi/webstep2.asp?refid=&amp;URL=" name="theform" method="post" onsubmit="updatefield();">';
	
	if($lang_res['headerimgurl']!=""){
		$str .= '<div align="left"><img src="'.$lang_res['headerimgurl'].'" border="0"/></div>';
		} else {
		$str .= '<h1>Enter Your Travel Details</h1>';
		}
	$str .= '<div class="clear5"></div><div class="clear5"></div>
	<div class="col1">            
		 '.$lang_res["pickuplocation_lvl"].'
		<select  name="PickupLocationID" id="pagePickupLocationID" data-mini="true" data-icon="arrow-d">               
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option value="1" selected="selected">Sydney &nbsp;</option>
		</select>           
	</div>
	<div class="col2">         
	 '.$lang_res["pickupdate_lvl"].'
	 <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c" style="background: none repeat scroll 0 0 #FFFFFF;border-color: #DDDDDD;color: #333333;
text-shadow: 0 1px 0 #F3F3F3;width:100%;padding:2px 0;display:block;float:right;margin:10px 0;"><input type="text" id="pagetxtStartDate" value="'.date("d/m/Y",strtotime("+2 day")).'"/><input type="hidden" id="pagetxtStartDate_div" /></div>
	</div>
	<div class="clear5"></div>
	 <div class="col1">           
		'.$lang_res["dropofflocation_lvl"].'
		<select name="DropoffLocationID" id="pageDropoffLocationID" data-mini="true" data-icon="arrow-d"> 
		   <option value="28">Adelaide &nbsp;</option>
		   <option value="33">Brisbane &nbsp;</option>
		   <option value="36">Cairns &nbsp;</option>
		   <option value="12">Darwin &nbsp;</option>
		   <option value="4">Melbourne &nbsp;</option>
		   <option value="9">Perth &nbsp;</option>
		   <option value="1" selected="selected">Sydney &nbsp;</option>
		</select>
	</div>
	<div class="col2">
	 '.$lang_res["dropoffdate_lvl"].'
	 <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-shadow ui-btn-up-c" style="background: none repeat scroll 0 0 #FFFFFF;border-color: #DDDDDD;color: #333333;
text-shadow: 0 1px 0 #F3F3F3;width:100%;padding:2px 0;display:block;float:right;margin:10px 0;"><input type="text" id="pagetxtEndDate" value="'.date("d/m/Y",strtotime("+16 day")).'"/><input type="hidden" id="pagetxtEndDate_div" /></div>
	</div>
	 <div class="clear5"></div>
	  <input type="hidden" value="9" name="CategoryTypeID"/>
	 <input value="Search" data-theme="a" type="submit" class="ui-button ui-widget ui-state-default ui-corner-all selectric" style="width:100%"/>
	 <input type="hidden" name="PickupDay" id="PickupDay"/><input type="hidden" name="PickupMonth" id="PickupMonth"/><input type="hidden" name="PickupYear" id="PickupYear"/>
	 <input type="hidden" name="DropoffDay" id="DropoffDay"/><input type="hidden" name="DropoffMonth" id="DropoffMonth"/><input type="hidden" name="DropoffYear" id="DropoffYear"/>
	 <div class="clear5"></div>
	 </form>
</div>
<div class="clear5"></div>
</div>
';
return $str;
}
?>