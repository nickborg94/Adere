<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adere Restaurant | Book a table</title>
    <link rel="stylesheet" href="/assets/css/indexstyle.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
    <div class="container">
        
    <?php include 'includes/navbar.inc' ?>

        <main class="booking-container">
            <div class="booking-box">
                <h2>Come dine with us</h2>
                <h3>Fill in the details below</h3>
                <input style="display:block; margin : 20px auto;" type="text" name="" id=""
                    placeholder="Name and Surname">
                <input style="display:block; margin : 20px auto;" type="text" name="" id="" placeholder="Phone number">
                <input style="display:block; margin : 20px auto;" type="text" name="" id="" placeholder="E-mail">
                <input type="date" id="" style="display:block; margin : 20px auto;" name="">
                <input type="number" style="display:block; margin : 20px auto;" name="" id=""
                    placeholder="Number of adults">
                <input type="number" style="display:block; margin : 20px auto;" name="" id=""
                    placeholder="Number of children">
                <div class="radio-input">
                    <p>Where would you like to dine?</p>
                    <label for="">Indoors</label>
                    <input type="radio" name="" id="">
                    <label for="">Outdoors</label>
                    <input type="radio" name="" id="">
                </div>
                <a href="#">
                    <div class="submit-btn">Submit</div>
                </a>

            </div>
        </main>

        <?php include 'includes/footer.inc' ?>
    </div>
</body>

</html>