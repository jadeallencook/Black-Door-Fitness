<div id="navbar">
    
    <center>
    
    <a href="index.php">
        <img src="img/black-logo.png" id="navbar-logo" />
    </a>
    
        <div id="navbar-links">
            
            <?php
                // These are all the links we want -
                $links = array('home', 'model', 'store', 'about', 'contact');

                // Let's display these links -
                foreach ($links as $link) {
                    
                    // If the link selected is active, keep it highlighted 
                    if (isset($_GET['page']) && $_GET['page'] == $link ) {
                        echo '<a href="index.php?page=' . $link . '" class="navbar-href">';
                        echo '<div class="navbar-active">' . $link . '</div></a>';
                    } 
                    
                    // Else let's do this -
                    else {
                        // Display them if the files exist with the correct variable =
                        if (file_exists('pages/' . $link . '.php')) {
                            echo '<a href="index.php?page=' . $link . '" class="navbar-href">';
                            echo '<div class="navbar-link">' . $link . '</div></a>';
                        } else {
                            // If the file doesn't exist then give them our 404 page
                            echo '<a href="index.php?page=404" class="navbar-href">';
                            echo '<div class="navbar-link">' . $link . '</div></a>';
                        }
                    }
                }
            ?>
        </div>
        
    </center>
    
</div>