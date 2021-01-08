<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adere Restaurant | Menu</title>
    <link rel="stylesheet" href="/assets/css/indexstyle.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
    <div class="container">
    <?php include 'includes/navbar.inc' ?>

        <div class="menu-box">
            <div class="menu-bar" id="menu-bar">
                <div class="menu-button active" onclick="openCity('Breakfast')">Breakfast</div>
                <div class="menu-button" onclick="openCity('Lunch')">Lunch</div>
                <div class="menu-button" onclick="openCity('Dinner')">Dinner</div>
                <div class="menu-button" onclick="openCity('Dessert')">Dessert</div>
            </div>

            <div id="Breakfast" class="w3-container city">
                <h2 class="menu-title">Breakfast</h2>
                <div class="list">
                    <div class="items columns-2">
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Lunch" class="w3-container city" style="display:none">
                <h2 class="menu-title">Lunch</h2>
                <div class="list">
                    <div class="items columns-2">
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Dinner" class="w3-container city" style="display:none">
                <h2 class="menu-title">Dinner</h2>
                <div class="list">
                    <div class="items columns-2">
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Dessert" class="w3-container city" style="display:none">
                <h2 class="menu-title">Dessert</h2>
                <div class="list">
                    <div class="items columns-2">
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                        <div class="item-container">
                            <div class="item">
                                <div class="details">
                                    <div class="name">Lorem, ipsum.</div>
                                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Neque, illum!</div>
                                </div>
                                <div class="price">$1.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'includes/footer.inc' ?>
    </div>

    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>
    <script>

        var btnContainer = document.getElementById("menu-bar");
        var btns = btnContainer.getElementsByClassName("menu-button");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

</body>

</html>