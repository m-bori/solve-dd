<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icon.png" />
        <title>Prood - home</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/front-page-styles.css" rel="stylesheet" />
    </head>

    <body class="bg-body-color">

        <div class="container px-3 fs-4">
            <div class="p-4 p-lg-5 bg-white rounded-3 mt-5">
                <h2>ページが見つかりません</h2>
                <hr>
                <p>
                    <a href="<?php echo esc_url( home_url() ); ?>">トップページ</a>へ戻る
                </p>
            </div>
        </div>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>