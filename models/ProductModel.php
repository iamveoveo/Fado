<?php

class ProductModel extends BaseModel{
    
    CONST TABLE = 'product';
    CONST TABLE_DETAIL = 'productdetail';

    public function show($select = ['*'], $order=[], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE);
    }

    public function getByOption($option=[], $limit=100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function getDetailByOption($option=[], $limit=100){
        return $this->find(self::TABLE_DETAIL, $option, $limit);
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

    public function add($data){
        if ($this->insert(self::TABLE, $data)){
            $this->insert(self::TABLE_DETAIL, ['ProdID' => $data['ProdID']]);
            return true;
        }
        return false;
    }

    public function remove($id){
        $id     = "ProdID = '" . $id . "'";
        $detail = $this->delete(self::TABLE_DETAIL, $id);
        $tag    = $this->delete('tags_products', $id);
        $vou    = $this->delete('voucher', $id);
        if ($detail && $tag && $vou){
            return $this->delete(self::TABLE, $id);
        }
        return false;
    }

    public function modify($id, $data = []){
        $id = "ProdID = '" . $id . "'";
        return $this->update(self::TABLE, $id, $data);
    }

    public function modify_detail($id, $data = []){
        $id = "ProdID = '" . $id . "'";
        return $this->update(self::TABLE_DETAIL, $id, $data);
    }

}

?>