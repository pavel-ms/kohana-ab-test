<?php

use Phinx\Migration\AbstractMigration;

class DataBaseMain extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // Создаем необходимые таблицы
        // таблица enum
        $this->execute('
			CREATE TABLE `enums` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`created_at` DATETIME,
				`updated_at` DATETIME,
				`parent` int(11) NULL DEFAULT NULL,
				`name` CHAR(120) NOT NULL,
				`sys_name` CHAR(120) NOT NULL,
				`descr` TEXT NULL,
				PRIMARY KEY (`id`),
				UNIQUE INDEX `unique_parent_sys_name` (`parent`, `sys_name`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
		');

        // таблица ab_test
        $this->execute('
			CREATE TABLE `ab_tests` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`created_at` DATETIME,
				`updated_at` DATETIME,
				`name` varchar(255) NOT NULL,
				user_id int(11) unsigned,
				`bootstrap_url` varchar(255) NOT NULL,
				`a_url` varchar(255) NOT NULL,
				`b_url` varchar(255) NOT NULL,
				`success_url` varchar(255) NOT NULL,
				PRIMARY KEY (`id`),
				CONSTRAINT fk_ab_tests_to_users FOREIGN KEY (user_id)
					REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
		');
        // таблица
        $this->execute('
			CREATE TABLE `test_actions` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`created_at` DATETIME,
				`updated_at` DATETIME,
				`action_type` int(11),
				`variant` int(11),
				`test_id` int(11) NOT NULL,
				PRIMARY KEY (`id`),
				CONSTRAINT fk_test_actions_to_action_type FOREIGN KEY (action_type)
					REFERENCES enums(id) ON UPDATE CASCADE ON DELETE CASCADE,
				CONSTRAINT fk_test_actions_to_ab_test FOREIGN KEY (test_id)
					REFERENCES ab_tests(id) ON UPDATE CASCADE ON DELETE CASCADE,
				CONSTRAINT fk_test_actions_to_variant FOREIGN KEY (variant)
					REFERENCES enums(id) ON UPDATE CASCADE ON DELETE CASCADE
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
		');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        // Удаляем созданные таблицы
        $this->dropTable('test_actions');
        $this->dropTable('ab_tests');
        $this->dropTable('enums');
    }
}