<?php 
namespace Admin\Model\User;
use Engine\Model;

class UserRepository extends Model
{
    public function getUsers()
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('user')
            ->orderBy('id', 'DESC')
            ->sql();

        return $this->db->query($sql);
    }
    public function test()
    {
        $user = new User;
        $user   ->setEmail('user@test.ru')
                ->setPassword(md5(2222))
                ->setRole('user')
                ->save();
    }
}
?>