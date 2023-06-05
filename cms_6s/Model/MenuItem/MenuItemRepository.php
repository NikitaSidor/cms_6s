<?php

namespace Cms_6s\Model\MenuItem;

use Engine\Model;

class MenuItemRepository extends Model
{
    const NEW_MENU_ITEM_NAME = 'New item';
    const FIELD_NAME = 'name';
    const FIELD_LINK = 'link';

    /**
     * @param int $menuId
     * @param array $params
     * @return mixed
     */
    public function getItems($menuId, $params = [])
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('menu_item')
            ->where('menu_id', $menuId)
            ->orderBy('position', 'ASC')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }
    
    public function add(array $params = [])
    {
        if (empty($params))
        {
            return 0;
        }
        $menuItem = new MenuItem;
        $menuItem = $menuItem
            ->setMenuId($params['menu_id'])
            ->setName(self::NEW_MENU_ITEM_NAME);
        // return id
        return $menuItem->save();

    }
    public function sort(array $params = [])
    {
        $items = isset($params['data']) ? json_decode($params['data']) : [];
        if (!empty($items) and isset($items[0])) {
            foreach ($items[0] as $position => $item) {
                $sql = $this->queryBuilder
                    ->update('menu_item')
                    ->set(['position' => $position])
                    ->where('id', $item->id)
                    ->sql();
                $this->db->execute( 
                    $sql,
                    $this->queryBuilder->values
                );
            }
        }
    }
    public function update (array $params = [])
    {
        if (empty($params))
        {
            return 0;
        }

        $menuItem = new MenuItem($params['item_id']);

        if ($params['field'] == self::FIELD_NAME) {
            $menuItem->setName($params['value']);
        }

        if ($params['field'] == self::FIELD_LINK) {
            $menuItem->setLink($params['value']);
        }

        return $menuItem->save();
    }
    public function remove(int $itemId)
    {
        $sql = $this->queryBuilder -> delete() ->
            from('menu_item') ->
            where('id', $itemId) ->
            sql();
        return $this->db->query($sql, $this->queryBuilder->values);
    }
}