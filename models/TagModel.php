<?php

class TagModel extends BaseModel{

    CONST TABLE = 'tags_tags';
    
    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function getBigTag($limit = '100'){
        $sql = "select * from " . self::TABLE . " where BigTag is null limit ${limit}";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

    public function getTagOfProd($ID){
        $sql = "select * from " . self::TABLE . " as t, tags_products as t_p where t_p.ProdID='${ID}' and t.TagID=t_p.TagID";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }
    
    public function show($select = ['*'], $order=[], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE, $select, $order, $limit);
    }

    public function add($data){
        return $this->insert('tag', $data);
    }

}

?>