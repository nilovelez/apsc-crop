<?php
/**
 * Main plugin class
 */
class APSC_CROP {
    /**
     * Initialize the plugin
     */
    public function init() {
        add_shortcode('apsc_crop_calculator', array($this, 'render_calculator'));
        add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
    }

    /**
     * Register required scripts and styles
     */
    public function register_scripts() {
        wp_register_style(
            'apsc_crop',
            APSC_CROP_PLUGIN_URL . 'resources/css/style.css',
            array(),
            APSC_CROP_VERSION
        );

        wp_register_script(
            'apsc_crop',
            APSC_CROP_PLUGIN_URL . 'resources/js/calculator.js',
            array(),
            APSC_CROP_VERSION,
            true
        );
    }

    /**
     * Render the calculator shortcode
     */
    public function render_calculator() {
        // Enqueue scripts and styles only when shortcode is used
        wp_enqueue_style('apsc_crop');
        wp_enqueue_script('apsc_crop');

        $crop_factors = array(
            'half-25' => array(
                'name' => esc_html__('1/2.5" (6.0x crop)', 'apsc-crop'),
                'value' => 6.0
            ),
            'half-23' => array(
                'name' => esc_html__('1/2.3" (5.64x crop)', 'apsc-crop'),
                'value' => 5.64
            ),
            'half-17' => array(
                'name' => esc_html__('1/1.7" (4.55x crop)', 'apsc-crop'),
                'value' => 4.55
            ),
            'two-thirds' => array(
                'name' => esc_html__('2/3" (4.50x crop)', 'apsc-crop'),
                'value' => 4.50
            ),
            'one-inch' => array(
                'name' => esc_html__('1" (2.70x crop)', 'apsc-crop'),
                'value' => 2.70
            ),
            'm43' => array(
                'name' => esc_html__('Micro 4/3 (2x crop)', 'apsc-crop'),
                'value' => 2.0
            ),
            'aps-c' => array(
                'name' => esc_html__('APS-C (1.5x crop)', 'apsc-crop'),
                'value' => 1.5
            ),
            'canon-aps-c' => array(
                'name' => esc_html__('APS-C (Canon) (1.62x crop)', 'apsc-crop'),
                'value' => 1.62
            ),
            'sony-aps-c' => array(
                'name' => esc_html__('APS-C (Sony) (1.53x crop)', 'apsc-crop'),
                'value' => 1.53
            ),
            'half-frame' => array(
                'name' => esc_html__('Half-frame (1.44x crop)', 'apsc-crop'),
                'value' => 1.44
            ),
            'aps-h' => array(
                'name' => esc_html__('APS-H (1.29x crop)', 'apsc-crop'),
                'value' => 1.29
            )
        );

        ob_start();
        ?>
        <div class="apsc_crop_calculator">
            <div class="apsc_crop_form">
                <div class="apsc_crop_field">
                    <label for="apsc_crop_focal_length"><?php esc_html_e('Focal Length (mm):', 'apsc-crop'); ?></label>
                    <input type="number" id="apsc_crop_focal_length" name="focal_length" min="1" step="0.1" required>
                </div>
                
                <div class="apsc_crop_field">
                    <label for="apsc_crop_aperture"><?php esc_html_e('Aperture (f/):', 'apsc-crop'); ?></label>
                    <input type="number" id="apsc_crop_aperture" name="aperture" min="0.7" step="0.1" required>
                </div>

                <div class="apsc_crop_field">
                    <label for="apsc_crop_crop_factor"><?php esc_html_e('Crop Factor:', 'apsc-crop'); ?></label>
                    <select id="apsc_crop_crop_factor" name="crop_factor" required>
                        <?php foreach ($crop_factors as $key => $factor) : ?>
                            <option value="<?php echo esc_attr($factor['value']); ?>" <?php selected($key, 'aps-c'); ?>>
                                <?php echo esc_html($factor['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="apsc_crop_results" style="display: none;">
                    <h3><?php esc_html_e('Equivalent Values', 'apsc-crop'); ?></h3>
                    <div class="apsc_crop_result_field">
                        <span class="apsc_crop_label"><?php esc_html_e('Equivalent Focal Length:', 'apsc-crop'); ?></span>
                        <span id="apsc_crop_equivalent_focal_length" class="apsc_crop_value"></span>
                    </div>
                    <div class="apsc_crop_result_field">
                        <span class="apsc_crop_label"><?php esc_html_e('Equivalent Aperture:', 'apsc-crop'); ?></span>
                        <span id="apsc_crop_equivalent_aperture" class="apsc_crop_value"></span>
                    </div>
                </div>

                <div class="apsc_crop_explanation">
                    <p><?php esc_html_e('The equivalent values show what focal length and aperture you would need on a full-frame camera to achieve the same field of view and depth of field.', 'apsc-crop'); ?></p>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
} 