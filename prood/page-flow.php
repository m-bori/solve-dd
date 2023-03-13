<?php
/*
Template Name: Flow for the firts time
*/
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Prood</title>
        <!-- icon-->
        <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/page-flow-styles.css" rel="stylesheet" />
    </head>

    <body class="bg-body-color">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    Prood
                </a>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <div class="content-section-heading">
                    <h2 class="mb-5">当サイトの流れ</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
                        <span class="service-icon rounded-3 mx-auto mb-3 bg-flow">
                            <a href="<?php echo esc_url( home_url( '/howto-use' ) ); ?>">
                                <i class="bi bi-phone" style="font-size: 4rem";></i>
                            </a>
                        </span>
                        <h3><strong>1. 覚える</strong></h3>
                        <p class="mb-0" style="font-size: 1.3rem">スマホの操作について</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
                        <span class="service-icon rounded-3 mx-auto mb-3 bg-flow">
                            <a href="<?php echo esc_url( home_url( '/about-health-app' ) ); ?>">
                                <i class="bi bi-hand-index-thumb" style="font-size: 4rem";></i>
                            </a>
                        </span>
                        <h3><strong>2. 選ぶ</strong></h3>
                        <p class="mb-0" style="font-size: 1.3rem">気になる健康アプリを</p>
                    </div>

                    <div class="col-lg-4 col-md-4 mb-5 mb-md-0">
                        <span class="service-icon rounded-3 mx-auto mb-3 bg-flow">
                            <a href="<?php echo esc_url( home_url( '/create-account-android' ) ); ?>">
                                <i class="bi bi-cup-hot" style="font-size: 4rem";></i>
                            </a>
                        </span>
                        <h3><strong>3. 知る</strong></h3>
                        <p class="mb-0" style="font-size: 1.3rem">アカウント作成について</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Footer-->
        <footer class="py-5 bg-black-2 bg-light mt-5">
            <div class="container px-5">
                <p class="m-0 text-center text-black fs-5">Copyright &copy; Prood</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/page-flow-scripts.js"></script>
    </body>
</html>