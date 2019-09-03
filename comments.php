<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( _x( 'One Comment to &ldquo;%s&rdquo;', 'comments title' ), get_the_title() );
			} else {
				printf(
					_nx(
						'%1$s Comment to &ldquo;%2$s&rdquo;',
						'%1$s Comments to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ul',
					'short_ping'  => false,
          'reply_text'  => 'Reply',
          'format'      => 'html5',
				) );
			?>
		</ol>
    <?php 
		endif;
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
		<?php
		endif;
		comment_form();
		?>
</div>
