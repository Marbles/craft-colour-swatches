<?php
/**
 * color-swatches plugin for Craft CMS 3.x.
 *
 * Let clients choose from a predefined set of colours.
 *
 * @link      https://marbles.be
 *
 * @copyright Copyright (c) 2018 Marbles
 */

namespace marbles\colourswatches\assetbundles\colourswatchesfield;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Marbles
 *
 * @since     1.0.0
 */
class ColourSwatchesFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->sourcePath = '@marbles/colourswatches/assetbundles/colourswatchesfield/dist';

        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/ColourSwatches.css',
        ];

        $this->js = [
            'js/ColourSwatches.js',
        ];

        parent::init();
    }
}
