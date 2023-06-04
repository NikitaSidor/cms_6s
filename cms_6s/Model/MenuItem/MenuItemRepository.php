<?php 
<<<<<<< HEAD
namespace Cms_6s\Model\MenuItem;
use Engine\Model;

class MenuItemRepository extends Model
=======
namespace Cms_6s\Model\Menu;
use Engine\Model;

class MenuRepository extends Model
>>>>>>> origin/dev
{
    const NEW_MENU_ITEM_NAME = 'New item';
    public function getItems($menuId, array $params = [])
    {
        $sql = $this->queryBuilder  ->select()
                                    ->from('menu_item')
                                    ->where('menu_id', $menuId)
                                    ->orderBy('position', 'ASC')
                                    ->sql();
        return $this->db->query($sql);
    }
}
?>