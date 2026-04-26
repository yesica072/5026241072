<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Melissa Shoes Indonesia</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: radial-gradient(circle at top, #1a1a1a, #000);
            display: flex;
            justify-content: center;
            color: white;
        }

        .container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
            text-align: center;
        }

        /* TOP BAR */
        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* ICON */
        .icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);

            color: black;
            cursor: pointer;
            transition: 0.2s;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 1);
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        .icon-btn button {
            all: unset;
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn svg {
            width: 18px;
            height: 18px;
            fill: black;
        }

        /* AVATAR */
        .avatar {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* TEXT */
        .profile h1 {
            margin-top: 12px;
            font-size: 20px;
            font-weight: 600;
        }

        .profile p {
            font-size: 14px;
            color: #ccc;
            margin-top: 6px;
            line-height: 1.5;
        }

        /* BUTTON LINK */
        .link {
            position: relative;
            display: block;
            width: 100%;
            padding: 16px;
            margin: 12px 0;
            border-radius: 999px;
            background: linear-gradient(90deg, #2c2c2c, #3a3a3a);
            color: white;
            text-decoration: none;
            transition: 0.2s;
        }

        .link:hover {
            background: linear-gradient(90deg, #3a3a3a, #4a4a4a);
            transform: scale(1.02);
        }

        .link:active {
            transform: scale(0.97);
        }

        .link::after {
            content: "⋯";
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }

        /* Join */
        .join {
            margin-top: 25px;
            padding: 12px;
            border-radius: 999px;
            background: white;
            color: black;
            text-decoration: none;
            display: inline-block;
        }

        /* FOOTER */
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }

        .footer a {
            color: #888;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer span {
            margin: 0 5px;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- TOP -->
        <div class="top-bar">

            <div class="icon-btn">
                <button>
                    <!-- icon tetap -->
                </button>
            </div>

            <div class="icon-btn">
                <button>
                    <!-- icon tetap -->
                </button>
            </div>

        </div>

        <!-- PROFILE -->
        <div class="profile">
            <div class="avatar">
                <img src="https://ugc.production.linktr.ee/82fb2d7f-9354-45a4-b691-adc402cfc76e_IMG-1146.png?io=true&size=avatar-v3_0">
            </div>

            <h1>Melissa Shoes Indonesia</h1>
            <p>
                We’re @melissaofficial in Indonesia.<br>
                Vegan Shoes 🌈 🌱 Fashion, Art, Design
            </p>
        </div>

        <!-- LINKS -->
        <a href="#" class="link">Shop Online</a>
        <a href="#" class="link">Personal Shopper</a>
        <a href="#" class="link">Customer Service</a>
        <a href="#" class="link">Store Locations</a>
        <a href="#" class="link">Youtube</a>

        <!-- JOIN -->
        <a href="#" class="join">Join melissashoesid on Linktree</a>

        <!-- FOOTER -->
        <div class="footer">
            <a href="#">Cookie Preferences</a><span>•</span>
            <a href="#">Report</a><span>•</span>
            <a href="#">Privacy</a><span>•</span>
            <a href="#">Explore</a>
        </div>

        <div style="margin-top:20px;">
            <a href="/" style="color:white;">← Kembali ke Menu</a>
        </div>

    </div>

</body>

</html>
