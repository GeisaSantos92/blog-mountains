<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php if(is_page(52)){?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/blog.css">
     <?php }?> 
     <?php if(is_single()){?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/single.css">
     <?php }?> 
     <?php if(is_category()){?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/category.css">
     <?php }?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <header class="header<?php if(is_page(52)): ?> change-header <?php endif;?> <?php if(is_category()): ?> change-header <?php endif;?> <?php if(is_single()): ?> change-header <?php endif;?>"  >
        <nav class="navbar navbar-expand-lg  tamanho-max">
            <div class="container-fluid">
              <a href="<?php echo esc_url(get_page_link(10));?>" class="navbar-brand">LOGO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link " href="<?php echo esc_url(get_page_link(10));?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php if(is_page(10)): ?>#about<?php else: ?><?php echo esc_url(get_page_link(10));?>#about<?php endif; ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php if(is_page(10)): ?>#team<?php else: ?><?php echo esc_url(get_page_link(10));?>#team<?php endif; ?>">Team</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_page_link(52));?>">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php if(is_page(10)): ?>#contact<?php else: ?><?php echo esc_url(get_page_link(10));?>#contact<?php endif; ?>">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>