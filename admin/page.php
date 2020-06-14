<?php

    $action = isset( $_GET[ ' action' ] ) ? $action = 'action' : $action = 'manage';
    

    if ( $action == 'manage' ) {
        echo 'Manage Page';

    } elseif ( $action == 'add' ) {
        echo 'Add Page';

    } elseif ( $action == 'edit' ) {
        echo 'Edit Page';
        
    } elseif ( $action == 'delete' ) {
        echo 'Delete Page';
        
    } else {
        echo 'Error 404 Page';
        
    }
    