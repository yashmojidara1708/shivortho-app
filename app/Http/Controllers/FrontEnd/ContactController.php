<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contactus(Request $request)
    {
        $post = $request->all();

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $details = [
            'title' => 'Follow-up Email',
            'body' => 'Thank you for contacting us. We will get back to you shortly.'
        ];

        // Company mail here
        // Mail::to('yashtest1708@gmail.com')->send(new \App\Mail\ContactMail($post));

        // if (isset($post['email'])) {

        //     Mail::to($post['email'])->later(now()->addMinutes(1), new \App\Mail\ThankyouMail($details));
        // }

        $response['status'] = 1;
        $response['msg'] = 'Email Sent Successfully.';




        // Insert into db

        $contactModel = new Contact;


        $contactModel->name = $request->name;
        $contactModel->email = $request->email;
        $contactModel->comment = $request->comment;
        $contactModel->save();

        echo json_encode($response);
        exit();
    }



    public function send(Request $request)
    {
        $responsedata = $request->post();

        $validator = Validator::make($responsedata, [
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'topic' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'message' => 'Please fill all the required fields'
            ]);
        }

        $details = [
            'title' => 'Follow-up Email',
            'body' => 'Thank you for contacting us. We will get back to you shortly.'
        ];

        // Company mail here
        $email =  env('COMPANY_EMAIL');
        $template = 'frontend.mail.contactmail';
        $data = $responsedata;
        $to_name = 'Palladium-hub';
        $subject = 'Contect Us';
        // smtp_config_setting($template, $data, $email, $to_name, $subject);

        if (isset($responsedata['email'])) {
            // Mail::to($responsedata['email'])->later(now()->addMinutes(1), new \App\Mail\ThankyouMail($details));
            $email = $responsedata['email'];
            $template = 'frontend.mail.thankyou';
            $data = $details;
            $to_name = 'Palladium-hub';
            $subject = 'Mail from PalladiumHub.com';
            // smtp_config_setting($template, $data, $email, $to_name, $subject);
        }


        // Save contact details
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->topic = $request->topic;
        $contact->phone_number = $request->phoneNumber;
        $contact->message = $request->message;

        if ($contact->save()) {
            return response()->json([
                'status' => 1,
                'message' => 'Thank you for contacting us. We will get back to you shortly.'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Due to a technical issue, please try again after some time.'
            ]);
        }
    }
}
