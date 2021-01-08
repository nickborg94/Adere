<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adere Restaurant | Gift Voucher</title>
    <link rel="stylesheet" href="/assets/css/indexstyle.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://kit.fontawesome.com/d5321eb3ba.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <?php include 'includes/navbar.inc' ?>

        <main class="voucher-main">
            <h1 class="voucher-h1">I'd like to...</h1>
            <div class="box-wrapper">
                <div class="voucher-box">
                    <h3>
                        Redeem
                    </h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quidem
                        hic ipsam sint eaque eum, sunt veritatis nam ab expedita?</p><input type="text"
                        class="voucher-code" placeholder="e.g. BG2XRZQG">
                        <p>Enter code here</p><a href="">
                            <div class="button">
                                Submit
                            </div>
                        </a>
                </div>
                <div class="voucher-box">
                    <h3>
                        Purchase
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas
                        eveniet voluptas commodi iste officiis, laboriosam fugit itaque sit placeat voluptate.</p>
                    <div class="selection-wrapper">
                        <div class="choice-wrapper">
                            <h4>Select an amount</h4>
                            <ul>
                                <li>
                                    <input type="checkbox" name="" id="" value="Ten">
                                    <label class="amount" for="Ten">€10</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="" value="Twenty">
                                    <label class="amount" for="Ten">€20</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="" value="Thirty">
                                    <label class="amount" for="Ten">€30</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="" value="Forty">
                                    <label class="amount" for="Ten">€40</label>
                                </li>
                            </ul>
                        </div>
                        <div class="quantity-wrapper">
                            <h4>Select a quantity</h4>
                            <ul>
                                <li>
                                    <input class="quantity" type="number" name="" id="">
                                </li>
                                <li>
                                    <input class="quantity" type="number" name="" id="">
                                </li>
                                <li>
                                    <input class="quantity" type="number" name="" id="">
                                </li>
                                <li>
                                    <input class="quantity" type="number" name="" id="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="">
                        <div class="button">
                            Proceed to purchase
                        </div>
                    </a>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.inc' ?>
    </div>
</body>

</html>