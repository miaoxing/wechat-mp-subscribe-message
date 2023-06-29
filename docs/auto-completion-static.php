<?php

namespace Miaoxing\WechatMpSubscribeMessage\Service;

class WechatMpSubscribeMessageTemplateModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see WechatMpSubscribeMessageTemplateModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see WechatMpSubscribeMessageTemplateModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see WechatMpSubscribeMessageTemplateModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see WechatMpSubscribeMessageTemplateModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see WechatMpSubscribeMessageTemplateModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see WechatMpSubscribeMessageTemplateModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see WechatMpSubscribeMessageTemplateModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpSubscribeMessageTemplateModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see WechatMpSubscribeMessageTemplateModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpSubscribeMessageTemplateModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see WechatMpSubscribeMessageTemplateModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see WechatMpSubscribeMessageTemplateModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see WechatMpSubscribeMessageTemplateModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpSubscribeMessageTemplateModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see WechatMpSubscribeMessageTemplateModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see WechatMpSubscribeMessageTemplateModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see WechatMpSubscribeMessageTemplateModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see WechatMpSubscribeMessageTemplateModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see WechatMpSubscribeMessageTemplateModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see WechatMpSubscribeMessageTemplateModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see WechatMpSubscribeMessageTemplateModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see WechatMpSubscribeMessageTemplateModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see WechatMpSubscribeMessageTemplateModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see WechatMpSubscribeMessageTemplateModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = QueryBuilder::table('user')->where('id', 1);
     * $users = QueryBuilder::table('user')->where('id', '>', 1);
     * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
     * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * @param mixed $if
     * @param mixed ...$args
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereIf
     */
    public static function whereIf($if, ...$args): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see WechatMpSubscribeMessageTemplateModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see WechatMpSubscribeMessageTemplateModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

namespace Miaoxing\WechatMpSubscribeMessage\Service;

if (0) {
    class WechatMpSubscribeMessageTemplateModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see WechatMpSubscribeMessageTemplateModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see WechatMpSubscribeMessageTemplateModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see WechatMpSubscribeMessageTemplateModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see WechatMpSubscribeMessageTemplateModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see WechatMpSubscribeMessageTemplateModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see WechatMpSubscribeMessageTemplateModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see WechatMpSubscribeMessageTemplateModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see WechatMpSubscribeMessageTemplateModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see WechatMpSubscribeMessageTemplateModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see WechatMpSubscribeMessageTemplateModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see WechatMpSubscribeMessageTemplateModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see WechatMpSubscribeMessageTemplateModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see WechatMpSubscribeMessageTemplateModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see WechatMpSubscribeMessageTemplateModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see WechatMpSubscribeMessageTemplateModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see WechatMpSubscribeMessageTemplateModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see WechatMpSubscribeMessageTemplateModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see WechatMpSubscribeMessageTemplateModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see WechatMpSubscribeMessageTemplateModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see WechatMpSubscribeMessageTemplateModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see WechatMpSubscribeMessageTemplateModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see WechatMpSubscribeMessageTemplateModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see WechatMpSubscribeMessageTemplateModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see WechatMpSubscribeMessageTemplateModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = QueryBuilder::table('user')->where('id', 1);
         * $users = QueryBuilder::table('user')->where('id', '>', 1);
         * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
         * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * @param mixed $if
         * @param mixed ...$args
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereIf
         */
        public function whereIf($if, ...$args): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see WechatMpSubscribeMessageTemplateModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see WechatMpSubscribeMessageTemplateModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }
}
