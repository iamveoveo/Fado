<?php

class ManufactureModel extends BaseModel{

    CONST TABLE = 'Manufacture';

    public function show($select = ['*'], $order=[], $limit = 100){
        return $this->getAll(self::TABLE);
    }

}

?>