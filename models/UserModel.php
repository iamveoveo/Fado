<?php

class UserModel extends BaseModel{

    const TABLE = 'users_acc';

    public function getByOption($option=[], $limit=100){
        return $this->find(self::TABLE, $option, $limit);
    }

    public function add($data1=[], $data2=[]){
        $res1               = $this->insert('users', $data1);
        $userID             = mysqli_insert_id($this->connect);
        $data2['UserID']    = $userID;
        $res2               = $this->insert('account', $data2);

        if($res1 && $res2){
            return True;
        }
         return False;

    }
}

?>