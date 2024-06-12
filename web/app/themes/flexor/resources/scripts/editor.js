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
import images from './blocks/images'

registerBlockType(`sage/swiperlogo`, {
    title: __(`Swiper Logo`, `sage`),
    category: `flexor`,
    icon: `format-gallery`,
    apiVersion: 3,
	supports: {
		align: [ 'full' ],
	},
	attributes: {
        images: {
            type: 'array',
            source: 'query',
            selector: 'img',
            query: {
                id: {
                    type: 'string',
                    source: 'attribute',
                    attribute: 'src',
                },
                alt: {
                    type: 'string',
                    source: 'attribute',
                    attribute: 'alt',
                },
            },
            default: [
                { id: "https://picsum.photos/116/50", alt: "test image" }
            ]
        },
        totalImage: {
            type: 'number',
            default: 0
        }
	},
    edit: images,
    save: () => <InnerBlocks.Content />
})