<?php
/**
 * TRCTranslate plugin for Craft CMS 3.x
 *
 * Use the ‘t’ function to output translations.
 *
 * @link      https://theredcorner.nl/
 * @copyright Copyright (c) 2019 Rens Verschuren
 */

namespace theredcorner\trctranslate;

use theredcorner\trctranslate\twigextensions\TRCTranslateTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class TRCTranslate
 *
 * @author    Rens Verschuren
 * @package   TRCTranslate
 * @since     0.0.1
 *
 */
class TRCTranslate extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var TRCTranslate
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '0.0.1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new TRCTranslateTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'trctranslate',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
