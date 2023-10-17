<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package job_stack
 */

get_header();
?>
<div id="content" class="vb-section-content section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

						<?php
					

							get_template_part( 'template-parts/content', 'page' );

						?>

					</main><!-- #main -->
                </div>
            </div>

            
        </div>
    </div>
</div>
<?php
get_footer();
