
<div class="extra-wrapper">
    <?php if (!empty($page['sidebar_extra'])): ?>
        <div class="sidebar-extra-wrapper">
          <div class="sidebar-extra">
              <?php print render($page['sidebar_extra']); ?>
          </div>
        </div>
    <?php endif; ?>
    <div class="page-content-wrapper">

        <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

          <?php if (!empty($page['sidebar_extra'])): ?>
              <a class="btn btn-link pull-left sidebar-extra-toggle"><span class="glyphicon glyphicon-th-list"></span></a>
          <?php endif; ?>

          <div class="container">
            <div class="navbar-header">
              <?php if ($logo): ?>
              <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
              <?php endif; ?>

              <?php if (!empty($site_name)): ?>
              <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              <?php endif; ?>

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
              <div class="navbar-collapse collapse">
                <nav role="navigation">
                  <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($secondary_nav)): ?>
                    <?php print render($secondary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($page['navigation'])): ?>
                    <?php print render($page['navigation']); ?>
                  <?php endif; ?>
                </nav>
              </div>
            <?php endif; ?>
          </div>
        </header>

        <?php print $messages; ?>

        <?php if (!empty($site_slogan)): ?>
            <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php if (!empty($page['yamm'])): ?>
          <div class="navbar yamm">
            <div id="navyamm" class="nav-collapse container">
              <ul class="nav navbar-nav">
                <?php print render($page['yamm']); ?>
              </ul>
            </div>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['mapas'])): ?>
          <div class="mapas-wrapper">
             <div class="mapas-collapse mapax collapse">
               <?php print render($page['mapas']); ?>
             </div>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['slider'])): ?>
          <div id="slideshow_container">
            <?php print render($page['slider']); ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <?php if (!empty($breadcrumb)): ?>
          <div class="breadcrumb">
            <div class="container">
              <?php print render($breadcrumb); ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="main-container container">

          <?php if (!empty($page['sidebar_first'])): ?>
            <aside class="<?php print $sidebar_first_width; ?>" role="complementary">
              <?php print render($page['sidebar_first']); ?>
            </aside>
          <?php endif; ?>

          <section class="<?php print $content_width; ?>">

              <?php if (!empty($page['filters'])): ?>
                <div class="filters-wrapper">
                  <div class="filters collapse">
                    <?php print render($page['filters']); ?>
                  </div>
                </div>
              <?php endif; ?>

              <a id="main-content"></a>
              <?php print render($title_prefix); ?>
              <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>

              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
              <?php endif; ?>

              <?php if (!empty($page['help'])): ?>
                <div class="well"><?php print render($page['help']); ?></div>
              <?php endif; ?>

              <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

              <?php if (!empty($page['content_top'])): ?>
                <div id="page-top">
                  <?php print render($page['content_top']); ?>
                </div>
              <?php endif; ?>

              <?php if ($print_content): ?>
                <div id="content-inner">
                  <?php print render($page['content']); ?>
                </div>
              <?php endif; ?>

              <?php if (!empty($page['content_bottom'])): ?>
                <div id="page-bottom">
                  <?php print render($page['content_bottom']); ?>
                </div>
              <?php endif; ?>
          </section>

          <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="<?php print $sidebar_second_width; ?>" role="complementary">
              <?php print render($page['sidebar_second']); ?>
            </aside>
          <?php endif; ?>

        </div>

        <?php if (!empty($page['postscript_top'])): ?>
          <div id="postscript_top">
            <div class="content container">
            <?php print render($page['postscript_top']); ?>
            </div>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['postscript_bottom'])): ?>
          <div id="postscript_bottom">
            <div class="content container">
            <?php print render($page['postscript_bottom']); ?>
            </div>
          </div>
        <?php endif; ?>


        <footer class="footer">
            <div id="footer-inner" class="container">
            <?php print render($page['footer']); ?>
            </div>
        </footer>
    </div>
</div>
