<?php

namespace Core;

/*
    |--------------------------------------------------------------------------
    | Clase Router
    |--------------------------------------------------------------------------
    |
    | Esta clase se encarga de gestionar el enrutamiento de las solicitudes de 
    | la aplicación. Se encarga de recibir la URI de la solicitud, verificar 
    | las rutas registradas y aplicar los middlewares correspondientes antes 
    | de dirigir la solicitud al manejador adecuado. También gestiona las 
    | excepciones que puedan ocurrir durante el enrutamiento.
    |
    | protected $database: Instancia de la base de datos.
    | protected $views: Instancia de la gestión de vistas.
    | protected $exceptionHandler: Instancia del manejador de excepciones.
    |
*/

class Router {
    protected $database;
    protected $views;
    protected $exceptionHandler;

    /**
     * Constructor de la clase Router.
     *
     * @param Database $database Instancia de la base de datos.
     * @param Views $views Instancia de la gestión de vistas.
     */
    public function __construct(Database $database, Views $views) {
        $this->database = $database;
        $this->views = $views;
    }

    /**
     * Establece el manejador de excepciones.
     *
     * @param ExceptionHandler $handler Instancia del manejador de excepciones.
     */
    public function setExceptionHandler(ExceptionHandler $handler) {
        $this->exceptionHandler = $handler;
    }

    /**
     * Maneja el enrutamiento de la solicitud.
     *
     * @param string $requestUri URI de la solicitud.
     * 
     * $routes  Obtiene las rutas registradas.
     * $request Crea una nueva instancia de la solicitud.
     * $method  Obtiene el método HTTP de la solicitud.
     * $uri     Limpia la URI de la solicitud.
     */
    public function route($requestUri) {
        $routes = Route::getRoutes();
        $request = new Request();
        $method = $request->getMethod();
        $uri = trim($requestUri, '/');

        if (!isset($routes[$method])) {
            $this->handleException(new \Exception('Método HTTP no soportado', 405));
            return;
        }

        foreach ($routes[$method] as $route => $details) {
            if (preg_match("#^$route$#", $uri, $matches)) {
                array_shift($matches); // Elimina la coincidencia completa
                return MiddlewareHandler::applyMiddlewares(
                    $details['middleware'], 
                    $details['handler'], 
                    $matches, $this->views, 
                    $this->database
                );
            }
        }

        $this->handleException(new \Exception('Ruta no encontrada', 404));
    }

    /**
     * Maneja las excepciones.
     *
     * @param \Exception $e Excepción a manejar.
     */
    protected function handleException(\Exception $e) {
        if ($this->exceptionHandler) {
            $this->exceptionHandler->handle($e);
        } else {
            throw $e;
        }
    }
}
