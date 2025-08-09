<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(ContactFormRequest $request)
    {
        $data = $request->validated();

        try {
            
            Mail::send('emails.contact', [
                'nombre'   => $data['nombre'],
                'telefono' => $data['telefono'],
                'email'    => $data['email'],
                'web'      => $data['web'] ?? null,
                'mensaje'  => $data['mensaje'] ?? null,
                'ip'       => request()->ip(),
                'ua'       => request()->userAgent(),
                'datetime' => now()->toDateTimeString(),
            ], function ($message) use ($data) {
                
                $to = env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS', 'admin@example.com'));

                $message->to($to)
                    ->subject('Nuevo contacto desde la web')
                    ->replyTo($data['email'], $data['nombre']);
            });

            return back()->with('success', 'Mensaje enviado correctamente.');
        } catch (\Throwable $e) {
            Log::error('Error enviando contacto', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return back()
                ->withErrors(['contact' => 'No se pudo enviar el mensaje. Intenta más tarde.'])
                ->withInput();
        }
    }
}
