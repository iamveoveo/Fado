<?php

class ProductModel extends BaseModel{
    
    CONST TABLE = 'Product';
    CONST TABLE_DETAIL = 'Product_Detail_';

    public function show($select = ['*'], $order=[], $limit = 100){
        return $this->getAll(self::TABLE);
    }

    public function showByDiscount(){
        return $this->find(self::TABLE_DETAIL, ['Discount !' => '']);
    }

    public function getByTag($tagID, $option = []){
        $modify_data = [];

        foreach ($option as $key => $val){
            array_push($modify_data, "${key}='" . $val . "'");
        }
        
        $optionStr = !empty($modify_data) ? "and " . implode(" and ", $modify_data) : "";
        
        $sql = "select * from " . self::TABLE_DETAIL . " as p, Tags_products as t_p 
                where TagID = '${tagID}' and p.ProdID = t_p.ProdID " . $optionStr;
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }
}

?>