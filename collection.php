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
            <h1 style="margin-top: 0; margin-bottom: 0; padding-top: 25px; padding-bottom: 15px; text-align: center;">Submit Your Product</h1>
            <form action="" method="POST" onSubmit="validateForm(); return false;" class="submit-product-form email-form">
                <fieldset>
                    <fieldset>
                        <legend>
                            Customer Details:
                        </legend>
                        <div class="customer-details-product-form-field">
                            <label for="firstName" class="product-input-labels">Enter Your First Name:</label>
                            <input type="text" name="firstName" id="firstName" class="product-input-fields" required /><br>

                            <label for="lastName" class="product-input-labels">Enter Your Last Name:</label>
                            <input type="text" name="lastName" id="lastName" class="product-input-fields" required /><br>

                            <label for="email" class="product-input-labels">Enter Your Email Address:</label>
                            <input type="text" name="email" id="email" class="product-input-fields" required /><br>

                            <div class="submitted-product-previously-section">
                                <label for="previousProduct">Have you submitted a product before?</label><br>
                                <input type="radio" name="previousProduct" id="previousProductYes" value="Yes">
                                <label for="previousProductYes">Yes</label>
                                <input type="radio" name="previousProduct" id="previousProductNo" value="No">
                                <label for="previousProductNo">No</label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset style="margin-top: 20px;">
                        <legend>
                            Product Details:
                        </legend>
                        <div class="customer-details-product-form-field">
                            <label for="gameTitle" class="product-input-labels"><abbr title="Required" style="color: red; font-weight: 600; font-size: 12px;">*</abbr> Game Title: </label>
                            <input type="text" name="gameTitle" id="gameTitle" class="product-input-fields" required>

                            <label for="gameGenre" class="product-input-labels"><abbr title="Required" style="color: red; font-weight: 600; font-size: 12px;">*</abbr> Game Genre: </label>
                            <select name="gameGenre" id="gameGenre" class="product-input-fields" required> Game Genre:
                                <option value="blank"></option>
                                <option value="jrpg">Japanese Role-Playing Game</option>
                                <option value="fps">First-Person Shooter</option>
                            </select>

                            <label for="gameDescription" class="product-input-labels"><abbr title="Required" style="color: red; font-weight: 600; font-size: 12px;">*</abbr> Game Description: </label>
                            <textarea name="gameDescription" id="gameDescription" class="product-input-fields" required></textarea>

                            <label for="gamePrice" class="product-input-labels"><abbr title="Required" style="color: red; font-weight: 600; font-size: 12px;">*</abbr> Price: </label>
                            <input type="number" name="gamePrice" id="gamePrice" class="product-input-fields" required>
                            
                            <label for="gameSearchTags" class="product-input-labels"> Search Tags: </label>
                            <button>Add Search Tag</button> <!-- Do JavaScript to target button, do some CSS animation that brings up a text box for the user to enter a search tag.-->

                            <!-- if textarea != null textArea should be required and must contain | some value of x between 0 and 5, decimals to 1 decimal point allowed where string is "x out of 5 stars"-->
                            <label for="gameReviews" class="product-input-labels"> Game Reviews: </label>
                            <textarea name="gameReviews" id="gameReviews" placeholder="Enter your review text here...." class="product-input-fields"></textarea>
                            <input type="number" name="gameReviews" min="0" max="5" class="product-input-fields">
                        </div>
                    </fieldset>
                    <button class="form-buttons" type="submit" style="margin-top: 5px; margin-left: 15px;">Submit</button>
                    <!-- Clear content of form button.-->
                    <button class="form-buttons" type="reset">Clear</button>
                </fieldset>

            </form>
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

        <script type="text/javascript">
            function validateForm() {
                let mustContainString = ("out of 5 stars");
                let gameReviews = document.getElementById("gameReviews").value;
                let containedSubStringIndex = gameReviews.indexOf(mustContainString);
                let numberLocation = gameReviews.indexOf(mustContainString) - 2;
                let pattern = /^
                console.log(gameReviews.substring(numberLocation, numberLocation + 1)); // if the substring returned is not a number within range of 0 - 5 inclusive of decimal to 1 point numbers. Then send alert.
                console.log(containedSubStringIndex);
                if (gameReviews.includes(mustContainString)) {
                    return 0;
                }

                else {
                    alert("You MUST include the out of 5 stars review, cunt.");
                }
            }
        </script>
    '
?>

<?php include($themefolder . '/template.php'); ?>