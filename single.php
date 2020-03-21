<?php get_header(); ?>

<div class="content-and-sidebar-wrapper">

  <div class="posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article role="main" class="post">

        <h1 class="post-heading">
          <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>

      </article>

    <?php endwhile; ?>
    <?php endif; ?>


    <?php if (get_post_meta(get_the_ID(), '1', true)) { ?>
      <div class="you-can-download">
        Also, you can download <a class="link link_size_big" href="//trainersforgames.com<?php echo (get_post_meta(get_the_ID(), '1', true)) ?>" target="_blank" rel="nofollow noopener">trainers</a> for this game
      </div>
    <?php } else {} ?>

    <div class="google-ads-and-comments-wrapper">
      <!-- под новостью savesforgames -->
      <ins class="adsbygoogle"
        style="display:inline-block;width:468px;height:60px"
        data-ad-client="ca-pub-3398097190333973"
        data-ad-slot="6012890715">
      </ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

      <div class="leave-a-comment">Comments:</div>
      <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
        endif;
      ?>
    </div>

  </div>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
