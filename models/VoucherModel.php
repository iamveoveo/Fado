<?php

class VoucherModel extends BaseModel{

    CONST TABLE = 'voucher';

    public function getAllVoucher($select = ['*'], $order = [], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE, $select, $order, $limit);
    }

    public function add($data   = []){
        return $this->insert(self::TABLE, $data);
    }

    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function modify($id, $data = []){
        $id = "VouID = '" . $id . "'";
        return $this->update(self::TABLE, $id, $data);
    }

    public function remove($id){
        $id = "VouID = '" . $id . "'";
        return $this->delete(self::TABLE, $id);
    }

}

?>