<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/*******************************************************************************************/

include 'fonts.php';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// General Configuration Parameters


$tmpl_style		= $this->params->get('tmpl_style');  // Template styles



$body_font_family 		= $this->params->get('body_font_family');
$bodyfont_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$bodyfont_arr			= fontChooser($body_font_family);
$body_font_family 		= $bodyfont_arr['fontfamily'];

$hfont_family 			= $this->params->get('hfont_family');
$hfont_arr				= array('fontlink'=>false, 'fontfamily'=>false);
$hfont_arr				= fontChooser($hfont_family);
$hfont_family 			= $hfont_arr['fontfamily'];

$body_font_size 		= 'font-size: ' . $this->params->get('body_font_size') . 'px;';

$body_font_color		= '';
if($this->params->get('body_font_color'))
	$body_font_color 	= 'color: #' . $this->params->get('body_font_color') . ';';

$link_font_color 		= '';
if($this->params->get('link_font_color'))
	$link_font_color 	= 'color: #' . $this->params->get('link_font_color') . ';';

$hlink_font_color 		= '';
if($this->params->get('hlink_font_color'))
	$hlink_font_color 		= 'color: #' . $this->params->get('hlink_font_color') . ';';

$h1_font_size			= '';
$h1_line_height			= '';
if($this->params->get('h1_font_size'))
{
	$h1_font_size 			= 'font-size: ' . $this->params->get('h1_font_size') . 'px;';
	$h1_line_height			= 'line-height: ' . $this->params->get('h1_font_size') . 'px;';
}

$h2_font_size			= '';
$h2_line_height			= '';
if($this->params->get('h2_font_size'))
{
	$h2_font_size 			= 'font-size: ' . $this->params->get('h2_font_size') . 'px;';
	$h2_line_height			= 'line-height: ' . $this->params->get('h2_font_size') . 'px;';
}

$h3_font_size			= '';
$h3_line_height			= '';
if($this->params->get('h3_font_size'))
{
	$h3_font_size 			= 'font-size: ' . $this->params->get('h3_font_size') . 'px;';
	$h3_line_height			= 'line-height: ' . ($this->params->get('h3_font_size')+5) . 'px;';
}

$h4_font_size			= '';
$h4_line_height			= '';
if($this->params->get('h4_font_size'))
{
	$h4_font_size 			= 'font-size: ' . $this->params->get('h4_font_size') . 'px;';
	$h4_line_height			= 'line-height: ' . ($this->params->get('h4_font_size')+5) . 'px;';
}

$h5_font_size			= '';
$h5_line_height			= '';
if($this->params->get('h5_font_size'))
{
	$h5_font_size 			= 'font-size: ' . $this->params->get('h5_font_size') . 'px;';
	$h5_line_height			= 'line-height: ' . ($this->params->get('h5_font_size')+5) . 'px;';
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$h3b = "	var h = asjQuery(this).html();
			var index = h.indexOf(' ');
			if(index == -1) {
				index = h.length;
			}
			asjQuery(this).html('<b>' + h.substring(0, index) + '</b>' + h.substring(index, h.length));";
				
			
			
$h3_bcolor 	= '';
if($this->params->get('h3_custom_color'))
{
	if($this->params->get('h3_bcolor'))
		$h3_bcolor = 'color: #' . $this->params->get('h3_bcolor') . ';';
		
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('h3 a').length > 0)
				{
					asjQuery('h3 a').each(function() 
					{" . $h3b . "});
				}
				else
				{
					asjQuery('h3').each(function() 
					{" . $h3b . "});
				}
				
            });
        </script>";
}


if($this->params->get('h3_right1_custom_color'))
{
	
	if($this->params->get('h3_row1_right_bcolor'))
		$h3_row1_right_bcolor = 'color: #' . $this->params->get('h3_row1_right_bcolor') . ';';
		
}
else
{
	$h3_row1_right_bcolor = '';
}



