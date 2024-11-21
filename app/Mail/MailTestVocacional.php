<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailTestVocacional extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $calificacion;


    /**
     * Create a new message instance.
     */
    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $calificacion)
    {



        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->calificacion = $calificacion;

        var_dump($this->nombre);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Resultados Test Vocacional UNIMEX - 2024 - Tu hemisferio activo es el ' . $this->calificacion,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.testVocacional',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
