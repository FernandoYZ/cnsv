<?php

namespace Core;

/**
 * Clase Request
 *
 * Esta clase encapsula la información de la solicitud HTTP, incluyendo la URI,
 * el método de la solicitud y los parámetros.
 * @var Uri $uri URI de la solicitud
 * @var Method $method Método HTTP de la solicitud (GET, POST, etc.)
 * @var Params $params Parámetros de la solicitud
 */
class Request {
    protected $uri;
    protected $method;
    protected $params;

    public function __construct() {
        $this->uri = trim($_SERVER['REQUEST_URI'], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = $_REQUEST;
    }

    /**
     * Obtiene la URI de la solicitud.
     *
     * @return string
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * Obtiene el método de la solicitud.
     *
     * @return string
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Obtiene los parámetros de la solicitud.
     *
     * @return array
     */
    public function getParams() {
        return $this->params;
    }
}
