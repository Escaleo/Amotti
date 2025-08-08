<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $nombre   = '';
    public string $telefono = '';
    public string $email    = '';
    public ?string $web     = '';
    public ?string $mensaje = '';
    public bool $privacidad = false;

    protected $rules = [
        'nombre'     => 'required|string|max:255',
        'telefono'   => 'required|string|max:50',
        'email'      => 'required|email|max:255',
        'web'        => 'nullable|url|max:255',
        'mensaje'    => 'required|string',
        'privacidad' => 'accepted',
    ];

    protected $messages = [
        'nombre.required'     => 'El nombre es obligatorio.',
        'telefono.required'   => 'El teléfono es obligatorio.',
        'email.required'      => 'El correo es obligatorio.',
        'email.email'         => 'Debes ingresar un correo válido.',
        'web.url'             => 'La página web debe ser una URL válida (incluye http:// o https://).',
        'mensaje.required'    => 'El mensaje es obligatorio.',
        'privacidad.accepted' => 'Debes aceptar la política de privacidad.',
    ];

    protected $validationAttributes = [
        'nombre'   => 'nombre',
        'telefono' => 'teléfono',
        'email'    => 'correo',
        'web'      => 'página web',
        'mensaje'  => 'mensaje',
    ];

    public function submit()
    {
        $this->validate();

        // Enviar correo
        Mail::send('emails.contact', [
            'nombre'   => $this->nombre,
            'telefono' => $this->telefono,
            'email'    => $this->email,
            'web'      => $this->web,
            'mensaje'  => $this->mensaje,
            'ip'       => request()->ip(),
            'ua'       => request()->userAgent(),
            'datetime' => now()->toDateTimeString(),
        ], function ($message) {
            $to = config('mail.to.address') ?? config('mail.from.address') ?? 'admin@example.com';
            $message->to($to)
                ->subject('Nuevo contacto desde la web')
                ->replyTo($this->email, $this->nombre);
        });

        // Enviar notificación al usuario
        $this->dispatch('notify');

        // Resetear campos del formulario
        $this->reset(['nombre', 'telefono', 'email', 'web', 'mensaje', 'privacidad']);
    }

    public function render()
    {
        
        return view('livewire.contact-form');
    }
}
