Настроить передачу $id
Engine\Core\Database ActiveRecord

public function save() {
    $properties = $this->getIssetProperties();

    try {
        if (isset($this->id)) {
            $this->db->execute(
                $this->queryBuilder
                    ->update($this->getTable())
                    ->set($properties)
                    ->where('id', $this->id)
                    ->sql(),
                $this->queryBuilder->values
            );
        } else {
            $this->db->execute(
                $this->queryBuilder
                    ->insert($this->getTable())
                    ->set($properties)
                    ->sql(),
                $this->queryBuilder->values
            );
        }
        return $this->db->lastInsertId();
    }
}