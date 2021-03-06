<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
	<title>
	<?php
		$meta_title = '';
		// when a module controller's action sets the title
		if(isset($title) && $title!='')
		{
		     $meta_title = $this->config->item('title').' &raquo; '.$title;
			echo $meta_title;
		} // when the module controller's constructor sets the title
		elseif(isset($metadata['title']) && $metadata['title']!='')
		{
		     $meta_title = $this->config->item('title').' &raquo; '.$metadata['title'];
			echo $meta_title;
		} // the value set in the main configuration file for title
		else
		{
			$meta_title = $this->config->item('title');
			echo $meta_title;
		}
	?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="description" content="<?php
		$metadata = $this->session->userdata('metadata');
		// when a module controller's action sets the meta description
		if(isset($meta['description']) && $meta['description']!='')
		{
			echo $meta['description'];
		} // when the module controller's constructor sets the meta description
		elseif(isset($metadata['description']) && $metadata['description']!='')
		{
			echo $metadata['description'];
		} // the value set in the main configuration file for meta description
		else
		{
			echo $this->config->item('meta_description');
		}
	?>" />
	<meta name="keywords" content="<?php
		// when a module controller's action sets the meta keywords
		if(isset($meta['keywords']) && $meta['keywords']!='')
		{
			echo $meta['keywords'];
		} // when the module controller's constructor sets the meta keywords
		elseif(isset($metadata['keywords']) && $metadata['keywords']!='')
		{
			echo $metadata['keywords'];
		} // the value set in the main configuration file for meta keywords
		else
		{
			echo $this->config->item('meta_keywords');
		}
	?>" />
	<meta name="copyright" content="tHOUGHTS &amp; iDEAS <?php echo date('Y', time()); ?>">

	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="viewport" content="initial-scale=1.0, width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->config->item('admin_img_path') ?>favicon.ico" >
   <link rel="apple-touch-icon" href="<?php echo $this->config->item('admin_img_path') ?>apple-touch-icon.png">

	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>html-elements.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>layout.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>sidebar.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>form-elements.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>normalize.css" type="text/css" media="screen, projection" />
<?php
	 
	 $cssfiles = $_css = array();
    $isset_css = $isset_css_3rd = false ; 
	 $cssfiles = $this->session->userdata('scripts');	

	
    //load the main CSS files for the module
   if(isset($css_3rd) && is_array($css_3rd) && count($css_3rd) > 0)
	{
		$_css_3rd = $css_3rd;
		$isset_css_3rd = true;
	}	
	
	if(is_array($cssfiles['css_3rd']) && (count($cssfiles['css_3rd']) > 0) && !$isset_css_3rd)
	{	
		$_css_3rd = $cssfiles['css_3rd'];
	}
	else if(is_array($cssfiles['css_3rd']) && (count($cssfiles['css_3rd']) > 0) && $isset_css_3rd)
	{
		$_css_3rd = array_merge($cssfiles['css_3rd'], $_css_3rd);
	}

	if(count($_css_3rd) > 0)
	{
		foreach ($_css_3rd as $css_3rd_value)
		{
	?>
	     <link href="<?php echo $this->config->item('admin_plugin_path').$css_3rd_value;?>" rel="stylesheet" type="text/css" media="screen, projection" />
<?php   } 
	}
?>		

	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>common.css" type="text/css" media="screen, projection" />
<?php
	       
    //load the main CSS files for the module
   if(isset($css) && is_array($css) && count($css) > 0)
	{
		$_css = $css;
		$isset_css  = true;
	}    
	
	if(is_array($cssfiles['css']) && count($cssfiles['css']) > 0 && !$isset_css)
	{	
		$_css = $cssfiles['css'];
	}
	else if(is_array($cssfiles['css']) && count($cssfiles['css']) > 0 && $isset_css)
	{
		$_css = array_merge($cssfiles['css'], $css);
	}
	
	if(count($_css) > 0)
	{
		foreach ($_css as $css_value)
		{
	?>
	     <link href="<?php echo $this->config->item('admin_css_path').$css_value;?>" rel="stylesheet" type="text/css" media="screen, projection" />
<?php   } 
	}

	// load CSS files targetting for media type print
	if(is_array($cssfiles['css_print']) && count($cssfiles['css_print']) > 0)
	{
		foreach ($cssfiles['css_print'] as $css_print)
		{	?>
			<link href="<?php echo $this->config->item('admin_css_path').$css_print;?>" rel="stylesheet" type="text/css" media="print" />

<?php	}
	}  ?>  

	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>handheld.css" type="text/css" media="handheld" />	
	<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path') ?>print.css" type="text/css" media="print" />

	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path'); ?>ie_6.css" type="text/css" media="screen, projection" />
	<![endif]-->	

	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path'); ?>ie_7.css" type="text/css" media="screen, projection" />
	<![endif]-->
	  	
