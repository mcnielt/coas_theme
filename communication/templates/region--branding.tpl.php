<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
      <?php if ($logo_img): ?>
      <div class="logo-img"><a href="http://www.missouri.edu">
        <?php print $logo_img; ?></a>
      </div>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
      <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
      <hgroup class="site-name-slogan<?php print $class; ?>">  
        <?php if ($site_name): ?>
        <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
        <?php if ($is_front): ?>        
        <h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
        <?php else: ?>
        <h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
        <?php endif; ?>
        <?php endif; ?>
        
        <?php if ($site_slogan): ?>
        <?php $class = $site_slogan_hidden ? ' element-invisible' : ''; ?>
        <h6 class="site-slogan<?php print $class; ?>"><a href="http://www.missouri.edu"><?php print $site_slogan; ?></a></h6>
        <?php endif; ?>
      </hgroup>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>

<div class="mobile-menu-toggle-container">
    <a id="mobile-menu-toggle" class="anchor-link" href="#mobile-nav">
        <div></div>
        <div></div>
        <div></div>
    </a>
</div>
            
<script type="text/javascript">
    function changeClassMobile()
    {
        if ( document.getElementById("page").className.match(/(?:^|\s)mobile-menu(?!\S)/) ){
			document.getElementById("page").className =
   document.getElementById("page").className.replace
      ( /(?:^|\s)mobile-menu(?!\S)/g , '' )
		} else {
			document.getElementById("page").className += " mobile-menu";
		}
    }
	
	
	/* accordion */
	function accordion()
	{
			var pageContent = document.getElementById("page");
			var courseTitles = pageContent.querySelectorAll(".accordion");
			if(courseTitles.length > 0) {
				
					for(var i=0; i<courseTitles.length; i++)
					{
						var clickTitles = courseTitles[i].querySelectorAll("*");
						clickTitles[0].addEventListener("click", function(){
									if (this.className.indexOf(' contentactive') > -1) {
										this.className = this.className.replace(' contentactive','');
									} 
									else {
										this.className = this.className + ' contentactive';
									}
						}, false);
				}
				
			} else {
			}
			
	}
	

    window.onload = function()
    {
        document.getElementById("mobile-menu-toggle").addEventListener( 'click' , changeClassMobile );
		accordion();
    }
</script>
