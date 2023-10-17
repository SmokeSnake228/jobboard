<?php
function custom_excerpt_length($length) {
    return 15; // Установите желаемое количество символов
}
add_filter('excerpt_length', 'custom_excerpt_length');


$query = new WP_Query(
    [
        'post_type' => 'post',
        'post_status' => array('publish'),
        'posts_per_page' => 1,
        'field' => 'ID',
        'cat' => array('41'),
        'orderby' => 'date'
    ]
);
if ($query->have_posts()):
    global $post;
    $id = $post->ID;
    ?>
    <section class="blog__advice">
        <h2 class="blog__title">Советы соискателям</h2>
        <div class="blog__container">
            <article class="blog__main-item">
                <?php
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="extra__item">
                        <a href="<?php the_permalink(); ?>" class="extra__link">
                            <h2 class="extra__title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="extra__item">
                                <a class=" blog__main-img" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail('', 'large', array('class' => 'extra__img')); ?></a>
                            </div>
                        </a>
                        <p class="post__content">
                            <?php the_excerpt('custom_excerpt_length') ?>
                        </p>
                        <span class="date">
                            <?php the_time('j F Y'); ?>
                        </span>
                    </div>

                    <?php
                endwhile;
                ?>
            </article>
            <div class="blog__grid-block">
                <?php $query = new WP_Query(
                    [
                        'post_type' => 'post',
                        'post_status' => array('publish'),
                        'posts_per_page' => 4,
                        'offset' => 0,
                        'field' => 'ID',
                        'cat' => array('40'),
                        'orderby' => 'date',
                    ]
                ); ?>
                <?php if ($query->have_posts()):
                    ?>
                    <?php
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div  class="post__item">
                            <div class="post__header">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail('', 'medium', array('class' => 'post__img')); ?></a>
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<a style="display:none;" href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="post__badge blue-badge">' . esc_html($categories[0]->name) . '</a>';
                                } ?>
                            </div>
                            <div class="post__body">
                                <a href="<?php echo get_permalink(); ?>" class="post__link">
                                    <h3 class="post__title">
                                        <?php the_title(); ?>
                                    </h3>

                                </a>
                                <p class="post__content">
                                    <?php the_excerpt() ?>
                                </p>
                                <span class="date">
                                    <?php the_time('j F Y'); ?>
                                </span>
                                
                            </div>
                            
                        </div>
                        <?php
                    endwhile;
                    ?>

                <?php endif;
                wp_reset_query(); ?>

            </div>
        </div>
        </div>
    <?php endif; ?>
    </div>
</section>
<!--  ЭТО БЛОГ ДЛЯ -->
<?php
$query = new WP_Query(
    [
        'post_type' => 'post',
        'post_status' => array('publish'),
        'posts_per_page' => 1,
        'field' => 'ID',
        'cat' => array('42'),
        'orderby' => 'date'
    ]
);
if ($query->have_posts()):
    global $post;
    $id = $post->ID;
    ?>
    <section class="blog__advice">
        <h2 class="blog__title">Советы работадателям</h2>
        <div class="blog__container">
            <article class="blog__main-item">
                <?php
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="extra__item">
                        <a href="<?php the_permalink(); ?>" class="extra__link">
                            <h2 class="extra__title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="extra__item">
                                <a class=" blog__main-img" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail('', 'large', array('class' => 'extra__img')); ?></a>
                            </div>
                        </a>
                        <p class="post__content">
                            <?php the_excerpt('custom_excerpt_length') ?>
                        </p>
                        <span class="date">
                            <?php the_time('j F Y'); ?>
                        </span>
                    </div>

                    <?php
                endwhile;
                ?>
            </article>
            <div class="blog__grid-block">
                <?php $query = new WP_Query(
                    [
                        'post_type' => 'post',
                        'post_status' => array('publish'),
                        'posts_per_page' => 4,
                        'offset' => 0,
                        'field' => 'ID',
                        'cat' => array('43'),
                        'orderby' => 'date',
                    ]
                ); ?>
                <?php if ($query->have_posts()):
                    ?>
                    <?php
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div  class="post__item">
                            <div class="post__header">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail('', 'medium', array('class' => 'post__img')); ?></a>
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<a style="display:none;" href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="post__badge blue-badge">' . esc_html($categories[0]->name) . '</a>';
                                } ?>
                            </div>
                            <div class="post__body">
                                <a href="<?php echo get_permalink(); ?>" class="post__link">
                                    <h3 class="post__title">
                                        <?php the_title(); ?>
                                    </h3>

                                </a>
                                <p class="post__content">
                                    <?php the_excerpt() ?>
                                </p>
                                <span class="date">
                                    <?php the_time('j F Y'); ?>
                                </span>
                                
                            </div>
                            
                        </div>
                        <?php
                    endwhile;
                    ?>

                <?php endif;
                wp_reset_query(); ?>

            </div>
        </div>
        </div>
    <?php endif; ?>
    </div>
</section>