<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StandPress
 */

?>

<div class="col-lg-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single blog post item start here  -->
		<div class="blog-post">
			<?php if( has_post_thumbnail() ): ?>
				<div class="blog-thumb">
					<?php standpress_post_thumbnail(); ?>
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
					<li><a href="<?php the_permalink(); ?>"><?php echo esc_html__( get_comments_number() . ' Comments', 'standpress' ); ?> </a></li>
				</ul>
				<?php 
					the_excerpt();

					if( has_tag() ):
				?>
				<div class="post-options">
					<div class="row">
						<div class="col-lg-12">
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
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- Single blog post item Stop here -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> 