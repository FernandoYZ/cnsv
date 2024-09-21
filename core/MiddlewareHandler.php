<?php

namespace Core;

/**
 * Clase MiddlewareHandler
 *
 * Esta clase se encarga de resolver y aplicar middlewares en las solicitudes.
 * Facilita la ejecución de middlewares en cadena antes de llegar al manejador final.
 * 
 * @var Router $router Instancia del enrutador.
 */
class MiddlewareHandler {
    protected $router;

    /**
     * Resuelve una instancia del middleware especificado.
     *
     * @param string $middleware Nombre de la clase del middleware.
     * @return object Instancia del middleware.
     */
    public static function resolve($middleware) {
        return new $middleware();
    }

    /**
     * Aplica una serie de middlewares a un manejador específico.
     *
     * @param array $middlewares Lista de middlewares a aplicar.
     * @param callable $handler Manejador final a ejecutar.
     * @param array $params Parámetros para el manejador.
     * @param Views $views Instancia para gestionar vistas.
     * @param Database $database Instancia de la base de datos.
     * @return mixed Resultado de la ejecución del manejador.
     */
    public static function applyMiddlewares($middlewares, $handler, $params, $views, $database) {
        $request = new Request();

        $next = function() use ($handler, $params, $views, $database) {
            if (is_callable($handler)) {
                call_user_func_array($handler, $params);
            } elseif (is_array($handler) && count($handler) === 2) {
                list($controller, $method) = $handler;
                $controllerInstance = new $controller($views, $database);
                call_user_func_array([$controllerInstance, $method], $params);
            } else {
                throw new \Exception('Handler inválido');
            }
        };

        foreach (array_reverse($middlewares) as $middleware) {
            $next = function($request) use ($next, $middleware) {
                return $middleware->handle($request, $next);
            };
        }

        return $next($request);
    }
}
