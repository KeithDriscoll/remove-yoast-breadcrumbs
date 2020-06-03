# Remove Yoast Breadcrumbs from Homepage
Does exactly that :)

## About
I've seen many methods of hiding Yoast breadcrumbs on the homepage (i.e. lonely *home* links) but many were overly complicated or simply used CSS to hide the link.

The <a href="https://wordpress.org/plugins/wordpress-seo/">Yoast SEO WordPress plugin</a> includes a few WordPress filters and that is what this code snippet does. It uses the `wpseo_breadcrumb_single_link` filter to return an empty string.

## Usage
Place the code from the `remove-yoast-breadcrumbs-from-homepage.php` file inside your theme functions.php file or core functionality plugin.