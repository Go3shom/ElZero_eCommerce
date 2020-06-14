<?php

    function lang( $phrase ) {
        static $lang = array(
            /*==================*/
            /** Admin HomePage **/
            /*==================*/
            // Navbar Links
            '__BRAND'                       =>  'Shop',
            '__CATEGORIES'                  =>  'Categories',
            '__ITEMS'                       =>  'Items',
            '__MEMBERS'                     =>  'Members',
            '__STATISTICS'                  =>  'Statistics',
            '__LOGS'                        =>  'Logs',
            '__USER'                        =>  'Admin',
            '__ENDIT_PROFILE'               =>  'Edit Profile',
            '__SETTINGS'                    =>  'Settings',
            '__LOGOUT'                      =>  'Logout',
            
        );
        return $lang[ $phrase ];
    }
