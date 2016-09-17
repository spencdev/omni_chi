<div<?php print $attributes; ?>>
  <div class="header-wrap">
    <div class="l-constrained">
  <header class="l-header" role="banner">
	   <?php print render($page['notice']); ?>
	   <?php print render($page['user_first']); ?>
	   <?php print render($page['user_second']); ?>

     <div class="branding-wrap">
       <div class="l-branding">
         <?php if ($logo): ?>
           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
         <?php endif; ?>

         <?php if ($site_name || $site_slogan): ?>
           <?php if ($site_name): ?>
             <h1 class="site-name">
               <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
             </h1>
           <?php endif; ?>

           <?php if ($site_slogan): ?>
             <h2 class="site-slogan">sd<?php print $site_slogan; ?></h2>
           <?php endif; ?>
         <?php endif; ?>

         <?php print render($page['branding']); ?>
       </div>
     </div>
            <?php print render($page['header']); ?>

  </header>
  </div>
</div>
<div class="nav-wrap">
  <div class="l-constrained">
  <?php print render($page['navigation']); ?>
</div>
</div>

<!--custom made welcome banner for acm theme-->

<?php print render($title_prefix); ?>
<?php if ($title): ?>
  <h1><?php print $title; ?></h1>
<?php endif; ?>
  <?php print render($title_suffix); ?>

    <?php print render($page['highlighted']); ?>

  <div class="l-main l-constrained">

    <div class="l-content" role="main">

      <?php print $breadcrumb; ?>
      <?php print render($page['help']); ?>

      <a id="main-content"></a>



      <?php print $messages; ?>
    <?php print render($tabs); ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <?php if ($page['lower']): ?>
    <section class="l-lower" role="region">
       <div class="l-constrained">

	     <?php print render($page['lower']); ?>
       </div>
    </section>
  <?php endif; ?>
<div class="footer-wrap">

  <footer class="l-footer" role="contentinfo">

    <div class="l-constrained">
       <?php print render($page['footer']); ?>
	   <?php print render($page['footer_first']); ?>
	   <?php print render($page['footer_second']); ?>
	   <?php print render($page['footer_third']); ?>
	   <?php print render($page['footer_fourth']); ?>
	   <?php print render($page['footer_notice']); ?>
  </div>
  </footer>
</div>
</div>
