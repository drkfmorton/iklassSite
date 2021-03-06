<?php
/**
 * Template for displaying standard post format item content
 */

$first_video = tm_get_first_video();
?>
<?php if ( $first_video ) : ?>
<div class="tm_main_video_container">
	<?php echo $first_video; ?>
</div>
<?php endif; ?>
<h4 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4>

<?php echo $this->get_post_content(); ?>
<div class="caption">
	<?php echo $this->get_template_part( 'blog/meta.php' ); ?>
	<?php echo $this->get_more_button(); ?>
</div>
