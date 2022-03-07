<?php

class UserModel extends BaseModel{

    const TABLE = 'users_acc';

    public function getByOption($option=[], $limit=100){
        return $this->find(self::TABLE, $option, $limit);
    }
}

?>