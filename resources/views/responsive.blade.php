<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        .open-sans-judul {
            font-family: "Open Sans", sans-serif;
        }

        .fontintro {
            font-size: xx-large;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-3">Selamat Datang</h1>
            <p class="lead">di Pemrograman Web</p>
            <hr class="my-2">
            <p>More info</p>

            <!-- 🔥 ganti dikit biar nyambung ke menu -->
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/" role="button">Kembali ke Menu</a>
            </p>
        </div>

        <!-- Perkenalan profil -->
        <div class="row">
            <div class="col border border-primary">
                <p>row 1 col 1</p>
            </div>
            <div class="col border">
                <p>row1 col2</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>row2 col1</p>
            </div>
            <div class="col">
                <p>row2 col2</p>
            </div>
        </div>

        <!-- Grid -->
        <div class="row">
            <div class="col-3 border">
                <p>row 1 col 1</p>
            </div>
            <div class="col-9 border">
                <p>row1 col2</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>row2 col1</p>
            </div>
            <div class="col">
                <p>row2 col2</p>
            </div>
        </div>

        <!-- Tentang Danantara -->
        <div class="row">
            <div class="col-4">
                <img src="https://www.danantaraindonesia.co.id/_next/image?url=%2Fimg%2Fcommon%2Fimg_logo-anniversary-dark.webp&w=384&q=75"
                    height="50px">
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">Tentang Kami</div>
            <div class="col-2 d-flex justify-content-center align-items-center">Ekosistem Kami</div>
            <div class="col-2 d-flex justify-content-center align-items-center">Hubungan Investor</div>
            <div class="col-2 d-flex justify-content-center align-items-center">Tata Kelola</div>
        </div>

        <div class="row">

            <div class="col-9">
                <p class="open-sans-judul fontintro">
                    <b>Danantara Indonesia</b> merupakan badan pengelola investasi yang menangani,
                    mengoptimalkan, dan mengembangkan aset strategis Indonesia.
                </p>
            </div>

            <div class="col-3">
                <img src="https://www.danantaraindonesia.co.id/_next/image?url=https%3A%2F%2Fd19ypesdspgr78.cloudfront.net%2F490%2FHome_Intro_Small_Image.webp&w=1920&q=75"
                    class="rounded img-fluid">

                <p class="mt-2">
                    Sebagai badan investasi negara, kami menyediakan platform terpercaya bagi investor global.
                </p>

                <p>
                    <a href="https://www.danantaraindonesia.co.id/id/about">Pelajari Lebih Lanjut</a>
                </p>
            </div>

        </div>

    </div>

</body>

</html>
