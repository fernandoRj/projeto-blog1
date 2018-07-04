<?php
   /*
   Template Name: home-blog
   */
   ?>
<?php get_header();?>
<div class="container">
   <div class="img-de-fundo">
       
       
     
         <div class="row noticias">
            <div class="col-1"></div>
            <div class="imgnt12 col-md-5">
               <div class="row">
                  <div class="img1 col-12">
                     <div class="row">
                         
     <?php if ( have_posts() ) :the_post(); ?>
                       
                      
                      
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('galeria'); ?>  </a>
                        <div class="overlay">
                 <div class="legenda-blog">
                              <span class="titulo-destaque-4"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></span> 
							  

                           
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="imgnt1 col-md-5">
               <div class="row">
                  <div class="img2 col-12">
                     <div class="row">
                     <?php the_post();?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('galeria1'); ?>  </a>
                        <div class="overlay">
                          <div class="legenda-blog">
                              <span class="titulo-destaque-4"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></span> 
                           
                           </div>
                        </div>
                     </div>
                    
				
                  </div>
               </div>
			   
               <div class="row imgbxo">
                  <div class="img3 col-6">
                     <div class="row">
                        <?php the_post();?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('galeria2'); ?>  </a>
                        <div class="overlay">
                          <div class="legenda-blog">
                              <span class="titulo-destaque-4"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></span> 
                           
                           </div>
                        </div>
                     </div>
                
                  </div>
                  <div class="img4 col-6">
                     <div class="row">
                        <?php the_post();?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('galeria2'); ?>  </a>
                        <div class="overlay">
                           <div class="legenda-blog">
                              <span class="titulo-destaque-4"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></span> 
                           
                           </div>
                        </div>
                           <?php endif; ?>

                     </div>
                  </div>
               </div>
			   </div>
             
			   </div>
			    <div class="col-1"></div>
			   </div>
			     </div>
    
         
     
  
  
 
   <div class="container">
<div class="corpo-blog">

  
      <div class="row linha45">
         <div class="principal col-md-8 col-sm-12 col-12">
       
            <?php while ( have_posts() ) : the_post();?>
            <div class="noticiasbg">
               <div class="row">
                  <div class="ftblg col-md-12 col-lg-6">
                     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('noticias-blog'); ?>  </a>
                     <div class="overlay">
                        <div class="text"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Leia Mais</a></div>
                     </div>
                  </div>
                  <div class="txtblg col-md-12 col-lg-6">
                     <span class="post-titulo"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <br>
                     <p><?php the_Excerpt()?> </p>
                     <span class="entry-date"><?php echo get_the_date(); ?></span>
					 <span class="ctrname"><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?></span>
                  </div>
               </div>
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
            <!-- pagination here -->
            <?php wp_reset_postdata(); ?>
         </div>
         <div class="barra-lateral col-md-4 col-sm-12 col-12" id="teste123">
            <?php get_sidebar()?>
         </div>
      </div>
   </div>
</div>

<div class="row">
<div class="fundo col-12">

<?php get_footer('blog')?>
</div>
</div>



