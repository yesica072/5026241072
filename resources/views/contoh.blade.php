<!DOCTYPE html>
<html>

<head>
    <title>YEKS STUDIO</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #fff0f6;
        }

        p {
            margin-top: 40px;
            margin-bottom: 40px;
            margin-right: 80px;
            margin-left: 80px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .judulberita {
            text-align: center;
            font-size: 35px;
            color: #d63384;
            font-weight: bold;
        }

        #bikinjaditengah {
            text-align: center;
            font-size: small;
        }

        .judulgambar {
            text-align: center;
            font-size: x-small;
        }

        .formbox {
            border: 3px solid #ffb6d5;
            border-radius: 15px;
            padding: 40px;
            margin: 80px;
            background: white;
        }

        h4 {
            color: #d63384;
            margin-top: 25px;
        }

        .gambarnail {
            border: 4px solid #ffb6d5;
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <p class="judulberita"> YEKS STUDIO </p>

    <p id="bikinjaditengah">
        Where beautiful nails begin <br>
        Book your appointment today
    </p>

    <p>
        <center>
            <img class="gambarnail"
                src="https://i.pinimg.com/originals/a3/fe/14/a3fe14505a5352b7dd43ec68334a683b.jpg"
                width="600px">
        </center>
    </p>

    <div class="formbox">

        <form action="#" class="was-validated">

            <h4>Customer Information</h4>

            <div class="form-group">
                <label>Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control" placeholder="Enter phone number" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" required> Remember me
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>

            <h4>Customer Name</h4>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>

            <br>

            <h4>Booking Details</h4>

            <div class="form-inline">

                <label class="mr-sm-2">Design:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Example: French Nail">

                <label class="mr-sm-2">Date:</label>
                <input type="date" class="form-control mb-2 mr-sm-2">

                <label class="mr-sm-2">Time:</label>
                <input type="time" class="form-control mb-2 mr-sm-2">

            </div>

            <br>

            <button type="submit" class="btn btn-danger">Submit</button>

            <hr>

            <p style="text-align:center; font-size:small; color:#dd7fae;">
                Thank you for booking with Yeks Studio 💅 <br>
                Your perfect nail art experience starts here.
            </p>

        </form>

    </div>

    <p style="text-align:center;">
        <a href="/" class="btn btn-secondary">Kembali ke Menu</a>
    </p>

</body>

</html>
