<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adere Restaurant | Contact us</title>
    <link rel="stylesheet" href="/assets/css/indexstyle.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://kit.fontawesome.com/d5321eb3ba.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

    <?php include 'includes/navbar.inc' ?>

        <div class="contact-container">
            <div class="contact-info">
                <div class="upper-part">
                    <h2>Contact us</h2>
                    <p>Have any questions? Let us know!</p>
                </div>
                <hr>
                <div class="inputwrapper">
                    <label for="name" class="newline">Name</label>
                    <input type="text" name="Name" id="name" placeholder="Name">
                </div>
                <div class="inputwrapper">
                    <label for="Email" class="newline">Email</label>
                    <input type="email" name="E-mail" id="email" placeholder="Email">
                </div>
                <div class="inputwrapper">
                    <textarea name="message" class="newline" id="" cols="50" rows="5"
                        placeholder="Type your message here"></textarea>
                </div>              
                
                <div class="inputwrapper">
                    <input type="submit" value="Submit" class="mybutton">
                </div>

                
            </div>
            <div class="contact-info-2">
                <div class="map-box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6463.961334390021!2d14.508787577364311!3d35.89848916156137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e45281d8647c5%3A0x745ad38ee242c917!2sValletta!5e0!3m2!1sen!2smt!4v1607439079522!5m2!1sen!2smt" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            <div class="opening-hours">
                <div class="times">
                <h3 class="open">Opening Times</h3>
                   <ul>
                       <li>
                           <b>Monday - Friday</b>
                       </li>
                       <li>
                           9:00 - 21:00
                       </li>
                       <li>
                           <b>Saturday & Sunday</b>
                       </li>
                       <li>
                           9:00 - 13:00
                       </li>
                   </ul>
            </div>
            <div class="socials">
                <h3>Socials</h3>
                <ul>
                    <li><i class="fas fa-phone-square"></i> +356 1234 5678</li>
                    <li><i class="fas fa-envelope-square"></i> lorem@ipsum.net</li>
                    <li><i class="fab fa-facebook-square"></i> Facebook</li>
                    <li><i class="fab fa-instagram-square"></i> Instagram</li>
                </ul>

            </div>
            </div>
        </div>
        </div>

        <?php include 'includes/footer.inc' ?>
    </div>
</body>

</html>