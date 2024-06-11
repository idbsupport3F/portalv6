/**
 * @see {@link https://bud.js.org/extensions/bud-preset-wordpress/editor-integration/filters}
 */
roots.register.filters('@scripts/filters');

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

/**
 * Accordian Block Register
 * 
 * @see {@link https://github.com/Log1x/poet/issues/22#issuecomment-792573232}
 */

import { __ } from '@wordpress/i18n'
import { registerBlockType } from '@wordpress/blocks'
import { InnerBlocks } from '@wordpress/block-editor'

/** components */
import edit from './accordion/edit'

registerBlockType(`sage/accordion`, {
    title: __(`Accordion`, `sage`),
    category: `flexor`,
    icon: `format-image`,
    attributes: {
        accordions: {
            type: 'array',
            default: [{ label: 'New accordion' }],
        },
    },
    edit
})