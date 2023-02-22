<?php

function add_my_awesome_widgets_collection( $folders ) {
    $folders[] = 'D:/xampp/htdocs/wpweb/wp-content/plugins/extend-widgets-bundle/extra-widgets/'; // important: Slash on end string is required.
    return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection' );
