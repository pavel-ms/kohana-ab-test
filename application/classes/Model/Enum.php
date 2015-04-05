<?php
/**
 * Я просто перенес код из Yii варианта
 */

class Model_Enum extends ORM
{
    /**
     * Флак использования кэша для перечислений
     * @var bool
     */
    private static $_useCache = FALSE;
    /**
     *
     */
    const CACHE_KEY = 'enum_table_cache';
    /**
     * Сохраняем закешированные значение перечислений
     * @var array
     */
    protected static $_cache = [];


    /**
     * Извлекает справочник по пути к нему, возвращает объект типа enum или массив enum,
     * если была переданна `*`
     * @param $path
     * @return mixed
     */
    public static function get_path($path) {
        if (self::$_useCache && empty(self::$_cache)) {
            //self::$_cache = Yii::$app->cache->get(self::CACHE_KEY);
        }
        if (empty(self::$_cache[$path])) {
            $result = self::_find(explode('.', $path));
            if (self::$_useCache) {
                self::$_cache[$path] = $result;
                register_shutdown_function(function() { static::_updateCache(); });
            }
        } else {
            $result = self::$_cache[$path];
        }
        return $result;
    }

    protected static function _find(array $path, $offset = 0, Model_Enum $parent = null)
    {
        $qBuilder = self::factory('Enum');
        if ($path[$offset] === '*') {  // все дети данного parent-а
            return $qBuilder->where('parent'
                , (!is_null($parent) ? '=' : 'IS')
                , (!is_null($parent) ? $parent->id : NULL)
            )->find_all();
        } else {  // ребенок по sys_name
            if (isset($parent->id) && (!is_null($parent->id))) {
                $target = $qBuilder
                    ->where('parent', '=', intval($parent->id))
                    ->where('sys_name', '=', $path[$offset])
                    ->find();
            } else {
                $target = $qBuilder->where('sys_name', '=', $path[$offset])->find();
            }
        }
        // Если нет такого пути, выкиним exception
        if (is_null($target->id)) {
            throw new \Exception('Cat`n find enum field. Be sure the path is correct. '
                . $offset . ' path: ' . $path[$offset]);
        }
        if (count($path)-1 === $offset) {
            return $target;
        } else {
            // рекурсия
            return self::_find($path, $offset + 1, $target);
        }
    }

    /**
     * Обновляет значения для переменных enum
     */
    public static function _updateCache()
    {
        //Yii::$app->cache->set(self::CACHE_KEY, self::$_cache, 3600);
    }
} 