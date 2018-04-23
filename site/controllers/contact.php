<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Email is required',
        ],
        'name' => [
            'rules' => ['required'],
            'message' => 'Name is required',
        ],
        'message' => [
            'rules' => ['required'],
            'message' => 'Message is required',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => $page->emailreceiver()->value,
            'from' => $_POST['email'],
        ]);
    }

    return compact('form');
};