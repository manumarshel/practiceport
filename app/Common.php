<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */

if (! function_exists('locale_set_default')) {
    function locale_set_default(string $locale): bool
    {
        return true;
    }
}

if (! function_exists('locale_get_default')) {
    function locale_get_default(): string
    {
        return 'en';
    }
}

if (! class_exists('Locale', false)) {
    class Locale
    {
        public static function getDefault(): string
        {
            return 'en';
        }
        public static function setDefault(string $locale): bool
        {
            return true;
        }
    }
}
