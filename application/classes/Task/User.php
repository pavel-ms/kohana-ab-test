<?php

class Task_User extends Minion_Task
{
    protected function _execute(array $params)
    {
        // Создаем переменную, отвечающую за связь с моделью данных User
        $model = ORM::factory('user');

        // Вносим в эту переменную значения, переданные из POST
        /*$model->values(array(
            'username' => $params[0],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'password_confirm' => $_POST['password_confirm'],
        ));*/
    }

} 