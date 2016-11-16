<?php
$match = FALSE;

if (drupal_is_front_page()) {
  $match = TRUE;
}
if (!drupal_is_front_page()) {
  $match = FALSE;
}
return $match;
?> 

'visibility' => BLOCK_VISIBILITY_LISTED,
'pages' => array('<front>'),