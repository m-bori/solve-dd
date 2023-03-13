<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
        <meta name="author" content="" />
        <title>Prood</title>
        <!-- icon-->
        <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/front-page-styles.css" rel="stylesheet" />
    <?php wp_head(); ?>
    </head>
    <body class="bg-body-color" <?php body_class(); ?> id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    Prood
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>">ホーム</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/howto-use' ) ); ?>">スマホの使い方</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/about-health-app' ) ); ?>">健康アプリ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                アカウント作成
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/create-account-android' ) ); ?>">Androidの方</a></li>
                                <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/create-account-iphone' ) ); ?>">iPhoneの方</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-subheading mb-3"><?php the_title(); ?></h1>
                </div>
            </div>    
        </header>

        <div class="container px-3 fs-4">
            <div class="p-4 p-lg-5 bg-white rounded-3 mt-5">
                <?php the_content(); ?>
            </div>
        </div>

        <nav>
            <ul class="pagination pagination-lg justify-content-center pt-5">
              <li class="page-item">
                <a class="page-link" href="<?php echo esc_url( home_url( '/howto-use' ) ); ?>">スマホの使い方へ</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="<?php echo esc_url( home_url( '/about-health-app' ) ); ?>">健康アプリ一覧へ</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="<?php echo esc_url( home_url( '/account-types' ) ); ?>">アカウント作成へ</a>
              </li>
            </ul>
        </nav>
            

        <!-- Footer-->
        <footer class="py-5 bg-black-2 bg-light mt-5">
            <div class="container px-5">
                <p class="m-0 text-center text-black fs-5">Copyright &copy; Prood</p>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/page-flow-scripts.js"></script>

    </body>
</html>