<div id="<?php echo $step_format ?>-<?php the_ID(); ?>"
	<?php post_class('step wordimpress-step ' . $step_class . ' format-'. $step_format ); ?>
	<?php if( !empty( $data_x ) ) { echo 'data-x="' . $data_x . '"'; } else { echo 'data-x="0"'; } ?>
	<?php if( !empty( $data_y ) ) { echo 'data-y="' . $data_y . '"'; } else { echo 'data-y="0"'; } ?>
	<?php if( !empty( $data_z ) ) { echo 'data-z="' . $data_z . '"'; } ?>
	<?php if( !empty( $data_rotate_x ) ) { echo 'data-rotate-x="' . $data_rotate_x . '"'; } ?>
	<?php if( !empty( $data_rotate_y ) ) { echo 'data-rotate-y="' . $data_rotate_y . '"'; } ?>
	<?php if( !empty( $data_rotate_z ) ) { echo 'data-rotate-z="' . $data_rotate_z . '"'; } ?>
	<?php if( !empty( $data_scale ) ) { echo 'data-scale="' . $data_scale . '"'; } ?>
>

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?>