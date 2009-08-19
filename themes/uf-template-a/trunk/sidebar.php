    <div id="sidebar">
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

<?php     /* End navigation */ ?>

<?php     /* End homepage sidebar */ ?>

<?php else: ?>

<?php     /* Subpage sidebar */ ?>

<?php     /* Category archives */ ?>
        <div id="priNav">
        <h2>Primary Navigation</h2>
            <ul>
<?php     if (function_exists('uf_page_list')): ?>
<?php         uf_page_list(); ?>
<?php     endif; ?>
            </ul>
    </div>

<?php     /* End category archives */ ?>

<?php     /** Date archives */ ?>

<?php     /* End date archives */ ?>

<?php     /* End subpage sidebar */ ?>
<?php endif; ?>

	</div><!-- #sidebar -->
