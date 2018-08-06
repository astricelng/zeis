<?php

namespace App\Http\Controllers\Web\Api;

//use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContact;
use Validator;


class ContactController extends Controller
{
    //

    /**
     * Store a new contact message in the database.
     */
    public function store(StoreContact $request)
    {

        $lang = \Lang::locale();
        
        $data = array('name' => $request->name, 'email' => $request->email, 'comment' => $request->message, 'hello' => \Lang::get('pages/home.contact.mail_respond_hello'), 'contact' => \Lang::get('pages/home.contact.mail_respond_contact'), 'msg' => \Lang::get('pages/home.contact.mail_respond_message'));


         //Correo que se envia con la información de contacto
        $subject = 'CONTACTO';
        $correo = \Mail::send('www.mails.contact', $data, function($message) use ($subject)
        {
            $message->to('info@zeisproducciones.com', 'Zeis Producciones')->subject($subject);
        });

        //Mensaje de confirmacón que se envia al usuario
        $subject = 'Zeis Producciones';
        \Mail::send('www.mails.respond-to-user', $data, function($message) use ($subject, $data)
        {
            $message->to($data['email'], $data['name'])->subject($subject);
        });


    }
}