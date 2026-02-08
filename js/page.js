document.addEventListener( 'DOMContentLoaded', function() {
    console.log('page.js loaded ...');

    // Go through all wp-block-button__link elements and add the not-prose class to them
    const buttons = document.querySelectorAll( '.wp-block-button__link' );
    buttons.forEach( function( button ) {
        button.classList.add( 'not-prose' );
    } );
} );