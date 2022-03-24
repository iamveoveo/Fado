<?php

class TagModel extends BaseModel{

    CONST TABLE = 'tag';
    CONST TABLE_TABLE = 'tags_products';
    
    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function getByProd($option, $limit = 100){
        return $this->find(self::TABLE_TABLE, $option, $limit);
    }

    public function getBigTag($limit = '100'){
        $sql = "select * from " . self::TABLE . " where BigTag is null limit ${limit}";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }
    
    public function show(){
        $sql = "select t1.TagID, t1.TagName, t1.TagDes, t1.BigTag, t1.TagTrending , t2.TagName as BigTagName, t2.TagDes as BigTagDes, t2.TagTrending as BigTagTrending FROM tag as t1 left JOIN tag as t2 on t1.BigTag=t2.TagID;";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

    public function add($data){
        return $this->insert(self::TABLE, $data);
    }

    public function addTagProd($data){
        return $this->insert(self::TABLE_TABLE, $data);
    }

    public function remove($id){
        $id1 = "BigTag = '" . $id . "'";
        $id  = "TagID = '" . $id . "'";
        if ($this->delete('tags_products', $id)){
            $this->delete(self::TABLE, $id1);
            return $this->delete(self::TABLE, $id);
        }
        return false;
    }

    public function modify($id, $data = []){
        $id = "TagID = '" . $id . "'";
        return $this->update(self::TABLE, $id, $data);
    }

    public function modifyTagProd($prodID, $tagID, $data = []){
        $id = "TagID = '" . $tagID . "' and ProdID = '" . $prodID . "'";
        return $this->update(self::TABLE_TABLE, $id, $data);
    }

}

?>