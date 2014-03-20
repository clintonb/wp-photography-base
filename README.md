wp-photography-base
===================

This is my customized Wordpress theme for my photography website. It is based on [wordpress-bootstrap](http://320press.com/wpbs). Much of the original functionality is intact. Most of my changes CSS modifications and the addition of new page templates for displaying portfolios and client downloads. Additionally, this theme relies on my plugin, [wp-flickr-base](https://github.com/clintonb/wp-flickr-base) image retrieval from Flickr.

Page Templates
--------------

Template     | Description        | Example
------------- | ------------- | ----------
Homepage | Displays a full-screen slideshow that cannot be closed | http://clintonblackburn.com/
Portfolio | Displays a grid of photos. Clicking on a photo enters a slideshow. | http://clintonblackburn.com/portfolio/portraits/
Client Download | Similar to portfolio, but includes download links for individual photos and the entire set | http://clintonblackburn.com/clients/joemmys-shots/


**Custom Fields**

The portfolio and client download pages rely on two custom fields:

* flickr_photoset_id: ID of the photoset being displayed
* zip_url: (optional) URL for the "Download All Images" link. This is only used on the client download page. I prefer to use [Flick and Share](http://www.flickandshare.com/) links.
