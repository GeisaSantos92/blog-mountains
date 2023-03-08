<?php include 'header.php';?>
<?php wp_reset_postdata();?>
<?php $postid = get_the_ID();?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0" nonce="6kgl4aUk"></script>
    <div class="breadcrumbs">
        <div class="breadcrumbs_cat">
        <p>
            <span><a href="<?php echo esc_url(get_page_link(10));?>">Home</a></span> > 
            <span><a href="<?php echo esc_url(get_page_link(52));?>">Blog</a></span> > 
            <span><a href="<?php echo esc_url(get_category_link( get_the_category(get_the_ID())[0] ));?>"><?php echo get_the_category(get_the_ID())[0]->name;?></a>
            </span> > <span class="marcado"><?php the_title();?></span>
        </p>
        </div>
    </div>
<div class="post_interno_topo">    
  <div class="background" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
  <div class="container">
    
    <!-- <div class="categoria">
      <a href="<?php echo esc_url(get_category_link( get_the_category(get_the_ID())[0] ));?>">
        <div class="categoria_absolute">
          <?php $categoria_post = get_the_category(get_the_ID())[0]->name; ?>
          <?php echo get_the_category(get_the_ID())[0]->name;?>
        </div>
      </a>
    </div> -->
    <div class="titulo">
      <h2 class="real_titulo"><?php the_title();?></h2>
    </div>
    <div class="autor_data">
      <!-- <p class="escrito">por <span> <?php echo get_author_name();?> |</span> <?php echo get_the_date('j \d\e F \d\e Y');?></p> -->
      <p class="excerpt"><?php the_excerpt();?></p>
    </div>
  </div>
</div>
<div class="post_interno_corpo">
  <div class="container">
    <div class="row">
      <!-- <div class="col-sm-12 col-md-2 compartilhe">
        <p class="texto">Compartilhe</p>
           Go to www.addthis.com/dashboard to customize your tools 
          <div class="addthis_inline_share_toolbox"></div>            
      </div> -->
      <div class="col-sm-12 col-md-10 texto">
        <?php echo get_post_field('post_content');?>
        <div class="tags">
          <p>TAGS:</p>
          <?php
            $post_tags = get_the_tags();
  
            if ( $post_tags ):
              foreach( $post_tags as $tag ): 
                $tag_link = get_tag_link( $tag->term_id );
              ?>
                <p class="tag">
                  <a href="<?php echo $tag_link;?>"><?php echo $tag->name;?></a>
                </p>
              <?php endforeach;?>
                
            <?php endif;?>
        </div>
        <div class="fb-comments" data-href="http://isaac-newton.local" data-numposts="5" data-width="100%"></div>
      </div>
    </div>
  </div>
  <div class="outros_posts">
    <div class="container">
      <?php $previous = get_previous_post();
        $next = get_next_post();?>
        <div class="row">
          <div class="col-sm-12 col-md-6 anterior">
              <?php if ( get_previous_post() ) { ?>
                <p class="anterior_item"><span><a href="<?php echo get_permalink($previous) ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.png" alt=""></a></span> MATÉRIA ANTERIOR</p>
                <a href="<?php echo get_permalink($previous) ?>" class="link_nome"><?php echo get_the_title($previous) ?></a>
              <?php } ?>
          </div>
          <div class="col-sm-12 col-md-6 proximo">
              <?php if ( get_next_post() ) { ?>
                <p class="proximo_item">PRÓXIMA MATÉRIA <span><a href="<?php echo get_permalink($next) ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png" alt=""></a></span></p>
                <a href="<?php echo get_permalink($next) ?>" class="link_nome"><?php echo get_the_title($next) ?></a>
              <?php } ?>
          </div>
        </div>
    </div>
  </div>
  <?php $args = array('post_type' => 'acf_produtos', 'post_per_page'=> 8, 'categoria-produto'=> $categoria_post );?>
  <?php $loop = new WP_QUERY($args); ?>
  <?php if($loop->have_posts()): ?>
    <div class="posts_relacionados">
      <div class="container">
        <div class="titulo_post">
          <p>PRODUTOS RELACIONADOS</p>
        </div>
        <div class="swiper-container lista_post_relacionado">
          <div class="swiper-wrapper">
            <?php while($loop->have_posts()):$loop->the_post(); ?>
            
              <div class="swiper-slide">
                <div class="item">
                  <div class="imagem">
                    <a target="_blank" href="<?php the_field('link_produto'); ?>">
                      <img src="<?php the_field('imagem_produto');?>" alt="imagem_post">
                    </a>
                  </div>
                  <div class="texto">
                    <p class="titulo"><?php the_title();?></p>
                    <a href="<?php the_field('link_produto'); ?>">
                      <div class="botao_vermais">
                        <p>VER PRODUTO</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile;?>
          </div>
          <div class="setinhas">
            <div class="container">
              <div class="linhas_arrows_relacionado swiper-button-next"><i class="fas fa-arrow-right"></i></div>
              <div class="linhas_arrows_relacionado swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?php endif;?>
  <?php wp_reset_query(); ?>
</div>

<?php include 'footer.php';?>