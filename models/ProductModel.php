<?php

class ProductModel extends BaseModel{
    
    CONST TABLE = 'Product';

    public function show($select = ['*'], $order=[], $limit = 100){
        return $this->getAll(self::TABLE);
    }

    public function showByDiscount($limit = 10){
        $sql = "select * from product, voucher where product.ProdID = voucher.ProdID and StartTime<cast(now() as date) and EndTime>cast(now() as date) limit ${limit}";
        $res = $this->_query($sql);
        $data = [];

        while($row = mysqli_fetch_assoc($res)){
            array_push($data, $row);
        }

        return $data;
    }
}

?>