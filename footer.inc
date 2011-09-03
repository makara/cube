<?php if (!empty($feed_icons) || !empty($page['footer'])): ?>
<div id='footer' class='limiter clear-block'>
  <?php if (!empty($feed_icons)): ?>
    <div class='feed-icons clear-block'>
      <label><?php print t('Feeds') ?></label>
      <?php print $feed_icons ?>
    </div>
  <?php endif; ?>
  <?php print render($page['footer']) ?>
</div>
<?php endif; ?>
