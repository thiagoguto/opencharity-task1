<header class="shadow">
    <div class='container'>
        <div class='row navbar'>
            <div class='col-1-3 brand'>
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <nav class='col-2-3'>
                <?php if ($main_menu): ?>
                    <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'id' => 'main-menu',
                        'class' => array('navbar-menu', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                    )); ?>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>
<?php print render($page['hero']); ?>
<?php print render($page['event']); ?>
<?php print render($page['involved']); ?>
<?php print render($page['about']); ?>
<?php print render($page['blog']); ?>
<footer class="bg-secondary section text-center">
    <div class='container'>
        <?php print render($page['footer']); ?>
    </div>
</footer>
