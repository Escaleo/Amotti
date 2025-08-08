<?php
namespace App\Livewire;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $code;
    public $phone;
    public $email;
    public $website;
    public $message;

    public function submit(ContactFormRequest $request)
    {
        try {
            $this->name    = $request->name;
            $this->code    = $request->code;
            $this->phone   = $request->phone;
            $this->email   = $request->email;
            $this->website = $request->website;

            Mail::send('emails.contact', [
                'name'    => $this->name,
                'code'    => $this->code,
                'phone'   => $this->phone,
                'email'   => $this->email,
                'website' => $this->website,
                'message' => $this->message,
            ], function ($message) {
                $message->to('leonardoescalona1408@gmail.com')
                        ->subject('New Contact Form Submission');
            });

            $this->dispatch('sendEmailSuccess');

        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while processing your request: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.contact-form', );
    }
}
