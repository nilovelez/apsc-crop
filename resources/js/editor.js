/* eslint-disable */
/* global wp */

(function(blocks, element) {
    var el = element.createElement;
    var registerBlockType = blocks.registerBlockType;

    registerBlockType('apsc-crop/calculator', {
        title: apsc_crop_i18n.title,
        icon: 'calculator',
        category: 'widgets',
        edit: function() {
            return el('div', { className: 'components-placeholder' },
                el('div', { className: 'components-placeholder__label' },
                    apsc_crop_i18n.title
                ),
                el('div', { className: 'components-placeholder__instructions' },
                    apsc_crop_i18n.description
                )
            );
        },
        save: function() {
            return null;
        }
    });
})(
    window.wp.blocks,
    window.wp.element
); 