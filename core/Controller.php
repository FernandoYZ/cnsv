<?php

namespace Core;

/**
 * Clase Controller
 *
 * Esta clase proporciona la funcionalidad básica para los controladores de la aplicación,
 * incluyendo la carga de modelos y la gestión de respuestas.
 * 
 * @var Views $views Instancia para gestionar las vistas.
 * @var mixed $model Instancia del modelo asociado al controlador.
 * @var Database $database Instancia de la base de datos.
 */
class Controller {
    protected $views;
    protected $model;
    protected $database;

    /**
     * Constructor de la clase Controller.
     *
     * @param Views $views Instancia de la gestión de vistas.
     * @param Database $database Instancia de la base de datos.
     */
    public function __construct(Views $views, Database $database) {
        $this->views = $views;
        $this->database = $database;
        $this->loadModel();
    }

    /**
     * Carga el modelo asociado al controlador.
     *
     * Determina el nombre del modelo a cargar basado en la clase del controlador.
     *
     * @throws \Exception Si el modelo no se encuentra.
     */
    protected function loadModel() {
        $modelClass = str_replace('App\\Http\\Controllers\\', 'App\\Models\\', get_class($this));
        $modelClass = str_replace('Controller', '', $modelClass);
        if (class_exists($modelClass)) {
            $this->model = new $modelClass($this->database->obtenerConexion());
        } else {
            throw new \Exception("Modelo $modelClass no encontrado");
        }
    }

    /**
     * Envía una respuesta JSON.
     *
     * @param mixed $data Datos a enviar en la respuesta.
     * @param int $status Código de estado HTTP.
     */
    protected function response($data, $status = 200) {
        Response::json($data, $status);
    }

    /**
     * Envía una respuesta de error.
     *
     * @param string $message Mensaje de error.
     * @param int $status Código de estado HTTP.
     */
    protected function errorResponse($message, $status = 400) {
        Response::error($message, $status);
    }
}
