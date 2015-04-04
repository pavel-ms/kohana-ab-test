<?php

class Task_User extends Minion_Task
{
    protected function _execute(array $params)
    {
        // Создаем переменную, отвечающую за связь с моделью данных User
        $model = ORM::factory('User');
        print_r($params);
        // Вносим в эту переменную значения, переданные из POST
        /*$model->values(array(
            'username' => $params[0],
            'email' => $params[0],
            'password' => $params[0],
            'password_confirm' => $params[0],
        ));*/
    }

} 