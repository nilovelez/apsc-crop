# APS-C Crop

A simple WordPress plugin that calculates equivalent focal lengths and apertures based on crop factors for photographic lenses.

## Description

The APS-C Crop is a lightweight WordPress plugin that helps photographers understand how their lenses will perform on different sensor sizes. It calculates the equivalent focal length and aperture values when using lenses on cameras with different crop factors.

### Features

- Real-time calculation of equivalent focal lengths and apertures
- Support for various crop factors (APS-C, Micro 4/3, 1-inch, etc.)
- Clean and responsive design
- No jQuery dependency
- Optimized performance (scripts and styles only load when needed)

## Installation

1. Upload the `apsc-crop` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode `[apsc_crop_calculator]` in any post or page

## Usage

1. Enter the focal length of your lens in millimeters
2. Enter the aperture value (f-number)
3. Select the crop factor of your camera
4. The calculator will automatically show the equivalent values for a full-frame camera

## Changelog

### 1.1
- Implemented real-time calculation (removed calculate button)
- Improved form field styling and consistency
- Optimized performance by loading assets only when needed
- Removed jQuery dependency

### 1.0
- Initial release

## Credits

Developed by [Nilo Vélez](https://www.nilovelez.com/)

## License

This plugin is licensed under the GPL v2 or later.

## Support

For support, please visit the [GitHub Issues](https://github.com/nilovelez/apsc-crop/issues) page. 