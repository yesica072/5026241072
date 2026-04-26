<!DOCTYPE html>
<html lang="en">

<head>
    <title>NontonYuk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100..900&family=Open+Sans:wght@300..800&display=swap"
        rel="stylesheet">
</head>

<style>
    .teko-judul {
        font-family: "Open Sans", sans-serif;
        font-weight: 900;
        letter-spacing: 0.1em;
    }

    body {
        background-color: #e8e8e8;
        font-family: "Barlow Condensed", sans-serif;
    }

    .judul-section {
        font-size: 36px;
        font-weight: 800;
        text-transform: uppercase;
        text-align: center;
        color: #111;
        letter-spacing: 0.2em;
    }

    .sub-section {
        font-size: 14px;
        color: #999;
        text-align: center;
    }

    .card-plan {
        background-color: white;
        border: 1px solid #ddd;
        padding: 30px 20px;
        text-align: center;
    }

    .plan-name {
        font-size: 22px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #222;
    }

    .plan-price {
        font-size: 13px;
        color: #999;
    }

    .btn-current {
        background-color: #aaa;
        color: white;
        border: none;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 9px 22px;
    }

    .btn-upgrade {
        background-color: #e63946;
        color: white;
        border: none;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 9px 22px;
    }

    .fitur-list {
        list-style: none;
        padding: 0;
        margin-top: 20px;
        font-size: 13px;
        color: #666;
    }

    .fitur-list li {
        padding: 5px 0;
    }
</style>

<body>

    <div class="container py-5">

        <div class="row">
            <div class="col text-center">
                <p class="judul-section">Select a Plan</p>
                <p class="sub-section">Lebih dari hiburan, pilih sesukamu</p>
            </div>
        </div>

        <div class="row justify-content-center mt-3">

            <div class="col-md-3">
                <div class="card-plan">
                    <p class="plan-name">Platinum</p>
                    <p class="plan-price">Rp29.000/Month</p>
                    <button class="btn-current">Current Plan</button>
                    <ul class="fitur-list">
                        <li>1 device at a time</li>
                        <li>SD 480p video quality</li>
                        <li>Unlimited movies & series</li>
                        <li>No offline downloads</li>
                        <li>Limited ads</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-plan">
                    <p class="plan-name">Platinum Extra</p>
                    <p class="plan-price">Rp59.000/Month</p>
                    <button class="btn-upgrade">Upgrade</button>
                    <ul class="fitur-list">
                        <li>2 devices at a time</li>
                        <li>Full HD 1080p video quality</li>
                        <li>Unlimited movies & series</li>
                        <li>30 offline downloads/month</li>
                        <li>No ads</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-plan">
                    <p class="plan-name">Ultimate</p>
                    <p class="plan-price">Rp99.000/Month</p>
                    <button class="btn-upgrade">Upgrade</button>
                    <ul class="fitur-list">
                        <li>4 devices at a time</li>
                        <li>4K Ultra HD video quality</li>
                        <li>Unlimited movies & series</li>
                        <li>Unlimited offline downloads</li>
                        <li>No ads + early access</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="/" class="btn btn-secondary">Kembali ke Menu</a>
        </div>

    </div>

</body>

</html>
