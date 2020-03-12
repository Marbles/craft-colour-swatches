<?php
/**
 * color-swatches plugin for Craft CMS 3.x.
 *
 * Let clients choose from a predefined set of colours.
 *
 * @link      https://marbles.be
 *
 * @copyright Copyright (c) 2020 Marbles
 */

namespace marbles\colourswatches;

use craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use marbles\colourswatches\fields\ColourSwatches as ColourSwatchesField;
use marbles\colourswatches\models\Settings;
use yii\base\Event;

/**
 * Class Colorswatches.
 *
 * @author    Marbles
 *
 * @since     2.0.0
 */
class ColourSwatches extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var ColourSwatches
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function (RegisterComponentTypesEvent $event) {
                $event->types[] = ColourSwatchesField::class;
            }
        );
    }

    protected function createSettingsModel()
    {
        return new Settings();
    }
}
