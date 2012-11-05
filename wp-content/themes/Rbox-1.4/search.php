<?php get_header(); ?>

<div id="subhead_container">

			<div id="subhead">
		
		<h1><?php printf( __( 'Search Results for: %s', 'Rbox' ), '' . get_search_query() . '' ); ?></h1>
			
			</div>
			
		</div>


	<!--inside container-->
	<div id="content_container">
		<div id="home-container">
		<div id="content">
		
			<?php get_sidebar(); ?>
            
			<div id="right-col">
            
         <?php   // search only posts

				global $wp_query;
				$args = array_merge( $wp_query->query, array( 'post_type' => 'post' ) );
				query_posts( $args );?>


			<?php if ( have_posts() ) : ?>
				
				<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>

					<div class="post-head-notfound">
					
						<h1><?php _e( 'Nothing Found', 'Rbox' ); ?></h1>
					
					</div><!--head end-->
					<p><?php _e( '<!--:en-->Sorry, but nothing matched your search criteria. Please try again with some different keywords.<!--:--><!--:zh-->查無相關資料 !建議您試試看不同的關鍵字再查詢一次。<!--:-->
					', 'Rbox' ); ?></p>
					
<?php endif; ?>

</div> <!--left-col end-->



			</div> 
		</div> <!--content end-->
	</div><!--home-container end-->
</div>
<!--wrapper end-->

<?php get_footer(); ?>
