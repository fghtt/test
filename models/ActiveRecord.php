<?php

namespace Models;

use App\Database\Db;

abstract class ActiveRecord
{
    /**
     * The table name
     *
     * @var string
     */
    protected $tableName;

    /**
     * The database object
     *
     * @var Db
     */
    protected $db;

    /**
     * The list of properties
     *
     * @var array
     */
    protected $properties;

    /**
     * Create a  new ActiveRecord instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->db = Db::getInstance();
        $this->bindingColumns();
    }

    /**
     * Set a property
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return void
     */
    public function __set(string $propertyName, mixed $propertyValue)
    {
        $this->properties[$propertyName] = $propertyValue ? $propertyValue : null;
    }

    /**
     * Get a property value
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get(string $propertyName)
    {
        return $this->properties[$propertyName];
    }

    /**
     * Bindings the columns
     *
     * @return void
     */
    public function bindingColumns()
    {
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME=:tableName";
        $columns = $this->db->query($sql, [':tableName' => $this->tableName]);

        foreach ($columns as $columnName) {
            $columnName = $columnName['COLUMN_NAME'];
            $this->$columnName = null;
        }
    }

    /**
     * Get a properties list
     *
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set a properties
     *
     * @param array $data
     * @return void
     */
    public function setProperties(array $data)
    {
        foreach ($data as $columnName => $columnValue) {
            $this->$columnName = $columnValue ? str_replace('"', '', $columnValue) : null;
        }
    }

    /**
     * Formats the array for the request
     *
     * @param array $data
     * @return array
     */
    public function formatData(array $data)
    {
        foreach ($data as $columnName => $columnValue) {
            unset ($data[$columnName]);
            $columnName = ':' . $columnName;
            $data[$columnName] = $columnValue;
        }

        return $data;
    }

    /**
     * Creating a new instance
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        $this->setProperties($data);
        $sql = "INSERT INTO `$this->tableName` (";
        $sql .= implode(', ', array_keys($data));
        $sql .= ') VALUES (:';
        $sql .= implode(', :', array_keys($data));
        $sql .= ');';
        $data = $this->formatData($data);
        unset($data[':id']);

        $this->db->query($sql, $data);
    }

    /**
     * Select all data from table
     *
     * @return array|null
     */
    public function all()
    {
        return $this->db->query("SELECT * FROM $this->tableName");
    }

    /**
     * Get a new self instance
     *
     * @return static
     */
    public static function model()
    {
        return new static();
    }
}