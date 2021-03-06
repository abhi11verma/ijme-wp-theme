<?php get_header(); ?>

<div class="row">
    <div class="col-md-9">
        <div id="main">
            <h4>Search</h4>
            <div id="content">
                <?php get_template_part('advance-search-form'); ?>
                <?php 
                if ( have_posts() ) {
                    get_template_part('search-results');
                }
                else {
                    ?>
                    <h3>No Results found</h3>
                    <?php
                }
                ?>
            
            </div>
        </div>
    </div>
	<div class="clearfix visible-xs visible-sm"></div>
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>