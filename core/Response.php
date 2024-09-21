<?php

namespace Core;

/**
 * Clase Response
 *
 * Esta clase maneja las respuestas HTTP, permitiendo establecer códigos de estado,
 * contenido y responder en formato JSON.
 * @var StatusCode $statusCode Código de estado HTTP
 * @var Content $content Contenido de la respuesta
 */
class Response {
    protected $statusCode;
    protected $content;

    /**
     * Establece el código de estado de la respuesta.
     *
     * @param int $statusCode Código de estado HTTP.
     */
    public function setStatusCode($statusCode) {
        $this->statusCode = $statusCode;
    }

    /**
     * Establece el contenido de la respuesta.
     *
     * @param mixed $content Contenido que se enviará en la respuesta.
     */
    public function setContent($content) {
        $this->content = $content;
    }

    /**
     * Envía la respuesta al cliente.
     *
     * Establece el código de estado y el contenido en la respuesta HTTP.
     */
    public function send() {
        http_response_code($this->statusCode);
        echo $this->content;
    }

    /**
     * Envía una respuesta JSON.
     *
     * @param mixed $data Datos que se enviarán en formato JSON.
     * @param int $status Código de estado HTTP.
     */
    public static function json($data, $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }

    /**
     * Envía un mensaje de error en formato JSON.
     *
     * @param string $message Mensaje de error a enviar.
     * @param int $status Código de estado HTTP.
     */
    public static function error($message, $status = 400) {
        self::json(['error' => $message], $status);
    }
}
