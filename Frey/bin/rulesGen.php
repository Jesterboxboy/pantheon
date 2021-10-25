<?php

namespace Frey;
require_once __DIR__ . '/../src/primitives/Access.php';

function genFile($className, $rules)
{
    $consts = [];
    $translationsMap = [];
    $defaultsMap = [];
    $typesMap = [];

    foreach ($rules as $rule) {
        if (!in_array($rule['type'], [AccessPrimitive::TYPE_INT, AccessPrimitive::TYPE_ENUM, AccessPrimitive::TYPE_BOOL])) {
            echo '----- Error in rules.xml: check type of ' . $rule['name'] . '. Rule ignored!';
            continue;
        }

        $consts []= "const {$rule['name']} = '{$rule['name']}';";
        $defaultsMap []= "self::{$rule['name']} => '{$rule['defaultValue']}',";
        $typesMap []= "self::{$rule['name']} => '{$rule['type']}',";

        if (!empty($rule['isHidden'])) {
            continue; // no other things to do for hidden rules;
        }

        $translationsMap []= "self::{$rule['name']} => _t('{$rule['title']}'),";
    }

    $consts = implode(PHP_EOL . '    ', $consts);
    $translationsMap= implode(PHP_EOL . '                ', $translationsMap);
    $defaultsMap= implode(PHP_EOL . '                ', $defaultsMap);
    $typesMap= implode(PHP_EOL . '                ', $typesMap);

    return <<<PHP
<?php
/* ------------------------------------------------------------------
 * Generated by bin/rulesGen.php
 * DO NOT MODIFY BY HAND!
 * ------------------------------------------------------------------
 */

namespace Frey;

class {$className}
{
    {$consts}

    public static function isInternal(string \$name)
    {
        return defined(__CLASS__ . '::' . \$name);
    }

    public static function getNames()
    {
        return array_keys(self::getTranslations()); // ¯\_(ツ)_/¯
    }

    public static function getRules()
    {
        \$translations = self::getTranslations();
        \$defaults = self::_getDefaults();
        \$types = self::_getTypes();
        
        return array_combine(array_keys(\$translations), array_map(function(\$key) use (\$translations, \$defaults, \$types) {
            return [
                'default' => \$defaults[\$key],
                'type' => \$types[\$key],
                'title' => \$translations[\$key]
            ];
        }, array_keys(\$translations)));
    }

    protected static \$_translations;
    protected static \$_defaults;
    protected static \$_types;
    
    public static function getTranslations()
    {
        if (empty(self::\$_translations)) {
            self::\$_translations = [
                {$translationsMap}
            ];
        }
        return self::\$_translations;
    }
    
    protected static function _getDefaults()
    {
        if (empty(self::\$_defaults)) {
            self::\$_defaults = [
                {$defaultsMap}
            ];
        }
        return self::\$_defaults;
    }
    
    protected static function _getTypes()
    {
        if (empty(self::\$_types)) {
            self::\$_types = [
                {$typesMap}
            ];
        }
        return self::\$_types;
    }
}

PHP;
}

function sxml2arr($x) {
    $arr = [];
    foreach ($x as $v) {
        $arr[] = $v;
    }
    return $arr;
}

$rulesData = new \SimpleXMLElement(file_get_contents(__DIR__ . '/../data/rules.xml'));

// Internal global rules
$internal = genFile('InternalRules', array_merge(
    [],
    sxml2arr($rulesData->global->rule),
    sxml2arr($rulesData->globalAndPerEvent->rule)
));
file_put_contents(__DIR__ . '/../src/helpers/InternalRules.php', $internal);

// Per-event access rules
$perEvent = genFile('AccessRules', array_merge(
    [],
    sxml2arr($rulesData->perEvent->rule),
    sxml2arr($rulesData->globalAndPerEvent->rule)
));
file_put_contents(__DIR__ . '/../src/helpers/AccessRules.php', $perEvent);



