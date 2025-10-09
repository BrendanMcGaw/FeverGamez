<?php
    $title = 'Product Form';
    $datafolder ='data';
    $themefolder = 'themes';
    $content = '
        <div id="store-image-container">
            <img class="store-image" src="data/images/FeverGamezNewWebBannerEdition2.png" alt="Banner for Fever Gamez Website"> <!-- Store banner image-->
        </div>

        <div id="Nav-bar-container">
            <nav id="Nav-bar"> <!-- Navigation bar -->
            <!-- Hyperlinks with relative URLS-->
                <a href="index.php">Home</a> 
            <!-- <a href="genre.php">Game Genre</a> -->
            <div class="dropdown">
                <button class="dropbtn">Game Genres
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="genre.php?genre=jrpg">Japanese Role-Playing Games</a>
                    <a href="genre.php?genre=fps">First Person Shooters</a>
                </div>
            </div>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </nav>
        </div>

        <div id="body-content-container">
            <h1 style="margin-top: 0; margin-bottom: 0; padding-top: 25px; padding-bottom: 15px; text-align: center;">Submit Your Product for Sale</h1>
            <form action="" method="get" class="submit-product-form">
                <fieldset>
                    <fieldset>
                        <legend>
                            Customer Details:
                        </legend>
                        <div class="customer-details-product-form-field">
                            <label for="firstName">Enter Your First Name:</label>
                            <input type="text" name="firstName" id="firstName" required />

                            <label for="lastName">Enter Your Last Name:</label>
                            <input type="text" name="lastName" id="lastName" required />

                            <label for="email">Enter Your Email Address:</label>
                            <input type="text" name="email" id="email" required />
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>
                            Have you submitted a product before?
                        </legend>
                        <div class="customer-radio-product-form-field">
                            <input type="radio" name="previouslySubmitted" id="yes" value="yes" />
                            <label for="yes">Yes</label>

                            <input type="radio" name="previouslySubmitted" id="no" value="no" />
                            <label for="no">No</label>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>

                        </legend>
                    </fieldset>
                </fieldset>
        </div>

        <!-- Footer with address inclusive of copyright statement. -->
        <footer>
            <a class="footer-grid-one footer-links" href="/about.html#privacy-policy-section">Privacy Policy</a>
            <a class="footer-grid-two footer-links" href="/about.html#terms-and-conditions-section">Terms and Conditions</a>
            <a class="footer-grid-three footer-links" href="/contact.html#contact-body-grid">Contact Us</a>
            <address class="footer-copyright-statement">
                &copy; 2025 FeverGamez Pty Ltd. (ACN 123 456 789) All right reserved.<br>
                Brendan McGaw <br>
                c3283816 <br>
                brendan.mcgaw@uon.edu.au <br>
                Bachelor of Computer Science
            </address>
        </footer>
    '
?>

<?php include($themefolder . '/template.php'); ?>