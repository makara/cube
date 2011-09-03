<?php include('header.inc'); ?>

<?php if (!empty($page['header'])): ?>
  <div id='header' class='limiter clearfix'><?php print render($page['header']) ?></div>
<?php endif; ?>

<div id='page' class='clearfix limiter page-content'>
  <?php if ($show_messages && $messages): ?>
    <div id='console' class='clearfix'><?php print $messages; ?></div>
  <?php endif; ?>
  <div id='content'>
    <?php if (!empty($page['content'])): ?>
      <div class='content-wrapper clearfix'><?php print render($page['content']) ?></div>
    <?php endif; ?>
  </div>
  <div id='left' class='clearfix'>
    <?php if (!empty($page['sidebar_first'])) print render($page['sidebar_first']) ?>
  </div>
  <div id='right' class='clearfix'>
    <?php if (!empty($page['sidebar_second'])) print render($page['sidebar_second']) ?>
  </div>
</div>

<?php include('footer.inc'); ?>