<?php	// section that loads the IE specific CSS
	if(is_array($cssfiles['css_ie']) && count($cssfiles['css_ie']) > 0)
	{
		$css_ie = $cssfiles['css_ie'];
		if(isset($css_ie['ie-7']) && is_array($css_ie['ie-7']) && count($css_ie['ie-7']) > 0)
		{	?>
			<!--[if IE 7]>
<?php			foreach($css_ie['ie-7'] as $ie7) // Traverse through ie-7 related stylesheets
			{	?>
				<link href="<?php echo $this->config->item('admin_css_path').$ie7;?>" rel="stylesheet" type="text/css" />
<?php			}	?>
			<![endif]-->
<?php		}	
	}
?>

	<!--[if IE 8]>
		<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path'); ?>ie_8.css" type="text/css" media="screen, projection" />
	<![endif]-->		
<?php	
	if(is_array($cssfiles['css_ie']) && count($cssfiles['css_ie']) > 0)
	{
		$css_ie = $cssfiles['css_ie'];
			if(isset($css_ie['ie-8']) && is_array($css_ie['ie-8']) && count($css_ie['ie-8']) > 0)
			{	?>
			<!--[if IE 8]>
<?php			foreach($css_ie['ie-8'] as $ie8) // Traverse through ie-8 related stylesheets
			{	?>
				<link href="<?php echo $this->config->item('admin_css_path').$ie8;?>" rel="stylesheet" type="text/css" />
<?php			}	?>
			<![endif]-->
<?php		}	
	}?>

	<!--[if IE 9]>
		<link rel="stylesheet" href="<?php echo $this->config->item('admin_css_path'); ?>ie_9.css" type="text/css" media="screen, projection" />
	<![endif]-->
<?php
	if(is_array($cssfiles['css_ie']) && count($cssfiles['css_ie']) > 0)
	{
		$css_ie = $cssfiles['css_ie'];
		if(isset($css_ie['ie-9']) && is_array($css_ie['ie-9']) && count($css_ie['ie-9']) > 0)
		{	?>
			<!--[if IE 9]>
<?php			foreach($css_ie['ie-9'] as $ie9) // Traverse through ie-9 related stylesheets
			{	?>
				<link href="<?php echo $this->config->item('admin_css_path').$ie9;?>" rel="stylesheet" type="text/css" />
<?php			}	?>
			<![endif]-->
<?php		}  
	}

	if(isset($cssfiles['js_topjs']) && is_array($cssfiles['js_topjs']) && count($cssfiles['js_topjs']) > 0)
	{
		foreach($cssfiles['js_topjs'] as $value)
		{       
			$src =  $this->config->item('admin_plugin_path').''.$value;
			echo '  <script type="text/javascript" src="'.$src.'"></script>';
		}
	}
	
	$layout = NULL;
        $layout = $this->session->userdata('layout');
?>
</head>
<body class="fluid-layout">
	<div id="wrapper" class="<?php if(isset($layout) && $layout != NULL){ echo $layout; } else { ?>no-sidebars<?php } ?>"> <!-- no-sidebars, sidebar-left, sidebar-right, two-sidebars  -->
	  <div id="wrapper-inner">
  
    <div id="header">
      <div id="header-inner">
        <div id="logo"><a href="<?php echo $this->config->item('base_url'); ?>home/index/" title="tHOUGHTS &amp; iDEAS"><img src="<?php echo $this->config->item('admin_img_path'); ?>logo.png" alt="tHOUGHTS &amp; iDEAS"/></a></div> <!-- /#logo-->

      </div> <!-- /#header-inner-->
    </div> <!-- /#header-->
