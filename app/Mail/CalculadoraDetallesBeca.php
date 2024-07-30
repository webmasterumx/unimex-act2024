<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CalculadoraDetallesBeca extends Mailable
{
    use Queueable, SerializesModels;

    public $carrera;
    public $nombrePlantel;
    public $turno;
    public $descripPer;
    public $beca;
    public $vigencia;
    public $horario;

    /**
     * Create a new message instance.
     */
    public function __construct($carrera, $nombrePlantel, $turno, $descripPer, $beca, $vigencia, $horario)
    {
        $this->carrera = session('Carrera');
        $this->nombrePlantel = session('nombrePlantel');
        $this->turno = session('Turno');
        $this->descripPer = session('DescripPer');
        $this->beca = session('Beca');
        $this->vigencia = session('Vigencia');
        $this->horario = session('Horario');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Calculadora de Cuotas',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.calculadoraBecasOferta',
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
