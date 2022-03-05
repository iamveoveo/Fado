<?php

class TagModel extends BaseModel{

    CONST TABLE = 'tags_tags';
    
    public function getByOption($option, $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function getBigTag($limit = 100){
        $sql = "select * from " . self::TABLE . " where BigTag is null limit ${limit}";
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

}

?>