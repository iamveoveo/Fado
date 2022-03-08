<?php

class BaseModel extends Database{
    protected $connect;
    
    public function __construct(){
        $this->connect = $this->connectDb();
    }

    public function _query($sql){
        return mysqli_query($this->connect, $sql);
    }

    public function getAll($table, $select = ['*'], $order=[], $limit = 100){
        $columns = implode(',', $select);

        $orderStr = implode(' ', $order);

        if($orderStr){
            $sql = "select ${columns} from ${table} order by ${orderStr} limit ${limit}";
        }else{
            $sql = "select ${columns} from ${table} limit ${limit}";
        }

        $res = $this->_query($sql);
        $data = [];

        while($row = mysqli_fetch_assoc($res)){
            array_push($data, $row);
        }

        return $data;
    }

    public function find($table, $data, $limit = 100){
        $modify_data = [];

        foreach ($data as $key => $val){
            array_push($modify_data, "${key}='" . $val . "'");
        }

        $sql = "select * from ${table} where " . implode(" and ", $modify_data) .  " limit " . $limit;
        $res = $this->_query($sql);
        return $this->fetchAll($res);
    }

    public function insert($table, $data){
        $cols = implode(',', array_keys($data));
        $vals = implode(',', array_map(function($value){
            return "'" . $value . "'";
        }, array_values($data)));

        $sql = "insert into ${table} (${cols}) values (${vals})";
        return $this->_query($sql);
    }

    public function update($table, $id, $data){
        $modify_data = [];

        foreach ($data as $key => $val){
            array_push($modify_data, "${key} = '" . $val . "'");
        }

        $sql = "update ${table} set " . implode(",", $modify_data) . " where id = ${id}";
        $this->_query($sql);
    }

    public function delete($table, $id){
        $sql = "delete from ${table} where id = ${id}";
        $this->_query($sql);
    }

    public function fetchAll($res){
        $data = [];

        while($row = mysqli_fetch_assoc($res)){
            array_push($data, $row);
        }

        return $data;
    }
}
?>