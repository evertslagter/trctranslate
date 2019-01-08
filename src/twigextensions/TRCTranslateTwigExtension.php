<?php
/**
 * TRCTranslate plugin for Craft CMS 3.x
 *
 * Use the ‘t’ function to output translations.
 *
 * @link      https://theredcorner.nl/
 * @copyright Copyright (c) 2019 The Red Corner
 */

namespace theredcorner\trctranslate\twigextensions;

use theredcorner\trctranslate\TRCTranslate;
use craft\elements\Entry;

use Craft;

/**
 * @author    Rens Verschuren
 * @package   TRCTranslate
 * @since     0.0.1
 */
class TRCTranslateTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'TRCTranslate';
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('t', [$this, 'translate']),
        ];
    }

    /**
     * @param null $text
     *
     * @return string
     */
    public function translate($key)
    {
        $entry = Entry::find()
          ->section('translations')
          ->search("key:" . $key)
          ->one();

        if (is_null($entry)) {
          return "Missing translation: " . $key;
        }

        return $entry->title;
    }
}
