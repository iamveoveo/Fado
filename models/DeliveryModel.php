<?php

class DeliveryModel extends BaseModel{

    const TABLE = 'deliveries';

    public function getByOption($option=[], $limit = 100){
        return $this->find(self::TABLE, $option, $limit);
    }

}

?>