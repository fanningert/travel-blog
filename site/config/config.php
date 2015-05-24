<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

/*
 * Kirby field extension: Place
 */
c::set('place.defaults.lat', 45.5230622);
c::set('place.defaults.lng', -122.67648159999999);
c::set('place.defaults.zoom', 14);

/*
 * Kirby extension: ImageExt
 */
c::set('kirby.extension.imageext.support.tag.image', true);
c::set('kirby.extension.imageext.support.tag.image_gallery', true);

c::set('kirbytext.image.caption_field', 'caption');
c::set('kirby.extension.imageext.gallery.link.class', 'strip');
c::set('kirby.extension.imageext.gallery.link.attr', 'data-strip-group');

/*
 * Kriby extension: GoogleMaps
 */
c::set('kirby.extension.gmaps.class', 'googlemaps');
c::set('kirby.extension.gmaps.zoom', 12);