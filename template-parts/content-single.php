<!-- Page Content -->

<?php get_template_part( 'template-parts/content', 'banner' ); ?>

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <?php if( has_post_thumbnail() ): ?>
                                    <div class="blog-thumb">
                                        <?php
                                            the_post_thumbnail( 'full' );
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="down-content">
                                    <?php
                                        if( has_category() ){
                                            foreach((get_the_category()) as $category){
                                                echo '<span>'. $category->name."</span> ";
                                            }
                                        }
                                    ?>
                                    <?php
                                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                    ?>
                                    <ul class="post-info">
                                        <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"><?php the_author(); ?></a></li>
                                        <li><?php echo esc_html(date('M d, Y')); ?></li>
                                        <li><?php echo esc_html__( get_comments_number() . ' Comments', 'standpress' ); ?> </li>
                                    </ul>
                                    <hr>
                                    <?php 
                                        the_content();

                                        wp_link_pages(array(
                                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'standpress'),
                                            'after' => '</div>',
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                        ));

                                        if ( get_edit_post_link() ) :
                                            edit_post_link(
                                                sprintf(
                                                    wp_kses(
                                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                                        __( 'Edit <span class="screen-reader-text">%s</span>', 'standpress' ),
                                                        array(
                                                            'span' => array(
                                                                'class' => array(),
                                                            ),
                                                        )
                                                    ),
                                                    wp_kses_post( get_the_title() )
                                                ),
                                                '<span class="edit-link">',
                                                '</span>'
                                            );
                                        endif;
                                    ?>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <?php 
                                                        $post_tags = get_the_tags();
                                                        $separator = ' , ';
                                                        $output = '';
                                                    
                                                        if ( ! empty( $post_tags ) ) {
                                                            foreach ( $post_tags as $tag ) {
                                                                $output .= '<li><a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . $tag->name . '</a></li>' . $separator;
                                                            }
                                                        }
                                                    
                                                        echo trim( $output, $separator );
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <?php
                                the_post_navigation(
                                    array(
                                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'standpress' ) . '</span> <span class="nav-title">%title</span>',
                                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'standpress' ) . '</span> <span class="nav-title">%title</span>',
                                    )
                                );
                            ?>
                        </div>
                        <div class="col-12">
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>