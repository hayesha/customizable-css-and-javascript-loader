<?php include_once(APPPATH.'views/common/header.php');  ?>

    <div id="navigation">
      <div id="navigation-inner">			
	
      </div> <!-- /#navigation-inner-->
    </div> <!-- /#navigation-->
    
    <div id="container">
      <div id="content" class="clearfix">
        <div id="content-inner">
          
          <div id="content-header">
            <div id="content-header-inner"> 
            
            <?php include_once (APPPATH.'views/common/message.php'); ?>
              <!-- <div id="breadcrumbs">
                <ul>
                  <li><a href="javascript:void(0);" title="Home">Home</a></li>
                  <li>&nbsp; >> &nbsp; Dashboard</li>
                </ul>
              </div> -->  <!-- /#breadcrumbs-->
              <div id="content-title">
               	<h1 class="title">Welcome to dynamic <strong>ScriptLoader</strong></h1>
              </div> <!-- /#content-title -->                                                        
              
            </div> <!-- /#content-header-inner-->
          </div> <!-- /#content-header-->
          
          <div id="content-area">
            <div id="content-area-inner">
               	<p>This demo illustrates an flexible way to manage the loading of external <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript files. This loading can be managed under three steps as follows.</p>
               	<ul>
               		<li>On the view.</li>
               		<li>Via the controller's construct - via the <strong>scriptloader.php</strong> config file. The CSS and JavaScript files can be loaded to the view by calling <code>$this->scriptloader->set_module_code('home', 'no-sidebars');</code> inside the construct of the controller class.   
               			 <ul>
               				<li>The first parameter will be used as the <strong>key</strong> to select the required block from <strong>scriptloader.php</strong>.</li>
               				<li>The second parameter will be used as the <strong>key</strong> to select the overall page layout structure, namely <i>no-sidebars</i>, <i>sidebar-left</i>, <i>sidebar-right</i> and <i>two-sidebars</i>.</li>
               			 </ul>
               		</li>
               		<li>Via the controller's action</li>
               	</ul>
               	<p>The <abbr title="Cascading Style Sheets">CSS</abbr> files are loaded inside the <abbr title="Hypertext Markup Language">HTML</abbr> head element while the JavaScript files are loaded as the last elements to the page, just before the closing tag of <abbr title="Hypertext Markup Language">HTML</abbr> body element. Additionally the facility is provided to load JavaScript file(s) inside the <abbr title="Hypertext Markup Language">HTML</abbr> head element after loading of the <abbr title="Cascading Style Sheets">CSS</abbr> files. Following is the organization of respecive <strong>key</strong> in the <strong>scriptloader.php</strong> config file.</p>
               	<dl>
               		<dt><strong><abbr title="Cascading Style Sheets">CSS</abbr></strong></dt>
               		<dd>css-&lt;<i>key</i>&gt; : Loading of <abbr title="Cascading Style Sheets">CSS</abbr> file(s) resides under assets/&lt;theme&gt;/css/ folder</dd>
               		<dd>css-&lt;<i>key</i>&gt;-3rd : Loading of <abbr title="Cascading Style Sheets">CSS</abbr> file(s) required for the 3rd party plugin resides under assets/&lt;theme&gt;/plugins/&lt;vendor plugin&gt;/ folder.</dd>
               		<dd>css-&lt;<i>key</i>&gt;-ie : Loading of <abbr title="Internet Explorer">IE</abbr> Web Browser version(6, 7, 8, 9) related <abbr title="Cascading Style Sheets">CSS</abbr> file(s) resides under assets/&lt;theme&gt;/css/ folder.</dd>
               		<dd>css-&lt;<i>key</i>&gt;-print : Loading of print formatting <abbr title="Cascading Style Sheets">CSS</abbr> file resides under assets/&lt;theme&gt;/css/ folder.</dd>
               		<dd>&nbsp;</dd>
               		<dt><strong>JavaScript</strong></dt>
               		<dd>js-&lt;<i>key</i>&gt; : Loading of the theme level JavaScript file(s) resides under assets/&lt;theme&gt;/js/ folder.</dd>
               		<dd>js-&lt;<i>key</i>&gt;-3rd : Loading of the JavaScript file(s) required for the 3rd party plugin resides under assets/&lt;theme&gt;/plugins/&lt;vendor plugin&gt;/ folder.</dd>
               		<dd>js-&lt;<i>key</i>&gt;-ie : Loading of <abbr title="Internet Explorer">IE</abbr> Web Browser version(6, 7, 8, 9) related JavaScript file(s) required for the 3rd party plugin resides under assets/&lt;theme&gt;/plugins/&lt;vendor plugin&gt;/ folder.</dd>
               		<dd>js-&lt;<i>key</i>&gt;-scripts : Loading of the JavaScript file(s) resides under application/script/ folder.</dd>
               		<dd>js-&lt;<i>key</i>&gt;-topjs : Loading of the JavaScript file(s) inside the <abbr title="Hypertext Markup Language">HTML</abbr> head element just after loading the <abbr title="Cascading Style Sheets">CSS</abbr> files.</dd>
               		<dd>js-&lt;<i>key</i>&gt;-external : Loading of the JavaScript file(s) from external <abbr title="Unified Resource Locator">URLs</abbr>.</dd>
               	</dl> 
            </div> <!-- /#content-area-inner-->
          </div> <!-- /#content-area-->
          
          <div id="content-bottom">
            <div id="content-bottom-inner">
              
            </div> <!-- /#content-bottom-inner-->
          </div> <!-- /#content-bottom-->
          
        </div> <!-- /#content-inner-->  
      </div> <!-- /#content-->
    </div> <!-- /#container-->
    
<?php include_once(APPPATH.'views/common/footer.php'); ?>
</body>
</html>
