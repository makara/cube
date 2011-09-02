<?php if (!empty($page['help'])): ?>
<div id='page-help'><div class='limiter clear-block'>
  <?php print render($page['help']) ?>
</div></div>
<?php endif; ?>

<div id='top'>
  <div id='page-title' class='limiter clear-block'>
    <?php if (!empty($main_menu)) : ?>
      <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
    <?php endif; ?>
    <?php print render($title_prefix); ?>
    <h1 class='page-title <?php print $page_icon_class ?>'>
      <?php if (!empty($page_icon_class)): ?><span class='icon'></span><?php endif; ?>
      <?php if ($title) print $title ?>
    </h1>
    <?php if ($action_links): ?>
      <ul class='action-links links clearfix'><?php print render($action_links) ?></ul>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  </div>
  <div id='branding'><div class='limiter clear-block'>
    <div class='breadcrumb clear-block'><?php print $breadcrumb ?></div>
  </div></div>
</div>

<?php if ($primary_local_tasks): ?>
  <div id='tabs'>
    <div class='page-tabs limiter clear-block'>
    <?php if ($primary_local_tasks): ?>
      <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
    <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<div id='page' class='clear-block limiter page-content'>
  <?php if ($show_messages && $messages): ?>
    <div id='console' class='clear-block'><?php print $messages; ?></div>
  <?php endif; ?>

  <div id='content'>
    <?php if (!empty($page['content'])): ?>
      <div class='content-wrapper clear-block'><?php print render($page['content']) ?></div>
    <?php endif; ?>
  </div>
</div>

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
