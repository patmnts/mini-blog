<?php

/*////////////////////////////////////////////////////////////////////
///////////////////////////////// ASSETS /////////////////////////////
////////////////////////////////////////////////////////////////////*/

Basset::collection('master', function($collection) {
    // CSS
    $collection->stylesheet('template/css/style.css');
    $collection->stylesheet('bower_components/bootstrap/dist/css/bootstrap.css');
    $collection->stylesheet('bower_components/font-awesome/css/font-awesome.css');
    $collection->stylesheet('bower_components/bootstrap/dist/js/bootstrap.js');
})
->rawOnEnvironment('local')
->apply('CssMin')
->apply('UriRewriteFilter');