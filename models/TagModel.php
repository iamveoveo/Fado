<?php

class TagModel extends BaseModel{

    CONST TABLE = 'Tag';
    
    public function getByTrending($tag = ['TagTrending' => 1]){
        return $this->find(self::TABLE, $tag);
    }
}

?>