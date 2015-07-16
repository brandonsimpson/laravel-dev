<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BTest extends Model
{

    protected $table = "BTest";

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

}
