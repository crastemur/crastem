"use strict";

initProductsQuickview: function () {
    Riode.$body.on( 'click', '.btn-quickview', function ( e ) {
        e.preventDefault();
        Riode.popup( {
            items: {
                src: "ajax/quickview.html"
            },
            callbacks: {
                ajaxContentAdded: function () {
                    this.wrap.imagesLoaded( function () {
                        Riode.initProductSingle( $( '.mfp-product .product-single' ) );
                    } );
                }
            }
        }, 'quickview' );
    } );
},