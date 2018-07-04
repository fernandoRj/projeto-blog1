<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */
 ?>

  <?php get_header();?>





<div id="crppg">


<div class="container">
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>




<div class="row">



<div class="corpo-blog-1 col-12 col-md-8">

<div class="row">
<div class="col-xs-12">
<?php   

$value = rwmb_meta('icones2');
echo $value;



?>

</div>
</div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
 wpb_set_post_views(get_the_ID());
 ?>
 


<div class="txtsgl">






<div class="headersgl">
<h1><?php the_title()?></h1>



</div>




<div class="fotosgl">
<?php the_post_thumbnail('class => rounded mx-auto d-block'); ?>
</div>




<?php the_content()?>



</div>


	
	
 <?php endwhile; else : ?>



 <?php endif; ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 <div class="postrl">
 
 
 
 
   <div class="tags">
<?php echo get_the_tag_list ('<p> Tags:', ',', '</ p>');?>
</div>

<div class="row posts-page">
<div class="previuslk col-6">
<span class="desc-anterior">Post anterior</span>
<span class="link-anterior"><?php next_post_link ('<h4>%link </h4>'); ?></span>

</div>



<div class="seguintelk col-6">
<span class="desc-seguinte">Post seguinte</span>
<span class="link-seguinte"><?php previous_post_link ('<h4>%link </h4>'); ?></span>
</div>
</div>
 
 
 
 
 
 
 
   <div class="row">
 <div class="titulodd col-10">
 
<h3><span>posts relacionados</span></h3>
</div>
 
 </div>
 
 <div class="pstrlc">
 <div class="row">
<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {

$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
		
		
		<div class="relacionados col-md-4">
		<div class="ftrlc">
		 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  <?php the_post_thumbnail('noticias-blog'); ?></a>
		</div>
		<div class="txtrlc">
		 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title()?></h4></a>
		</div>
		</div>
		
		
<?php
endwhile;
}
wp_reset_query();
}
?>
 </div>
 </div>
</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div>
 


 
 
 
 
 
 
 
 
 
 
 

 
 







		 

  
  <div class="barra-lateral1 col-md-4 col-sm-12 col-12" id="teste123">
            <?php get_sidebar()?>
         </div>
 
 </div>
 
 
 

		 
		 
 </div>
 
 
 </div>
 
 
 
     <div class="container">
	 <?php comments_template(); ?>
	 </div>
<?php get_footer('blog');?>

</div>