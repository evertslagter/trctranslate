# TRCTranslate plugin for Craft CMS 3.x

Use the `t()` Twig function to output `I18n` like strings.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require the-red-corner/trctranslate

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for TRCTranslate.

## Configuring TRCTranslate

1. Add a section with the handle `translations`.
2. Add a field with the handle `key` to the `translations` section. You also have to include the `title` field for this section.

## Using TRCTranslate

Use the following syntax to display a translated string in your templates:

        {{ t('footer.address.phoneNumber') }}

`footer.address.phoneNumber` is the key of the translation entry.

Brought to you by [The Red Corner](https://theredcorner.nl/)
