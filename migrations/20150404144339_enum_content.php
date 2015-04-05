<?php

use Phinx\Migration\AbstractMigration;

class EnumContent extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // Варианты тестов
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          NULL, 'Варианты тестов', 'test_variants', 'Варианты тестов'
        );");
        $parentId = $this->adapter->getConnection()->lastInsertId();
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          $parentId, 'Вариант A', 'a', 'Вариант A'
        );");
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          $parentId, 'Вариант B', 'b', 'Вариант B'
        );");

        // Действия аналитики
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          NULL, 'Типы действий аналитики', 'action_types', 'Типы действий аналитики'
        );");
        $parentId = $this->adapter->getConnection()->lastInsertId();
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          $parentId, 'Показ варианта', 'show', 'Показ варианта'
        );");
        $this->execute("INSERT INTO enums (parent, name, sys_name, descr) VALUES (
          $parentId, 'Показ финальной страницы', 'success', 'Достижение страницы успеха'
        );");

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}