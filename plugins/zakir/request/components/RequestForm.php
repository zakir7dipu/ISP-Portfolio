<?php namespace Zakir\Request\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use Zakir\Request\Models\Request;

class RequestForm extends ComponentBase
{
    public function componentDetails() {
        return [
            'name' => 'Request Form',
            'description' => 'Simple request Form'
        ];
    }

    public function onSave() {

        $validator = Validator::make(
            [
                'package' => Input::get('package'),
                'cus_name' => Input::get('cus_name'),
                'cus_phone' => Input::get('cus_phone'),
                'address' => Input::get('address')
            ],
            [
                'package' => 'required',
                'cus_name' => 'required',
                'cus_phone' => 'required',
                'address' => 'required'
            ]
        );

        if ($validator->fails()) {
            Flash::error('Request sending failed.');
            return Redirect::back();
            // return Redirect::back()->withErrors($validator);
        } else {

            $vars = ['package' => Input::get('package'), 'cus_name' => Input::get('cus_name'), 'cus_phone' => Input::get('cus_phone'), 'address' => Input::get('address')];
            Request::create($vars);

            // Mail::send('zakir.contact::mail.message', $vars, function($message) {

            //     $message->from('customer@onetouchonline.net', 'One Touch Online Admin');
            //     $message->to('zakir7dipu@gmail.com')->cc('bar@example.com');
            //     $message->subject('New Message from contact form');

            // });

            Flash::success('Request send successfully.');
            return Redirect::back();

        }
    }
}