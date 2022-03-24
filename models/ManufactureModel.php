<?php

class ManufactureModel extends BaseModel{

    CONST TABLE = 'manufacture';

    public function show($select = ['*'], $order=[], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE);
    }

    public function add($data   = []){
        return $this->insert(self::TABLE, $data);
    }

    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function modify($id, $data = []){
        $id = "ManuID = '" . $id . "'";
        return $this->update(self::TABLE, $id, $data);
    }

    public function remove($id){
        $id = "ManuID = '" . $id . "'";
        return $this->delete(self::TABLE, $id);
    }

}

?>