<?php

    function lang( $phrase ) {
        static $lang = array(
            // Admin HomePage
            '__HOME'            =>  'Home',
            
        );
        return $lang[ $phrase ];
    }