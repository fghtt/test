<?php

namespace Models;

class CSVFile extends ActiveRecord
{
    /**
     * The table name
     *
     * @var string
     */
    protected $tableName = 'data';

    /**
     * Deletes all data from table before creating
     *
     * @return void
     */
    public function beforeCreate()
    {
        $res = $this->db->query("SELECT * FROM data LIMIT 1");

        if ($res) $this->db->query("TRUNCATE data");
    }
}