   <div class="img-de-fundo">
       
       
     
         <div class="row noticias">
            <div class="col-1"></div>
            <div class="imgnt12 col-md-5">
               <div class="row">
                  <div class="img1 col-12">
                     <div class="row">
                       
                        <?php   
                           $args = array( 'post_type' => 'post');
                           $mosaics = new WP_Query( $args ); ?>
                        <?php   while ($mosaics->have_posts()) : $mosaics->the_post(); ?>
                      
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
                     <?php $mosaics->the_post();?>
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
                        <?php $mosaics->the_post();?>
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
                        <?php $mosaics->the_post();?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">   <?php the_post_thumbnail('galeria2'); ?>  </a>
                        <div class="overlay">
                           <div class="legenda-blog">
                              <span class="titulo-destaque-4"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></span> 
                           
                           </div>
                        </div>
                  
                     </div>
                  </div>
               </div>
			   </div>
              <?php   endwhile; wp_reset_postdata(); ?>
			   </div>
			    <div class="col-1"></div>
			   </div>


