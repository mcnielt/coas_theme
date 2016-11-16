<?php
/**
*Processing for the region templates.
*/
function communication_alpha_process_region(&$vars) {
  $theme = alpha_get_theme();
  //Variables for branding region
   $vars['main_menu'] = $theme->page['main_menu'];
   $vars['front_page'] = $theme->page['front_page'];

}

