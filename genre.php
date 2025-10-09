<?php 
    $title = 'Genre';
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
    $cookieScript = '
    <script type="text/javascript">
    function getCookies() {
        if (document.cookie != null) {
            let allCookies = document.cookie; // 
            let splitCookies = allCookies.split(';') // Splits all cookies into their own elements withinm the splitCookies array
            let partsOfGenre = splitCookies[0].split("="); // Splits the name-value pair into 2 separate elements for genre
            let partsOfTimeDate = splitCookies[1].split("="); // Splits the name-value pair into 2 separate elements for time/date
            // console.log(splitCookies[0]);
            // console.log(splitCookies[1]);
            // console.log(partsOfGenre);
            // console.log(partsOfTimeDate);
            alert("The last product genre you were browsing was: " + partsOfGenre[1] + "\n" + partsOfTimeDate[1]);
        }  
        return;
    }
    getCookies();

</script>'
?>

<?php include($themefolder . '/xmltemplate.php'); ?>