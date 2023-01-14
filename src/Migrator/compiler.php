<?php

declare(strict_types = 1)
;
namespace Larauto\Migrator\Types;

class Compiler
{

    public static function isExist($key): bool
    {
        return array_key_exists($key, self::$map);
    }

    private static array $map = [
        "bigIncrements" => "id",
        "data" => "binary",
        "binary" => "binary",
        "char" => "char",
        "string" => "string",
        "created_at" => "dateTime",
        "updated_at" => "dateTime",
        "deleted_at" => "softDeletes",
        "date" => "date",
        "dateTime" => "dateTime",
        "double" => "decimal",
        "decimal" => "decimal",
        "enum" => "enum",
        "float" => "float",
        "primaryIncrement" => "increment",
        "int" => "integer",
        "integer" => "integer",
        "bigInteger" => "bigInteger",
        "mediumInteger" => "mediumInteger",
        "smallInt" => "smallInteger",
        "smallInteger" => "smallInteger",
        "tinyInteger" => "tinyInteger",
        "longText" => "longText",
        "mediumText" => "mediumText",
        "remember_token" => "varchar",
    ];
}
