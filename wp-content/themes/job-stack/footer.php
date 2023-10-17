<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package job_stack
 */

$job_stack_options = job_stack_theme_options();

$show_prefooter = $job_stack_options['show_prefooter'];

?>

<footer id="colophon" class="site-footer">

	    <section class="footer-sec">
	        <div class="container__footer">
	            <div class="footer__row">
					<div class="footer__block">
						<h1 class="footer__block-title">Работадателям</h1>
						<a href="#">Тарифы и услуги</a> <br>
						<a href="#">Пользовательское соглашение</a><br>
						<a href="#">Публичный договор</a><br>
						<a href="#">Реклама на сайте</a><br>
					</div>
					<div class="footer__block">
						<h1 class="footer__block-title">Соискателям</h1>
						<a href="#">Тарифы и услуги</a><br>
						<a href="#">Пользовательское соглашение</a><br>
						<a href="#">Публичный договор</a><br>
						<a href="#">Реклама на сайте</a><br>
					</div>
					<div class="footer__block">
						<h1 class="footer__block-title">Правила и документы</h1>
						<a href="#">Тарифы и услуги</a><br>
						<a href="#">Пользовательское соглашение</a><br>
						<a href="#">Публичный договор</a><br>
						<a href="#">Реклама на сайте</a><br>
					</div>
					<div class="footer__block">
						<h1 class="footer__block-title">Помощь и обратная связь</h1>
						<a href="#">Тарифы и услуги</a><br>
						<a href="#">Пользовательское соглашение</a><br>
						<a href="#">Публичный договор</a><br>
						<a href="#">Реклама на сайте</a><br>
					</div>
	                    
	            </div>
	        </div>
	    </section>
	



		<div class="site-info">
		<p>
					<span><a target="_blank" rel="nofollow"
                       href="<?php echo esc_url('https://www.flawlessthemes.com/theme/job-stack-best-jobboard-wordpress-theme/'); ?>"><?php esc_html_e('Job Stack' , 'job-stack'); ?></a><?php esc_html_e(' By Flawless Themes.' , 'job-stack'); ?> <?php esc_html_e('Powered By WordPress', 'job-stack');
             ?></span>
                </p> 
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
