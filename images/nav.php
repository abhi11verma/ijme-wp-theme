<nav id="site-navigation" class="navbar navbar-default" role="navigation">
    <div class="navheader">  
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
        </div>
        <!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
		<div class="hidden-xs hidden-sm">
        <?php
            wp_nav_menu( array(
                //'menu'              => 'primary',
                'theme_location'    => 'main',
                'depth'             => 4,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse dropnav',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</div>
		
		<div class="visible-xs visible-sm">
		<?php
            wp_nav_menu( array(
                'menu'              => 'Mobile Main Menu',
                //'theme_location'    => 'header',
                'depth'             => 4,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse dropnav',
                'container_id'      => 'bs-example-navbar-collapse-mobile',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</div>
        <?php
        /*
        wp_nav_menu( array( 
                'theme_location' 	=> 'main',
                'container' 		=> 'div',
                'container_class' 	=> 'collapse navbar-collapse',
                'container_id'    	=> 'main-navbar-collapse',
                'menu_class'      	=> 'nav navbar-nav',
                'menu_id'         	=> '',
                'echo'            	=> true,
                'fallback_cb'     	=> 'wp_page_menu',
                'before'          	=> '',
                'after'           	=> '',
                'link_before'     	=> '',
                'link_after'      	=> '',
                'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           	=> 0,
                'walker'          	=> ''
        ));
        */
        ?>
		<ul class="search_box">
			<a href="#" class="search-icon"><span class="search_icon"> </span></a>
			<form method="get" action="<?php echo site_url(); ?>" id="searchform" class="search-form" role="search" style="display: none;">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search" name="s" id="srch-term" type="text">
				<div class="input-group-btn">
					<button class="btn search-submit" type="submit">search</button>
				</div>
				</div>
			</form>
		</ul>
    </div>
	
</nav><!-- #site-navigation -->
<?php if(get_the_ID() == '16406' ){ ?>
	<?php $post   = get_post( 16974 );  ?>
	<div class="marquee-container" onmouseover="this.stop();" onmouseout="this.start();">
	<span class="red-badge">Announcements</span>
	<marquee onmouseover="this.stop();" onmouseout="this.start();" class="header-marquee"><img src="<?php echo get_template_directory_uri(); ?>images/tag-new-icon.gif"> <a href="http://ijme.in/announcement_call_for_nominations_ijme_ethics_award_2018" target="_blank">IJME Ethics Award 2018: Last date for sending nominations extended to 15 September 2018!</a>&nbsp;|&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/tag-new-icon.gif"> <a href="http://ijme.in/nbc-20140321/index.php/14th-w recb-india/index/pages/view/bursary" target="_blank">Bursary applications are live!</a>&nbsp;|&nbsp;<a href="http://ijme.in/nbc-20140321/index.php/14th-wcb-india/index/pages/view/online-payment" target="_blank">Congress registrations are live!</a>&nbsp;|&nbsp;<a href="http://ijme.in/announcements/three-openings-at-fmes-bioethics-centre-enabled-and-seeded-by-tata-trusts/" target="_blank">Vacancies at the all new FMES Bioethics Centre</a>&nbsp;|&nbsp;<a href="/../../nbc-20140321/index.php/14th-wcb-india/index/pages/view/accommodation" target="_blank">Joint 14th WCB and 7th NBC: Updated list of accommodations for Congress registrants to consider</a>&nbsp;|&nbsp;<a href="http://ijme.in/nbc-20140321/index.php/14th-wcb-india/index/pages/view/writing-case-reports-for-bioethics-journals" target="_blank">14th WCB and 7th NBC: Pre-congress session on Writing Case Reports for Bioethics Journal</a>&nbsp;|&nbsp;<a href="http://ijme.in/nbc-20140321/index.php/14th-wcb-india/index/pages/view/world-congress-of-bioethics-bengaluru-2018" target="_blank">14th WCB and 7th NBC: Pre-Congress session on Organ Donation and Transplantation in a world of inequality</a>&nbsp;|&nbsp;<a href="/nbc-20140321/index.php/14th-wcb-india/index/pages/view/pediatric-bioethics-in-india" target="_blank">14th WCB and 7th NBC: Pre-congress session on Pediatrics Bioethics in India</a>
	</marquee>
	</div>
<?php } ?>
