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
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h2 class="masthead-heading mb-3">Prood</h2>
                    <h1 class="masthead-subheading">健康的な未来へ</h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="<?php echo esc_url( home_url( '/flow-one' ) ); ?>">見てみる</button></a>
                </div>
            </div>    
        </header>
        <!-- Content section 1-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 ">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about-me.jpg" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 bg-white rounded-circle">
                        <div class="py-5">
                            <h2 class="display-4 fw-bold text-center">私たちについて</h2>
                            <hr>
                            <p class="fs-4 py-3">あらゆる世代の方にデジタル活用を促している、大学生です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 ">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about-this-site.jpg" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 bg-white rounded-circle">
                        <div class="py-5">
                            <h2 class="display-4 fw-bold text-center">当サイトの目的</h2>
                            <hr>
                            <h4 class="fs-4 text-center py-3">「健康アプリを習慣的に使用すること」</h4>
                            <p class="fs-4">目的を達成する為に、スマホの操作・アカウント作成についてサポートします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 ">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about-prood.jpg" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 bg-white rounded-circle">
                        <div class="py-5">
                            <h2 class="display-4 fw-bold text-center">Proodとは</h2>
                            <hr>
                            <p class="fs-4">読み方は、プロード。ギリシャ語で「進歩・向上」を表す言葉、próodos(プロードス)からの造語。「人類は皆、デジタルを取り入れて進歩していく」という思いが込められている。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 4-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/contact-me.jpg" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 bg-white rounded-circle">
                        <div class="py-5">
                            <h2 class="display-4 fw-bold text-center">お問い合わせ</h2>
                            <hr>
                            <p class="fs-4 py-3">ご連絡先 : z32240243@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-black-2 bg-light mt-5">
            <div class="container px-5">
                <p class="m-0 text-center text-black fs-5">Copyright &copy; Prood</p>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>