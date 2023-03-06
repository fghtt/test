<?php

namespace Services;

use Models\CSVFile;

class CSVFilesService
{
    public function store(array $file)
    {
        $file = fopen($file['tmp_name'], 'r');
        fgetcsv($file, 2000, ';', ',');

        while($data = fgetcsv($file, 2000, ';', ',')) {
            $csvFile = new CSVFile();
            $csvFile->create($this->parseData($data));

            break;
        }


    }

    public function parseData($data)
    {
        $columns = [];
        $columns['code'] = $data[0];
        $columns['name'] = $data[1];
        $columns['level1'] = $data[2];
        $columns['level2'] = $data[3];
        $columns['level3'] = $data[4];
        $columns['price'] = $data[5];
        $columns['price_sp'] = $data[6];
        $columns['count'] = $data[7];
        $columns['fields_of_properties'] = $data[8];
        $columns['also_buy'] = $data[9];
        $columns['units'] = $data[10];
        $columns['image'] = $data[11];
        $columns['display_on_main'] = $data[12];
        $columns['description'] = $data[13];

        return $columns;
    }
}