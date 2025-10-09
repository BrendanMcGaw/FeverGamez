<?php 
    $title = 'Contact Us';
    $datafolder = 'data';
    $themefolder = 'themes';
    $content = '
        <div id="store-image-container">
            <img class="store-image" src="data/images/FeverGamezNewWebBannerEdition2.png" alt="Picture of web site banner for Fever Gamez"> <!-- Store banner image-->
        </div>

        <!-- Navbar -->
        <div id="Nav-bar-container">
            <nav id="Nav-bar"> <!-- Navigation bar -->
                <!-- Hyperlinks with relative URLS-->
                <a href="index.php">Home</a> 
            <div class="dropdown">
                <button class="dropbtn">Games
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
            <div id="contact-body-grid">
                <form class="email-form" action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post">
                    <!-- Appropriate level 2 heading -->
                    <h2 style="justify-self: center;">Contact Us</h2> 
                    <!-- Name of person sending message  use of ABBR tag -->
                    <label for="firstName"><abbr title="Required" style="color: red; font-weight: 600;">*</abbr>First Name:</label>
                    <br>
                    <input type="text" id="firstName" name="firstName" placeholder="John" required>
                    <br><br>
                    <label for="lastName"><abbr title="Required" style="color: red; font-weight: 600;">*</abbr>Last Name:</label>
                    <br>
                    <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                    <br><br>
                    <!-- Subject of the message  use of ABBR tag -->
                    <div class="form-subject-line">
                        <label for="subject"><abbr title="Required" style="color: red; font-weight: 600;">*</abbr>Subject:</label>
                        <br>
                        <input type="text" name="Subject" id="subject" placeholder="Subject of message...">
                    </div>
                    <!-- Message text area-->
                    <textarea id="message" name="message" placeholder="Enter your message...." required></textarea>

                    <div class="form-email-container"> 
                        <!-- Email address for replies and use of ABBR tag-->
                        <label for="email"><abbr title="Required" style="color: red; font-weight: 600;">*</abbr>Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="JohnDoe@gmail.com" required>
                        <br><br>
                    </div>

                    <!-- Radio buttons to declare if email needs urgent attention.  use of ABBR tag -->
                    <p><abbr title="Required" style="color: red; font-weight: 600;">*</abbr>Is this email in need of an urgent response?</p>
                    <!-- Message urgency radio buttons.-->
                    <input type="radio" id="urgent" name="urgency" required>
                    <label for="urgent">Yes</label>
                    <input type="radio" id="nonurgent" name="urgency" required>
                    <label for="nonurgent">No</label>
                    <br><br>
                    <!-- Submit button for form -->
                    <button class="form-buttons" type="submit">Submit</button>
                    <!-- Clear content of form button.-->
                    <button class="form-buttons" type="reset">Clear</button>
                    <!-- <button type="submit"></button> -->
                </form>
            </div>
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
    ';
?>

<?php include($themefolder . '/template.php'); ?>