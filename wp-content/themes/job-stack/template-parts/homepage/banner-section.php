<?php
$job_stack_options = job_stack_theme_options();

$banner_section_title = $job_stack_options['banner_title'];
$banner_desc = $job_stack_options['banner_desc'];
$banner_bg_image = $job_stack_options['banner_bg_image'];
$check_job          = in_array('wp-job-manager/wp-job-manager.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;

if(!empty($banner_bg_image)){
  $background_style = "style='background-image:url(".esc_url($banner_bg_image).")'";
}
else{
  $background_style = '';
}
?>

<section id="header-slider" class="header-slider" <?php echo wp_kses_post($background_style); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-content">
                    <div class="banner-wrap">

                        <?php
                        if ($banner_section_title)
                                echo '<h1>' . esc_html($banner_section_title) . '</h1>';
                                if ($banner_desc)
                                echo '<span>' . esc_html($banner_desc) . '</span>';
                            ?>
                    </div>
                    <?php
                   
                   if($check_job){
                      $terms = get_terms( array(
                          'taxonomy' => 'job_listing_category',
                          'hide_empty' => false,
                        ) );
                      
                        $regions = get_terms( array(
                          'taxonomy' => 'job_listing_region',
                          'hide_empty' => false,
                        ) );
                      
                        $job_region = get_option('job_manager_regions_filter');
                      
                        ?>
                        <div class="search-filter-wrap">
                          <form  class="form-inline" method="GET" action="<?php echo job_manager_get_permalink( 'jobs' ); ?>">
                          
                          <div class="filter-inputwrap">
                            
                          <div class="form-group">
                            <button type="submit" href="http://localhost/jobboard/jobs/" class="btn btn-primary">Ищите работу?</button>
                            </div>

                            <span><img src="http://localhost/jobboard/wp-content/uploads/2023/09/imgonline-com-ua-Resize-APc8n6iyiXVW-removebg-preview-e1694417009959.png" alt=""></span>
                            
                            <div class="form-group">
                            <button type="submit" href="http://localhost/jobboard/post-a-job/" class="btn btn-primary">Ищите сотрудников?</button>
                            </div>
                            

                           
                          </div>
                          
               
                          </form> 
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>