if($this->params->get('h3_right2_custom_color'))
{
	if($this->params->get('h3_row2_right_bcolor'))
		$h3_row2_right_bcolor = 'color: #' . $this->params->get('h3_row2_right_bcolor') . ';';
		
}
else
{
	$h3_row2_right_bcolor = '';
}

if($this->params->get('h3_left1_custom_color'))
{
	
	if($this->params->get('h3_row1_left_bcolor'))
		$h3_row1_left_bcolor = 'color: #' . $this->params->get('h3_row1_left_bcolor') . ';';
		
}
else
{
	$h3_row1_left_bcolor = '';
}



if($this->params->get('h3_left2_custom_color'))
{
	if($this->params->get('h3_row2_left_bcolor'))
		$h3_row2_left_bcolor = 'color: #' . $this->params->get('h3_row2_left_bcolor') . ';';
		
}
else
{
	$h3_row2_left_bcolor = '';
}
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header Configuration Parameters

// Logo
if ($this->params->get('logo_img'))
{
	$logo_img = JURI::root() . $this->params->get('logo_img');
}
else
{
	$logo_img = $this->baseurl . "/templates/" . $this->template . "/images/logo.png";
}

$slogan_txt = htmlspecialchars($this->params->get('slogan_txt'));

$logo_type 			= $this->params->get('logo_type');

$logo_txt 			= '';
if($this->params->get('logo_txt'))
	$logo_txt 		= $this->params->get('logo_txt');
	
$logo_font_family 		= $this->params->get('logo_font_family');
$logo_font_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$logo_font_arr			= fontChooser($logo_font_family);
$logo_font_family		= $logo_font_arr['fontfamily'];

$logo_font_size		= '';
if($this->params->get('logo_font_size'))
	$logo_font_size		= 'font-size: ' . $this->params->get('logo_font_size') . 'px;';

$logo_font_style	= '';
if($this->params->get('logo_font_style'))
	$logo_font_style		= 'font-style: ' . $this->params->get('logo_font_style') . ';';
	
$logo_font_weight	= '';
if($this->params->get('logo_font_weight'))
	$logo_font_weight		= 'font-weight: ' . $this->params->get('logo_font_weight') . ';';
	
$logo_font_color	= '';
if($this->params->get('logo_font_color'))
	$logo_font_color		= 'color: #' . $this->params->get('logo_font_color') . '!important;';

$slogan_font_family 		= $this->params->get('slogan_font_family');
$slogan_font_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$slogan_font_arr			= fontChooser($slogan_font_family);
$slogan_font_family			= $slogan_font_arr['fontfamily'];

$slogan_font_size		= '';
if($this->params->get('slogan_font_size'))
	$slogan_font_size		= 'font-size: ' . $this->params->get('slogan_font_size') . 'px;';

$slogan_font_style	= '';
if($this->params->get('slogan_font_style'))
	$slogan_font_style		= 'font-style: ' . $this->params->get('slogan_font_style') . ';';
	
$slogan_font_weight	= '';
if($this->params->get('slogan_font_weight'))
	$slogan_font_weight		= 'font-weight: ' . $this->params->get('slogan_font_weight') . ';';
	
$slogan_font_color	= '';
if($this->params->get('slogan_font_color'))
	$slogan_font_color		= 'color: #' . $this->params->get('slogan_font_color') . '!important;';
	
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Content

//Get Left column grid width
$aside_left_width = 0;
if(($this->countModules('as-position-10') || $this->countModules('as-position-11'))){ 
	$aside_left_width = $this->params->get('aside_left_width');
}

//Get Right column grid width
$aside_right_width = 0;
if(($this->countModules('as-position-15') || $this->countModules('as-position-16'))){ 
	$aside_right_width = $this->params->get('aside_right_width');
}

$mainContentWidth = 12 - ($aside_left_width + $aside_right_width);
	
?>

