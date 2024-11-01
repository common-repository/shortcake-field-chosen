### Shortcake Field Chosen

* Contributors: Perturbatio
* Donate link: http://www.perturbatio.com
* Tags: Shortcake UI, jQuery Chosen
* Requires at least: 4.5.3
* Tested up to: 4.7.5
* Stable tag: 1.2.0
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin which provides a jQuery-chosen enhanced select field for the shortcake plugin

## Description

This is a wordpress plugin which provides a select field enhanced by the jQuery chosen library for
use with the [Shortcake shortcode-ui](https://github.com/wp-shortcake/shortcake) plugin.

Note: this has been tested against Shortcake v0.7.0-alpha 

## Installation

The latest source can be obtained from: https://github.com/Perturbatio/shortcake-field-chosen

1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The `chosen` field type will now be available to use

## Usage

This is a drop-in replacement for the `select` field type, it has all the same requirements, the only difference is 
that instead of using `'type' => 'select'` you should use `'type' => 'chosen'`.

## Changelog


### 1.2.0
* added es6 promise polyfill
* fix for shortcode-ui 0.7.2 and render_edit event firing before render complete


### 1.1.1
* applied fix for latest version of shortcake UI
* added chosen CSS to enqueued styles

### 1.0.3
* added README.txt for wordpress.org submission

### 1.0.2
* added github link to docs

### 1.0.1
* fixed issue with shortcake link in docs

### 1.0
* Initial release
