<?php

class HomeController extends BaseController
{
    public function show()
    {
        $employees = Employee::getHomepageEmployees();
        return $this->view('home', [
            'title' => 'Chocolatte',
            'welcome' => 'Bienvenue chez',
            'employees' => Employee::getHomepageEmployees(),
        ]);
    }
}
