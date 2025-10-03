<?php 
    $title = 'genre';
    $datafolder = 'data';
    $themefolder = 'themes';
    $headcontent = '
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
    ';
    $footcontent = '
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

<?php include($themefolder . '/xmltemplate.php'); ?>