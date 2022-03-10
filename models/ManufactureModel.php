<?php

class ManufactureModel extends BaseModel{

    CONST TABLE = 'Manufacture';

    public function show($select = ['*'], $order=[], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE);
    }

}

?>