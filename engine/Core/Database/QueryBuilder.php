<?php 

namespace Engine\Core\Database;

/**
 * Class QueryBuilder
 * @package Engine\Core\Database
 */
class QueryBuilder
{
    /**
     * @var array Массив с SQL запросами
     */
    protected array $sql = [];

    /**
     * @var array Массив с параметрами для подготовленных выражений
     */
    public array $values = [];

    /**
     * Метод для формирования запроса SELECT
     * @param string $fields Список полей через запятую
     * @return QueryBuilder
     */
    public function select(string $fields = '*'): QueryBuilder
    {
        $this->reset();
        $this->sql['select'] = "SELECT {$fields} ";

        return $this;
    }

    /**
     * Метод для формирования запроса FROM
     * @param string $table Имя таблицы
     * @return QueryBuilder
     */
    public function from(string $table): QueryBuilder
    {
        $this->sql['from'] = "FROM {$table} ";

        return $this;
    }

    /**
     * Метод для формирования запроса WHERE
     * @param string $column Имя столбца
     * @param mixed $value Значение
     * @param string $operator Оператор сравнения
     * @return QueryBuilder
     */
    public function where(string $column, $value, string $operator = '='): QueryBuilder
    {
        $this->sql['where'][] = "{$column} {$operator} ?";
        $this->values[] = $value;

        return $this;
    }

    /**
     * Метод для формирования запроса ORDER BY
     * @param string $field Имя поля
     * @param string $order Направление сортировки (ASC или DESC)
     * @return QueryBuilder
     */
    public function orderBy(string $field, string $order): QueryBuilder
    {
        $this->sql['order_by'] = "ORDER BY {$field} {$order}";

        return $this;
    }

    /**
     * Метод для формирования запроса LIMIT
     * @param int $number Количество записей
     * @return QueryBuilder
     */
    public function limit(int $number): QueryBuilder
    {
        $this->sql['limit'] = " LIMIT {$number}";

        return $this;
    }

    /**
     * Метод для формирования запроса UPDATE
     * @param string $table Имя таблицы
     * @return QueryBuilder
     */
    public function update(string $table): QueryBuilder
    {
        $this->reset();
        $this->sql['update'] = "UPDATE {$table} ";

        return $this;
    }
    public function insert(string $table): QueryBuilder
    {
        $this->reset();
        $this->sql['insert'] = "INSERT INTO {$table} ";

        return $this;
    }

    /**
     * Метод для формирования запроса SET
     * @param array $data Ассоциативный массив с данными для обновления
     * @return QueryBuilder
     */
    public function set(array $data = []): QueryBuilder
    {
        $this->sql['set'] = "SET ";

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $this->sql['set'] .= "$key = ?";
                if (next($data)) {
                    $this->sql['set'] .= ", ";
                }
                $this->values[] = $value;
            }
            $this->sql['set'] = rtrim($this->sql['set'], ', ');
        }

        return $this;
    }

    /**
     * Метод для формирования SQL запроса
     * @return string
     */
    public function sql(): string
    {
        $sql = '';

        if (!empty($this->sql)) {
            foreach ($this->sql as $key => $value) {
                if ($key == 'where') {
                    $sql .= ' WHERE ';
                    foreach ($value as $where) {
                        $sql .= $where;
                        if (count($value) > 1 and next($value)) {
                            $sql .= ' AND ';
                        }
                    }
                } else {
                    $sql .= $value;
                }
            }
        }

        return $sql;
    }

    /**
     * Метод для сброса массива с SQL запросами и параметрами
     */
    public function reset(): void
    {
        $this->sql = [];
        $this->values = [];
    }
}