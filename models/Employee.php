<?php


class Employee extends BaseModel
{
    public function homepageEmployees()
    {
        return $this->get('SELECT `employees`.`name`, `employees`.`job`, `employees`.`description`, `employees`.`img`
from `employees`
order by `employees`.`name`;');
    }
}