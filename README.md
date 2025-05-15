# APS-C Crop

A simple calculator to convert focal length and aperture values based on different crop factors.

## Description

This plugin adds a simple calculator to convert focal length and aperture values based on different crop factors. It's useful for photographers who want to know the equivalent focal length and aperture they would need on a full-frame camera to achieve the same field of view and depth of field.

### Features

- Real-time calculation of equivalent focal lengths and apertures
- Support for various crop factors (APS-C, Micro 4/3, 1-inch, etc.)
- Clean and responsive design
- No jQuery dependency
- Optimized performance (scripts and styles only load when needed)
- Gutenberg block support

## Installation

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode `[apsc_crop_calculator]` to display the calculator on any page or post, or add the block through the editor.

## Usage

1. Enter the focal length of your lens in millimeters
2. Enter the aperture value (f-number)
3. Select the crop factor of your camera
4. The calculator will automatically show the equivalent values for a full-frame camera

## Changelog

### 1.3
* Added Gutenberg block support
* Fixed JavaScript translations
* Improved code organization
* Added proper text domain loading

### 1.2
* Normalized all CSS classes to use underscores
* Added unique prefixes to all IDs and functions
* Updated shortcode to use consistent naming
* Improved code organization and maintainability

### 1.1
* Implemented real-time calculation (removed calculate button)
* Improved form field styling and consistency
* Optimized performance by loading assets only when needed
* Removed jQuery dependency

### 1.0
* Initial release

## Credits

Developed by [Nilo Vélez](https://www.nilovelez.com/)

## License

This plugin is licensed under the GPL v2 or later.

## Support

For support, please visit the [GitHub Issues](https://github.com/nilovelez/apsc-crop/issues) page. 