<?php
// Template Name: Blog
?>

<?php get_header(); ?>

<section id="blog_home">
    <div class="tamanhoMax blog_home">
        <div class="breadcrumbs_cat">
        <p>
            <a href="<?php echo esc_url(get_page_link(10));?>">Home</a>
            <span>></span>
            <span class="marcado"><?php the_title(); ?></span> <!-- single_cat_title traz o nome da categoria que está sendo carregada na pagina -->
        </p>
        </div>
        <h1><?php echo get_post_meta(get_the_ID(), 'title_blog', true); ?></h1>

        <div class="grid_home">
            <div class="container text-center">
                <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'orderby' => 'date', // ordena os posts por data de publicação
                        'order' => 'ASC'// define o número de posts que serão exibidos
                    );
                    $query = new WP_Query( $args ); // cria uma nova instância da consulta de posts com os argumentos definidos
                    if ( $query->have_posts() ) : // verifica se há posts a serem exibidos
                        while ( $query->have_posts() ) : $query->the_post(); 
                ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="col">                  
                            <?php the_post_thumbnail('');?>                  
                        </div>
                    </a>
                <?php   
                    endwhile;
                    endif;
                    wp_reset_postdata(); // restaura os dados originais do post
            ?>                  
            </div>
            </div>
        </div>
        <div class="box_gray"></div>
    </div>
</section>

<section class="blog-infos">
    <div class="tamanhoMax blog_content">
            <?php $query = get_queried_object();?>
            <div class="topo">
                <div class="boxes_blog">
                    <div class="boxes_blogs">
                        <?php $args = array('post_type' => 'post', 'posts_per_page'=> -1 );?>
                        <?php $loop = new WP_QUERY($args); ?>
                        <?php if($loop->have_posts()): ?>
                        <?php while($loop->have_posts()):$loop->the_post(); ?>
                        
                            <div class="descricao">
                                <?php the_post_thumbnail('');?> 
                            <h2> <?php the_title();?></h2>
                                <em> <?php echo get_the_date('j \d\e F \d\e Y');?></em>
                                <hr>                            
                                <p><?php the_excerpt();?></p>
                                <a class="reading" href="<?php the_permalink(); ?>">Continue Reading </a>
                            </div>                           
                        <?php endwhile;?>
                         <?php endif;?>
                    </div>
                </div>
                    
                <div class="posts_sidebar">
                    <div class="container">
                        <div class="row">
                        
                        <div class=" sidebar">
                            <div class="bar-sidebar"><?php echo get_post_meta(52, 'title_sidebar', true); ?></div>
                            <div class="logo-sidebar">
                                 <img src="<?php echo get_post_meta(52, 'image_sidebar', true); ?>" alt="">
                            </div>
                            <h3><?php echo get_post_meta(52, 'signature_sidebar', true); ?></h3>
                            <p><?php echo get_post_meta(52, 'desc_sidebar', true); ?></p>
                           
                            <div class="social-midias">
                                <div class="sponsor bar-sidebar tag-bar">LET'S BE FRIENDS</div>
                                <div class="midias">
                                    <div class="social"><a  target="blank" href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a></div>
                                    <div class="social"><a  target="blank" href="https://www.instagram.com"><i class='bx bxl-instagram' ></i></a></div>
                                    <div class="social"><a  target="blank" href="https://www.pinterest.com"><i class='bx bxl-pinterest-alt' ></i></a></div> 
                                    <div class="social"><a  target="blank" href="https://www.twitter.com"></a><i class='bx bxl-twitter' ></i></div>
                                    <div class="social"><a  target="blank" href="https://www.telegram.org"><i class='bx bxl-telegram' ></i></a></div>
                                    <div class="social"><a  target="blank" href="https://www.whatsapp.com"><i class='bx bxl-whatsapp' ></i></a></div> 
                                </div>                             
                            </div>
                            <div class="bar-sidebar tag-bar">TAGS</div>
                                <div class="tags">
                                    <?php
                                        $tags = get_tags();
                                        ?>
                                
                                        <?php foreach ( $tags as $tag ) : ?>
                                            <p class="tag">
                                                <a href="<?php echo get_tag_link( $tag->term_id ); ?>">
                                                    <?php echo $tag->name; ?>
                                                </a>
                                            </p>
                                            
                                    <?php endforeach; ?>                               
                                </div>
                            <div class="recent-post bar-sidebar tag-bar">RECENT POSTS</div>
                            <div class="recent-posts">
                                    <?php $args = array('post_type' => 'post', 'posts_per_page'=> 3 );?>
                                    <?php $loop = new WP_QUERY($args); ?>
                                    <?php if($loop->have_posts()): ?>
                                    <?php while($loop->have_posts()):$loop->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="posts">
                                            <div class="l-post">
                                                    <h2> <?php the_title();?></h2>
                                                    <em> <?php echo get_the_date('j \d\e F \d\e Y');?></em>
                                                </div>
                                            
                                                <div class="r-post">
                                                    <?php the_post_thumbnail('');?>   
                                                </div>
                                            </div>
                                    </a>
                               <hr>
                                <?php endwhile;?>
                                <?php endif;?>                             
                            </div>

                            <div class="sponsor bar-sidebar tag-bar">SPONSOR</div>
                            <div class="sponsors">
                                <img src="<?php echo get_post_meta(52, 'sponsor_sidebar', true); ?>" alt="">
                            </div>

                            <div class="categoria_lista">                               
                                <div class="sponsor bar-sidebar tag-bar">CATEGORIAS</div>
                                    <div class="listaCategorias_sidebar ">
                                        <!-- Lista de categorias: -->
                                    
                                        <?php wp_list_categories( array(
                                            'orderby'    => 'name',
                                            'exclude'    => array( 1 ), //exclui a categoria "Uncategorized". Ela é padrão do wordpress e não pode ser excluida
                                            'title_li'   => '' //deixa o título em branco
                                        ) ); ?> 
                                    
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                
                </div>
            </div>
    </div>
</section>




<?php get_footer(); ?>