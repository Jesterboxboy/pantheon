<?php
/* ------------------------------------------------------------------
 * Generated by bin/rulesGen.php
 * DO NOT MODIFY BY HAND!
 * ------------------------------------------------------------------
 */

namespace Frey;

class AccessRules
{
    const ADD_USER = 'ADD_USER';
    const ADMIN_EVENT = 'ADMIN_EVENT';
    const REFEREE_FOR_EVENT = 'REFEREE_FOR_EVENT';
    const EDIT_EVENT = 'EDIT_EVENT';

    public static function isInternal(string $name): bool
    {
        return defined(__CLASS__ . '::' . $name);
    }

    /**
     * @return array-key[]
     *
     * @psalm-return list<array-key>
     */
    public static function getNames(): array
    {
        return array_keys(self::getTranslations()); // ¯\_(ツ)_/¯
    }

    /**
     * @return array[]|false
     *
     * @psalm-return array<array-key, array{default: mixed, type: mixed, title: mixed}>|false
     */
    public static function getRules()
    {
        $translations = self::getTranslations();
        $defaults = self::_getDefaults();
        $types = self::_getTypes();

        return array_combine(array_keys($translations), array_map(function ($key) use ($translations, $defaults, $types) {
            return [
                'default' => $defaults[$key],
                'type' => $types[$key],
                'title' => $translations[$key]
            ];
        }, array_keys($translations)));
    }

    /**
     * @var string[]
     */
    protected static $_translations;
    /**
     * @var string[]
     */
    protected static $_defaults;
    /**
     * @var string[]
     */
    protected static $_types;

    /**
     * @return string[]
     */
    public static function getTranslations()
    {
        if (empty(self::$_translations)) {
            self::$_translations = [
                self::ADD_USER => _t('Invite person to event'),
                self::ADMIN_EVENT => _t('Use games administration features in event'),
                self::REFEREE_FOR_EVENT => _t('Use referee features in event'),
                self::EDIT_EVENT => _t('Edit event settings'),
            ];
        }
        return self::$_translations;
    }

    /**
     * @return string[]
     */
    protected static function _getDefaults()
    {
        if (empty(self::$_defaults)) {
            self::$_defaults = [
                self::ADD_USER => '0',
                self::ADMIN_EVENT => '0',
                self::REFEREE_FOR_EVENT => '0',
                self::EDIT_EVENT => '0',
            ];
        }
        return self::$_defaults;
    }

    /**
     * @return string[]
     */
    protected static function _getTypes()
    {
        if (empty(self::$_types)) {
            self::$_types = [
                self::ADD_USER => 'bool',
                self::ADMIN_EVENT => 'bool',
                self::REFEREE_FOR_EVENT => 'bool',
                self::EDIT_EVENT => 'bool',
            ];
        }
        return self::$_types;
    }
}
