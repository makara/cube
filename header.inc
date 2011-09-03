<div id='top'>
  <div id='page-title' class='limiter clearfix'>
    <?php if (!empty($main_menu)) : ?>
      <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
    <?php endif; ?>
    <?php print render($title_prefix); ?>
    <h1 class='page-title <?php print $page_icon_class ?>'>
      <?php if (!empty($page_icon_class)): ?><span class='icon'></span><?php endif; ?>
      <?php if (!empty($title)) print $title ?>
    </h1>
    <?php print render($title_suffix); ?>
  </div>
  <div id='branding'><div class='limiter clearfix'>
    <?php if (!empty($user_menu)) : ?>
      <?php print theme('links', array('links' => $user_menu, 'attributes' => array('class' => 'links user-menu'))) ?>
    <?php endif; ?>
    <div class='breadcrumb clearfix'><?php print $breadcrumb ?></div>
  </div></div>
</div>

<?php if (!empty($primary_local_tasks) || !empty($action_links)): ?>
  <div id='tabs'>
    <?php if (!empty($primary_local_tasks)): ?>
      <div class='page-tabs limiter clearfix'>
        <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
      </div>
    <?php endif; ?>
    <?php if (!empty($secondary_local_tasks)): ?>
      <div class='page-tabs limiter clearfix'>
        <ul class='secondary-tabs links clearfix'><?php print render($secondary_local_tasks) ?></ul>
      </div>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <div class='page-tabs limiter clearfix'>
        <ul class='secondary-tabs links clearfix'><?php print render($action_links) ?></ul>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
