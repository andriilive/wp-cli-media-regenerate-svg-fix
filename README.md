# Wp cli media regenerate svg fix

`wp-cli-media-regenerate-svg-fix` Fix the wp-cli media regenerate error for SVG images

+  Supports [Bedrock](https://roots.io/bedrock) `WordPress` installs

## Requirements

- Requires WP at least: `4.5`
- Tested up to WP: `5.7.2`
- Requires PHP: `>=5.6`
- Tested up to PHP: `8.1`

## Install & Activate plugin

### Composer (Bedrock Install)

`composer require andriilive/wp-cli-media-regenerate-svg-fix` at root

### ZIP Upload

1. Download `wp-cli-media-regenerate-svg-fix.zip` from [here](https://github.com/andriilive/wp-cli-media-regenerate-svg-fix/archive/refs/tags/0.1.0.zip)
2. Login to Wordpress Admin Dashboard
2. Navigate to `Plugins` > `Add new`
3. Press `Upload Plugin` and chose `wp-cli-media-regenerate-svg-fix.zip`
2. `Activate` the plugin through the `Plugins` menu in WordPress

### FTP

1. Upload folder `wp-cli-media-regenerate-svg-fix` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Regenerate thumbnails

You probably will need to [regenerate thumbnails](https://wordpress.org/search/regenerate+thumbnails) after install.

## See also

- Disable generated image sizes plugin for WordPress [andriilive/wp-disable-generated-image-sizes](https://github.com/andriilive/wp-disable-generated-image-sizes)
