<?php include 'header.php';?>
<?php $query = get_queried_object();?>
<div class="topo">
  <div class="container">
    <div class="breadcrumbs_cat">
      <p>
        <a href="<?php echo esc_url(get_page_link(10));?>">Home</a>
        <span>></span>
        <a href="<?php echo esc_url(get_page_link(52));?>">Blog</a>
        <span>></span>
        <span class="marcado"><?php single_cat_title(); ?></span> <!-- single_cat_title traz o nome da categoria que está sendo carregada na pagina -->
      </p>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 titulo">
         <h2 class="real_titulo"><?php single_cat_title(); ?></h2>
      </div>
    </div>
  </div>
</div>
<div class="posts_sidebar">
  <div class="container">
    <div class="posts_recentes">
      <div class="lista_posts_recentes">
        <?php
        if(have_posts()) : 
          while(have_posts()): the_post();
        ?>
          <div class="item col-sm-6 col-md-6">
            <div class="imagem">
              <?php the_post_thumbnail();?>
              <?php if(get_the_category(get_the_ID())[0]->name != 'Uncategorized'): ?>
              <div class="categoria_absoluta">
                <a href="<?php echo esc_url(get_category_link( get_the_category(get_the_ID())[0] ));?>">
                  <div class="categoria">
                    <p><?php echo get_the_category(get_the_ID())[0]->name;?></p> |
                    <?php 
                    $categorias = get_the_category();
                    if ( count($categorias) > 1 ) {
                     echo $categorias[1]->name;
                    }?>
                  </div>
                </a>
              </div>
              <?php endif;?>
            </div>
            <div class="texto">
              <p class="titulo"><?php the_title();?></p>
              <div class="autor_data">
                <em>por <em> <?php echo get_author_name();?> |</em> <?php echo get_the_date('j \d\e F \d\e Y');?></em>
              </div>
              <p><?php the_excerpt();?></p>
              <a href="<?php the_permalink(); ?>">
                <div class="botao_vermais">
                  <p>LEIA MAIS</p>
                </div>
              </a>
            </div>
          </div>
          
        <?php endwhile;?>
        <?php else:?>
              <h3 class="nenhum_resultado">Nenhum resultado encontrado!</h3>
      <?php endif;?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php';?>