<?php
require_once 'user.php';
class Model
{
    protected $attributes = [];
    protected static $tableName;

    public function __set($key, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$key] = $value;
    }

    public function __get($key)
    {
        // Check for existence of array key $key
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }

    public static function getTableName()
    {
        return static:: $tableName;
    }
}