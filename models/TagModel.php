<?php

class TagModel extends BaseModel{

    CONST TABLE_VIEW = 'tags_tags';
    CONST TABLE = 'tag';
    
    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE_VIEW, $option, $limit);
    }

    public function getBigTag($limit = '100'){
        $sql = "select * from " . self::TABLE_VIEW . " where BigTag is null limit ${limit}";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

    public function getTagOfProd($ID){
        $sql = "select * from " . self::TABLE_VIEW . " as t, tags_products as t_p where t_p.ProdID='${ID}' and t.TagID=t_p.TagID";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }
    
    public function show($select = ['*'], $order = [], $limit = '18446744073709551615'){
        return $this->getAll(self::TABLE_VIEW, $select, $order, $limit);
    }

    public function add($data){
        return $this->insert(self::TABLE, $data);
    }

    public function remove($id){
        $id = "TagID = '" . $id . "'";
        return $this->delete(self::TABLE, $id);
    }

    public function modify($id, $data = []){
        $id = "TagID = '" . $id . "'";
        return $this->update(self::TABLE, $id, $data);
    }

}

?>