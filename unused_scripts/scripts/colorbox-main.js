( function( $ ) { // opens document ready

    /* Function to add Colorbox pop up to various links */

    function colorboxLinks() {
        var windowWidth = $( window ).width();
        var galleryImgItems = $('img');
    
        // For galleries that link to images
        if ( windowWidth < 640 ) {
            galleryImgItems.colorbox({
                // rel: 'gallery',
                maxWidth: '100%',
                maxHeight: '75%'
            });
        } else {
            galleryImgItems.colorbox({
                // rel: 'gallery',
                maxWidth: '75%',
                maxHeight: '75%'
            });
        }

        console.log('Hey there');

    }

} )( jQuery );
