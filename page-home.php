<?php
// Template Name: Home
?>

<?php get_header(); ?>
    
<section id="home">
    <div class="tamanho-max home">
        <img src=" <?php echo get_post_meta(get_the_ID(), 'logo_home', true); ?>" alt="">
        <h1><?php echo get_post_meta(get_the_ID(), 'title_home', true); ?></h1>
        <em><?php echo get_post_meta(get_the_ID(), 'desc_home', true); ?></em>
    </div>
</section>

<section id="about">
    <div class="tamanho-max about">
        <h1><?php echo get_post_meta(get_the_ID(), 'title_about_home', true); ?></h1>
        <div class="about-boxes">
            <div class="l-about">
                <p><?php echo nl2br(wp_kses_post(get_post_meta(get_the_ID(), 'desc_about_home', true))); ?></p>
            </div>
            <div class="r-about">
                <p><?php echo nl2br(wp_kses_post(get_post_meta(get_the_ID(), 'desc_about_home2', true))); ?></p>
                <a href="" class="btn">READ MORE</a>
            </div>
        </div>
    </div>
</section>

<section id="leaders">
    <div class="tamanho-max leaders">
        <img src="<?php echo get_post_meta(get_the_ID(), 'logo_leaders_home', true); ?>" alt="">
        <h1><?php echo get_post_meta(get_the_ID(), 'title_leaders_home', true); ?></h1>
        <p><?php echo get_post_meta(get_the_ID(), 'desc_leaders_home', true); ?></p>
    </div>
</section>

<section id="grid">
    <div class="tamanho-max grid">
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
                <div class="grid-1">
                    <?php the_post_thumbnail('');?>
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>" class="btn">READ MORE</a>
                </div>
            <?php   
            endwhile;
        endif;
        wp_reset_postdata(); // restaura os dados originais do post
    ?>  
        
    </div>
</section>

<section id="team">
    <div class="tamanho-max team">
       <div class="photos_team">
            <?php 

                $entries = get_post_meta(  get_the_ID(), 'image_team_home', true );

                foreach ( (array) $entries as $key => $entry ) {

                    $image = "";


                    if ( isset( $entry['images_team_home'] ) ) {
                        $image= esc_html( $entry['images_team_home'] );
                    }
                ?> 

                <div class="img-team">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <?php } ?> 
        </div>

    

        <div class="text-team">
            <h1><?php echo get_post_meta(get_the_ID(), 'title_team', true); ?></h1>
            <p><?php echo nl2br(wp_kses_post(get_post_meta(get_the_ID(), 'description_team', true))); ?></p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="tamanho-max contact">
        <h1><?php echo get_post_meta(get_the_ID(), 'title_contact_home', true); ?></h1>
        <div class="contact-boxes">
            <div class="l-contact">
                <p><?php echo nl2br(wp_kses_post(get_post_meta(get_the_ID(), 'description_contact_home', true))); ?></p>
            </div>
            <div class="r-contact">
                <form>
                    <div class="mb-3">                      
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                    </div>
                    <div class="mb-3">
                        
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                    <textarea class="form-control" rows='5' aria-label="With textarea" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>      
            </div>
        </div>
    </div>
</section>







<?php get_footer(); ?>