<?php

    // Coded by Jade Allen Cook 2015

    // Include a CSS stylesheet
    function includeCSS($css) {
        // If the stylesheet even exists...
        if (file_exists('css/' . $css . '.css')) {
            echo '<link href="css/' . $css . '.css" rel="stylesheet" type="text/css" />';
            echo '<script>console.log("LOADED: ' . $css . '.css")</script>'; 
        } else {
            // If it doesn't then tell me in my console
            echo '<script>console.log("ERROR: ' . $css . '.css")</script>'; 
        }
    }

    // Include a PHP scripts
    function includePHP($php) {
        // If the stylesheet even exists...
        if (file_exists('php/' . $php . '.php')) {
            include_once('php/' . $php . '.php');
            echo '<script>console.log("LOADED: ' . $php . '.php")</script>'; 
        } else {
            // If it doesn't then tell me in my console
            echo '<script>console.log("ERROR: ' . $php . '.php")</script>'; 
        }
    }

    function forSale ($price, $what) {
        $button = '<form action="/charge" method="POST">';
        $button .= '<script src="https://checkout.stripe.com/checkout.js"';
        $button .= 'data-allow-remember-me="true"';
        $button .= 'data-label="$' . $price . '.00"';
        $button .= 'data-shipping-address="true"';
        $button .= 'class="stripe-button"';
        $button .= 'data-key="pk_test_udVr5jh5RV9U3CNfjnFcWxVD"';
        $button .= 'data-image="img/avatar.png"';
        $button .= 'data-name="Black Door Fitness"';
        $button .= 'data-description="' . $what . '"';
        $button .= 'data-amount="' . $price . '00"';
        $button .= 'data-locale="auto"></script></form>';
        echo $button;
    }

?>