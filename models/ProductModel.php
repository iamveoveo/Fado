<?php

class ProductModel extends BaseModel{
    
    CONST TABLE = 'Product';
    CONST TABLE_DETAIL = 'Product_Detail';

    public function show($select = ['*'], $order=[], $limit = 100){
        return $this->getAll(self::TABLE);
    }

    public function showByDiscount($limit = 10){
        $sql = "select * from " . self::TABLE_DETAIL . " as p_d, Voucher as v where StartTime<cast(now() as date) and EndTime>cast(now() as date) and p_d.ProdID = v.ProdID limit ${limit}";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

    public function getByTag($tagID){
        $sql = "select * from " . self::TABLE_DETAIL . " as p, Tags_Products as t_p where TagID = ${tagID} and p.ProdID = t_p.ProdID";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }
}

?>