<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Joe_Cooper
 */
?>


<div id="portfolio" class="frontpage-container">
    <div class="sw-row">
        <div class="sw-header">
            <div class="spacer"></div>
            <div class="line"><hr></div>
            <div class="text">
                <h2>portfolio</h2></div>
        </div>
    </div>
    <div class="sw-row">
        <div class="sw-title">web</div>
        <div class="sw-item">
            <a href="cases-website/">
                <img src="wp-content/themes/joecooper/images/cases.svg">
                <p>CASES</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="nyc-bigapps/">
                <img src="wp-content/themes/joecooper/images/bigapps.svg">
                <p>NYC BigApps</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="civic-hall-labs/">
            <img src="wp-content/themes/joecooper/images/chl.svg">
            <p>Civic Hall Labs</p>
            </a>
        </div>
    </div>
    <div class="sw-row">
        <div class="sw-title">print</div>
        <div class="sw-item">
            <a href="blueprint-for-criminal-justice-reform/">
            <img src="wp-content/themes/joecooper/images/blueprint.svg">
            <p>Blueprint for Criminal Justice Reform</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="ati-reentry-coalition/">
            <img src="wp-content/themes/joecooper/images/atireentry.svg">
            <p>ATI/Reentry Coalition</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="cases-brochures">
            <img src="wp-content/themes/joecooper/images/brochures.svg">
            <p>CASES Brochures</p>
            </a>
        </div>
    </div>
   <!-- <div class="sw-row">
        <div class="sw-title">misc.</div>
        <div class="sw-item">
            <a href="/powerpoint-decks/">
                <img src="wp-content/themes/joecooper/images/powerpoint.svg">
                <p>Powerpoint Decks</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="/data-visualization/">
                <img src="wp-content/themes/joecooper/images/data.svg">
                <p>Data Visualization</p>
            </a>
        </div>
        <div class="sw-item">
            <a href="/illustrations/">
            <img src="wp-content/themes/joecooper/images/illustrations.svg">
            <p>Illustrations</p>
            </a>
        </div>
    </div>
   -->

</div><!-- .frontpage-container -->
</main>
<div id="contact" class="contact-container">
    <div class="contact-row">
        <div class="contact-header">
            <div class="spacer"></div>
            <div class="line"><hr></div>
            <div class="text">
                <h2>contact</h2></div>
        </div>
    </div>
    <div class="main-contact-container">
    <div class="spacer">
    </div>
        <div class="main-contact">
            <?php echo do_shortcode('[caldera_form id="CF56dcbb1113393"]'); ?>
        </div>
    </div>
</div>

