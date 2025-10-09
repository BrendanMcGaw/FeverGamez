<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $themefolder ?>/style.css">
    </head>
    <body>
        <?php
            echo $headcontent; // Allows the page to have the website header content.
            $xmlpath = $datafolder . "/xml/" . $_GET['genre'] . '.xml'; // Gets the xml directory path.
            $root = simplexml_load_file($xmlpath); // loads the simpleXML file as the as the root directory.
            echo '<div id="body-content-container">';
            foreach ($root->children() as $genre) { // Gets us the children of the root elemement (Games)
                echo '<h1 class="game-genre-heading">' . $genre->getName() . ': ' . $_GET["genre"] . '</h1>'; // This is our Genre text.
                foreach($genre->children() as $game) { // Gets us the children of the genre element
                    echo '<div class="genre-product-card">'; // Contains each product on the genre page.
                    foreach($game->children() as $gamedata) { // Gets us the children of the game element 
                        switch($gamedata->getName()) { // Switch cases to go through each game and segment each element of each game.
                            case 'Title':
                                echo '<h3 class="genre-product-content-right product-title">' . $gamedata->getName() . ': ' . $game->Title .  '</h3>'; 
                                break;
                            case 'Description':
                                echo '<p class="genre-product-content-right product-description">' . $gamedata->getName() . ': ' . $game->Description . '</p>'; 
                                break;
                            case 'Price':
                                echo '<p class="genre-product-content-right product-price" >'. $gamedata->getName() . ': ' . $game->Price . '</p>'; 
                                break;
                            case 'SearchTags':
                                echo '<p class="genre-product-content-right product-searchtags">' . '<em>' . $game->SearchTags . '</em>' . '</p>'; 
                                break;
                            case 'Reviews':
                                echo '<p class="genre-product-content-right product-reviews" >' . $gamedata->getName() . ': ' . $game->Reviews['score'] . ' stars: ' . $game->Reviews . '</p>'; 
                                break;
                            case 'RelativeImagePath':
                                echo '<img class="genre-product-image-left" src="' . $game->RelativeImagePath . '" alt="" />' . '<br>';
                                break;
                            case 'AbsoluteWebpageURL':
                                echo '<a class="genre-product-content-right product-url" href="' . $game->AbsoluteWebpageURL . '"/>Link to Webpage</a>'; 
                                break;
                        }
                    }
                    echo '</div>';
                }
            }
            echo '</div>';
            echo $footcontent;
            // This will be our tester for reading data from an XML file and turning it into html. WE're going to test today, then do this as a template and use it for 2 separate xml files.
            /**
             * Use include or require if you specifically need the file to be processed multiple times (e.g., for dynamically generated content)
             */
        ?>
        <script type="text/javascript"> // Runs whenever the page is generated.

            // Sets the latest cookie of genre page visited with a date and time.
            function setCookieGenreTimeDate() {
                const date = new Date();
                date.setTime(date.getTime());
                const parameterStringFind = window.location.search; // Finds the query parameter within the window we've oepned.
                const genreParameter = new URLSearchParams(parameterStringFind); // Creates instance of an interface that provides utility methods to work with query strings of a URL.
                const genre = genreParameter.get('genre'); // gets the parameter of genre="whateverQueryPageWe'reOn"
                console.log(genre);
                document.cookie = genreParameter;
                document.cookie = "timeLastAccessed=" + date;
            }

            // Runs function whenever genre page is generated.
            setCookieGenreTimeDate();
        </script>
    </body>