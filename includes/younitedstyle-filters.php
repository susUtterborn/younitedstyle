<?php

function younitedstyle_custom_excerpt_length($length) {
	return 45;

}

add_filter('excerpt_lentgh' , 'younitedstyle_custom_excerpt_length');

function younitedstyle_excerpt_more($more) {
	return sprintf('<br /> <a class="read-more btn btn-primary"  href="%1$s">%2$s</a>',
		get_permalink( get_the_ID() ),
        __( 'Read More', 'younitedstyle' )
    );

}
add_filter('excerpt_more' , 'younitedstyle_excerpt_more');