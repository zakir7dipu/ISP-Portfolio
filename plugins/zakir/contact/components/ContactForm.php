<?php namespace Zakir\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use Zakir\Contact\Models\Contact;


class ContactForm extends ComponentBase
{
    public function componentDetails() {
        return [
            'name' => 'Contact Form',
            'description' => 'Silple Contact Form'
        ];
    }

    public function onSave() {

        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'phone_number' => Input::get('phone_number'),
                'email' => Input::get('email')
            ],
            [
                'name' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email'
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {

            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'phone_number' => Input::get('phone_number'), 'msg_subject' => Input::get('msg_subject'), 'content' => Input::get('content')];
            Contact::insert($vars);

            // Mail::send('zakir.contact::mail.message', $vars, function($message) {

            //     $message->from('customer@onetouchonline.net', 'One Touch Online Admin');
            //     $message->to('zakir7dipu@gmail.com')->cc('bar@example.com');
            //     $message->subject('New Message from contact form');

            // });

            Flash::success('Message Send.');
            return Redirect::back();

        }

    }
}
