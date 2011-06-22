    <div id="sidebar">
<?php if ( has_nav_menu( 'primary' ) ): ?>
<?php     /* Navigation is defined in WordPress backend using menu editor so use that instead of the default theme navigation */ ?>
    <div id="priNav">
        <h2>Primary Navigation</h2>
<?php     wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'false' ) ); ?>
    </div>
<?php else: ?>

<?php     /* End WordPress defined menu */ ?>
<?php if (is_home()): ?>
<?php     /* Homepage sidebar */ ?>
    <div id="priNav">
        <h2>Primary Navigation</h2>
            <ul>
<?php     if (function_exists('uf_page_list')): ?>
<?php         uf_page_list(); ?>
<?php     endif; ?>
            </ul>
    </div>

<?php     /* End homepage sidebar */ ?>

<?php else: ?>

<?php     /* Subpage sidebar */ ?>
        <div id="priNav">
        <h2>Primary Navigation</h2>
            <ul>
<?php     if (function_exists('uf_page_list')): ?>
<?php         uf_page_list(); ?>
<?php     endif; ?>
            </ul>
    </div>

<?php     /* End subpage sidebar */ ?>

<?php endif; ?>
<?php endif; ?>

     </div><!-- #sidebar -->
