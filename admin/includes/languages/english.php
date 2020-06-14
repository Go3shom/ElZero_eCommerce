<?php

    function lang( $phrase ) {
        static $lang = array(
            // Admin HomePage
            '__BRAND'                       =>  'Shop',
            '__CATEGORIES'                  =>  'Categoires',
            '__USER'                        =>  'Admin',
            '__ENDIT_PROFILE'               =>  'Edit Profile',
            '__SETTINGS'                    =>  'Settings',
            '__LOGOUT'                      =>  'Logout',
            
        );
        return $lang[ $phrase ];
    }