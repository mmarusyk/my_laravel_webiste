<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('site.contact');
    }
    public function index()
    {
        return view('admin.messages.index', [
            'messages'=>ContactUs::orderBy('created_at', 'desc')->paginate(20)
        ]);
    }

    public function destroy(ContactUs $message)
    {
        $message->delete();
        return redirect()->route('admin.message.index');
    }

    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'second_name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());

        Mail::send('contactus',
            array(
                'name' => $request->get('name'),
                'second_name' => $request->get('second_name'),
                'email' => $request->get('email'),
                'text_message' => $request->get('message')
            ), function ($message) use ($request) {
                $message->to('msite814@ukr.net', 'Admin')->subject($request->get('name'));
            });

        return redirect()->back()->with('success', 'Повідомлення надіслано!');
    }
}
