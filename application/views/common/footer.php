		 <div id="footer">
		   <div id="footer-inner">	     
		     <div id="copyright">
		       <p>&copy; <a href="<?php echo $this->config->item('base_url'); ?>" title="tHOUGHTS &amp; iDEAS">tHOUGHTS &amp; iDEAS</a> <?php echo date('Y', time()); ?>, All Rights Reserved.</p>
		     </div> <!-- /#copyright-->
		     
		     <div id="secondary">
		       <div id="secondary-inner">
		         <ul>
		           <li class="item"><a href="javascript:void(0);" title="Help">Help</a></li>
		           <li class="item first"><a href="javascript:void(0);" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
		           <li class="item last"><a href="javascript:void(0);" title="Privacy Policy">Privacy Policy</a></li>
		         </ul>
		       </div> <!-- /#secondary-inner-->         
		     </div> <!-- /#secondary-->
		     
		   </div> <!-- /#footer-inner-->
		 </div> <!-- /#footer-->
		 
	  </div> <!-- /#wrapper-inner-->
	</div> <!-- /#wrapper /.no-sidebars-->

   <!-- loading the jquery javascript libraries -->	
   <script type="text/javascript" src="<?php echo $this->config->item('admin_plugin_path'); ?>jquery/jquery-1.9.1.js"></script>

<?php
	$jsfiles = $_js = $_js_3rd = array();
	$isset_js = $isset_js_3rd = false ;
	$jsfiles = $this->session->userdata('scripts');

	if(isset($js_3rd) && is_array($js_3rd) && count($js_3rd) > 0)
	{
		$_js_3rd = $js_3rd;
		$isset_js_3rd = true ;	
	}	
	if(is_array($jsfiles['js_3rd']) && count($jsfiles['js_3rd']) > 0 && !$isset_js_3rd)
	{
		$_js_3rd = $jsfiles['js_3rd'];
	}
	else if(is_array($jsfiles['js_3rd']) && count($jsfiles['js_3rd']) > 0 && $isset_js_3rd)
	{
		$_js_3rd = array_merge($jsfiles['js_3rd'], $js_3rd);
	}
	if(count($_js_3rd) > 0)
	{
	  foreach ($_js_3rd as $js_3rd_value)
	  {?>
	  
	    <script type="text/javascript" src="<?php echo $this->config->item('admin_plugin_path').$js_3rd_value;?>"></script>
<?php }  		
	}

	if(isset($js) && is_array($js) && count($js) > 0)
	{
		$_js = $js;
		$isset_js = true ;	
	}	
	if(is_array($jsfiles['js']) && count($jsfiles['js']) > 0 && !$isset_js)
	{
		$_js = $jsfiles['js'];
	}
	else if(is_array($jsfiles['js']) && count($jsfiles['js']) > 0 && $isset_js)
	{
		$_js = array_merge($jsfiles['js'], $js);
	}
	if(count($_js) > 0)
	{
	  foreach ($_js as $js_value)
	  {?>
	  
	    <script type="text/javascript" src="<?php echo $this->config->item('admin_js_path').$js_value;?>"></script>
<?php }  		
	}
	
	if(is_array($jsfiles['js_ie']) && count($jsfiles['js_ie']) > 0)
	{
	  $js_ie = $jsfiles['js_ie'];
	  
	  if(isset($js_ie['ie-7']) && is_array($js_ie['ie-7']) && count($js_ie['ie-7']) > 0)
	  {	?>
	    <!--[if IE 7]>
<?php	    foreach($js_ie['ie-7'] as $ie7)
	    {	?>
	      <script type="text/javascript" src="<?php echo $this->config->item('admin_js_path').$ie7;?>"></script>
<?php	    }	?>
	    <![endif]-->
<?php	  }
	  
	  if(isset($js_ie['ie-8']) && is_array($js_ie['ie-8']) && count($js_ie['ie-8']) > 0)
	  {	?>
	    <!--[if IE 8]>
<?php	    foreach($js_ie['ie-8'] as $ie8)
	    {	?>
	      <script type="text/javascript" src="<?php echo $this->config->item('admin_js_path').$ie8;?>"></script>
<?php	    }	?>
	    <![endif]-->
<?php	  }
	}


        if(count($jsfiles['js_external']) > 0)
        {
                foreach($jsfiles['js_external'] as $external)
		{       ?>
		        <script type="text/javascript" src="<?php echo $external;?>"></script>
<?php		}
        } 
        
	$_js_scripts = array();
	$isset_js_scripts = false;
	if(isset($js_scripts) && is_array($js_scripts) && count($js_scripts) > 0)
	{
		$_js_scripts = $js_scripts;
		$isset_js_scripts = true;
	}
	
	if(is_array($jsfiles['js_scripts']) && count($jsfiles['js_scripts']) > 0 && !$isset_js_scripts)
	{
		$_js_scripts = $jsfiles['js_scripts'];
	}
	else if(is_array($jsfiles['js_scripts']) && count($jsfiles['js_scripts']) > 0 && $isset_js_scripts)
	{
		$_js_scripts = array_merge($jsfiles['js_scripts'], $js_scripts);
	}
	
	if(count($_js_scripts) > 0)
	{
		foreach($_js_scripts as $script)
		{	?>
			<script type="text/javascript" src="<?php echo $this->config->item('admin_script_path').$script;?>"></script>
  <?php }
  
  
	} ?>
