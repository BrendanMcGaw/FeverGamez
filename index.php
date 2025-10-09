<?php 
    $title = 'Fever Gamez - Homepage';
    $datafolder = 'data';
    $themefolder = 'themes';
    $content = '
    <div id="store-image-container">
        <img class="store-image" src="data/images/FeverGamezNewWebBannerEdition2.png" alt="Banner for Fever Gamez Website"> <!-- Store banner image-->
    </div>

    <div id="Nav-bar-container">
        <nav id="Nav-bar"> <!-- Navigation bar -->
            <!-- Hyperlinks with relative URLS-->
            <a href="index.php">Home</a> 
            <!-- <a href="genre.php">Games</a> -->
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
        <!-- Meaningful h1 welcome note-->
        <h1 style="width: 100%; text-align: center; margin-top: 0; padding-top: 22px;">Fever Gamez – Where Imagination Meets Nintendo</h1>
        <!-- Meaningful paragraphs of welcome note-->
        <p>
            Welcome to <em><strong>Fever Gamez!</strong></em> We’ve always been about bringing joy and imagination to our community, and now we’re excited to share the next chapter of our journey with you. 
            Once a toy store filled with wonder, we’ve now expanded to include <em>Nintendo</em> consoles and games so you can keep the fun going at every stage of play.
            <br><br>
            Browse around, discover your favorites, and let your next adventure begin right here with us. 
            Whether you’re here for nostalgia, new challenges, or just a spark of fun, FeverGames is your place to play.
        </p>
        <!-- Meaningful blockquote of welcome note-->
        <blockquote>
            <i>FeverGames has evolved from a beloved local toy store into a dynamic online destination 
            — now bringing the magic of <em>Nintendo</em> consoles and games directly to players’ homes, 
            while still carrying forward the playful spirit that has always defined our brand.</i>
        </blockquote>
        <!-- Meaningful h1 heading for Feature Product -->
        <h1 class="featured-products-title" style="width: 100%; text-align: center; grid-column: 1; grid-column: span 3; margin-top: 50px"><!-- Allows the featured products title to be centered across the grid.-->
            Featured Products
        </h1>
        
        <!-- Unordered list of THREE Featured Products -->
        <ul class="featured-products-section-list" style="margin-top: 10px;">
            <li class="featured-product-game-card" style="grid-column: 1; grid-row: 2; text-align: center;">
                <!-- image of Featured Product-->
                <img src="data/images/final-fantasy-10-card-image.jpg" alt="Image of nintendo switch version of Final Fantasy 10">
                <!-- Meaningful h2 headings for Feature Product -->
                <h2>Final Fantasy X | X-2 HD Remaster</h2>
                <!-- Short paragraph on Featured Product -->
                <p class="featured-card-description"><!-- Proper use of ABBR tag -->
                    <abbr title="Final Fantasy X">FF10</abbr> tells the story of Tidus, 
                    a star blitzball player who journeys with a young and beautiful summoner named Yuna on 
                    her quest to save the world of Spira from an endless cycle of destruction wrought by 
                    the colossal menace known as “Sin”.
                </p>
                <!-- Hyperlink to external website using absolute URL -->
                <a href="https://www.amazon.com.au/Final-Fantasy-Remaster-Nintendo-Switch/dp/B07JB4ZR2Y/ref=sr_1_1?crid=392ELAMV9NWRO&dib=eyJ2IjoiMSJ9.AGHGlcRVx6RQZimQTA0hPOtwp56Bhtscu3lOfKZwVjj4JfzWje7pqYUjMnXtrbEi60mEFwJW6avt770lz5xs0hG_K5NNnn5w_TObuO3Q8vOQJ4HRQpiEN6IKOaYHxrHOnzHahGPUgnimK1UY8NxFfCs8q6Yrz0ux_A6wWbtJV9JJyHa3OrfBlekIdNU4zAzY4fCV1s5gOGyzLuFiLrCWUjzERi9lVAGvyhnKPdCDRJk0X9CqMMsG2hKA-aHHDpJIJFHsdLWYl4gQZzAyOE_dEI5_xaAAQcuI4F0JtJq_1us.jFuJFrMh1-OkjF2ISDx8BZllGGOufPPIUCgTmepyt9M&dib_tag=se&keywords=Final+Fantasy+X+%7C+X-2+HD+Remaster&qid=1756359618&sprefix=final+fantasy+x+x-2+hd+remaster%2Caps%2C319&sr=8-1" target="_blank">
                    Buy it now!
                </a>
                <p style="margin: 0; padding: 0; width: 100%; text-align: left;">
                    <span class="genre-tag-in-cards">Genre:</span> <em>JRPG</em>
                </p>
            </li>

            <li class="featured-product-game-card" style="grid-column:2; grid-row: 2;">
                <!-- image of Featured Product-->
                <img src="data/images/final-fantasy-7-card-image.jpg" alt="Image of nintendo switch version of Final Fantasy 7">
                <!-- Meaningful h2 headings for Feature Product -->
                <h2>Final Fantasy VII &amp; Final Fantasy VII Remastered</h2>
                <!-- Short paragraph on Featured Product -->
                <p class="featured-card-description"> <!-- Proper use of ABBR tag -->
                    Square Enix Nintendo Switch <abbr title="Final Fantasy VII">FF7</abbr> and <abbr title="Final Fantasy VIII">FF8</abbr> Remastered Compatible with Nintendo Switch.
                    Final Fantasy VII, the timeless classic loved by a legion of fans, is now available with a number of helpful extra features! 
                    Experience an epic adventure beyond imagination, culminating in the final battle to decide the fate of the planet.
                </p>
                <!-- Hyperlink to external website using absolute URL -->
                <a href="https://www.amazon.com.au/Square-Nintendo-Switch-Fantasy-Remastered/dp/B08LB3XQ64/ref=sr_1_3?crid=3LKFZCKJTPVER&dib=eyJ2IjoiMSJ9.Elrspp2x8wUio4SY01KjSVKctKkHD-jPNmJqIIsL9DS9kBKJ1LagPY9TY639z7XUuKK-ImMMjK6Co5gYH--9yvkmVfq3Rqq3X37Nu3gMmTVXSovgbchQWkOk1InHnLUmd4Rl4K5vw2Kxi-VO0g30yrcbt8AmoPXCUoamXGTLIFOAddNOEXs0IxINKUXgqC9zLLXQZRI58cbZ0O8FCKhqnZPwmT5jYs3obdaow-eiaJ8YXbQqADhe6P8uEG2IxRK2.N9syIpDadckpNmc30lL1GQk23l8STBe1F5IWG9nIKNg&dib_tag=se&keywords=Final+fantasy+7+and+8+remastered+twin+pack&qid=1756357157&sprefix=final+fantasy+7+and+8+remasteredtwin+pack%2Caps%2C206&sr=8-3" target="_blank">
                    Buy it now!
                </a>
                <p style="margin: 0; padding: 0; width: 100%;text-align: left;">
                    <span class="genre-tag-in-cards">Genre:</span> <em>JRPG</em>
                </p>
            </li>
        
            <li class="featured-product-game-card" style="grid-column: 3; grid-row: 2;">
                <!-- image of Featured Product-->
                <img src="data/images/final-fantasy-9-card-image.jpg" alt="Image of ninentdo switch version of Final Fantasy 9">
                <!-- Meaningful h2 headings for Feature Product -->
                <h2>Final Fantasy IX</h2>
                <!-- Short paragraph on Featured Product -->
                <p class="featured-card-description">
                    Through a series of unusual circumstances, 
                    Zidane and her personal guard, Steiner, fall in with Zidane and set out on an incredible journey. 
                    Meeting unforgettable characters like Vivi and Quina along the way, they learn about themselves, 
                    the secrets of the Crystal and a malevolent force that threatens to destroy their world.
                </p>
                <!-- Hyperlink to external website using absolute URL -->
                <a href="https://www.amazon.com.au/Final-Fantasy-IX-%E8%BC%B8%E5%85%A5%E7%89%88-Switch/dp/B08LF3GCJ7/ref=sr_1_1?crid=3EAIZBRF64MCK&dib=eyJ2IjoiMSJ9.PcGmVcNiw1YZZbP5xtzaNFUUr9lgqvhdbYU7OnHisKRVCE3etiDGFQwt32oaHLErvI-CG_A4S8UFFwNj-zm6j53zXTwR_WCggm6G1BuEPO4ma0g_Xpd1xonjR43CyN_4Fzr5VNVzUewMyTxxBjwLLA.NJ9HOOR_dTEU9v6KnDoo4CgsrvhHmqYRJei7U0YeY8I&dib_tag=se&keywords=Final+Fantasy+IX+switch&qid=1756357842&sprefix=final+fantasy+ix+switc%2Caps%2C229&sr=8-1" target="_blank">
                    Buy it now!
                </a>
                <p style="margin: 0; padding: 0; width: 100%; text-align: left;">
                    <span class="genre-tag-in-cards">Genre:</span><em>JRPG</em> <!-- Proper use of em to help with list algorithm of genre searches. -->
                </p>
            </li>
        </ul>
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
<!-- TODO:: Move this to run during the opening on the Index.php page, this should not be running here as it will be invalidated during the validation test. -->
<script type="text/javascript">
    // Reminds user what their last visited product genre and the time, if they haven't visited. Do nothing.
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

</script>

<?php include($themefolder . '/template.php'); ?>