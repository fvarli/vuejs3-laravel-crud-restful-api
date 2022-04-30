<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::all();
        return response()->json([
            'contacts' => $contacts,
            'message' => 'Contacts',
            'code' => 200
        ]);
    }

    public function saveContact(Request  $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();
        return response()->json([
            'message' => 'Contact successfully created',
            'code' => 200
        ]);
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        if($contact) {
            $contact->delete();
            return response()->json([
                'message' => 'Contact successfully deleted',
                'code' => 200
            ]);
        } else {
            return response()->json([
               'message'=> "Contact with id:$id does not exist",
                'code' => 404
            ]);
        }

    }
}
