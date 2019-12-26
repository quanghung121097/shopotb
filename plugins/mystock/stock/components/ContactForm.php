<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'A simple contact form'
        ];
    }
    public function onSend()
    {
        // Get request data
        $data = \Input::only([
            'name',
            'phone',
            'email',
            'content'
        ]);

        // Validate request
        $this->validate($data);

        // Send email
        $receiver = 'hungkma97@gmail.com';

        \Mail::send('Quanghung.contact::contact', $data, function ($message) use ($receiver) {
            $message->to($receiver);
        });
    }

    protected function validate(array $data) 
    {
        // Validate request
        $rules = [
            'name' => 'required|min:3|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'content' => 'required',
        ];

        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

}