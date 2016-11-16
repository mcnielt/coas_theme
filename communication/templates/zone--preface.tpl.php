<?php 
/**
 * @file
 * Alpha's theme implementation to display a zone.
 */
?>

 

<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>
  <div id="zone-preface-wrapper"><div<?php print $content_attributes;?>>
    <?php print $content; ?></div>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
