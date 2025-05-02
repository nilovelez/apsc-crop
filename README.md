# APS-C Crop Calculator

A WordPress plugin that provides a simple calculator to convert focal length and aperture values based on different crop factors.

## Description

The APS-C Crop Calculator allows photographers to easily convert lens specifications between different sensor sizes. It's particularly useful when comparing lenses across different camera systems or when trying to understand the equivalent field of view and depth of field of a lens on a different format.

### Features

- Calculate equivalent focal length and aperture values
- Support for multiple sensor formats:
  - 1/2.5" (6.0x crop)
  - 1/2.3" (5.64x crop)
  - 1/1.7" (4.55x crop)
  - 2/3" (4.50x crop)
  - 1" (2.70x crop)
  - Micro 4/3 (2x crop)
  - APS-C (1.5x crop)
  - APS-C (Canon) (1.62x crop)
  - APS-C (Sony) (1.53x crop)
  - Half-frame (1.44x crop)
  - APS-H (1.29x crop)
- Simple and intuitive interface
- Fully responsive design
- Internationalization ready

## Installation

1. Upload the `apsc-crop` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode `[crop_factor_calculator]` in any post or page

## Usage

1. Enter the focal length of your lens in millimeters
2. Enter the aperture value (f-number)
3. Select the crop factor of your camera
4. Click "Calculate" to see the equivalent values for a full-frame camera

## Frequently Asked Questions

### What is a crop factor?

A crop factor is the ratio of a camera's sensor size compared to a full-frame (35mm) sensor. It affects both the field of view and depth of field of a lens.

### How are the equivalent values calculated?

- Equivalent Focal Length = Actual Focal Length × Crop Factor
- Equivalent Aperture = Actual Aperture × Crop Factor

### Can I add more crop factors?

Currently, the crop factors are hardcoded in the plugin. Future versions may include a way to add custom crop factors.

## Screenshots

[Add screenshots here]

## Changelog

### 1.0.0
* Initial release

## License

This plugin is licensed under the GPL v2 or later.

## Credits

Developed by [Nilo Vélez](https://www.nilovelez.com/)

## Support

For support, please [open an issue](https://github.com/nilovelez/apsc-crop/issues) on GitHub. 