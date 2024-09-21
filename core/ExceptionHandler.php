<?php

namespace Core;

class ManejadorDeExcepciones {
    /**
     * Maneja las excepciones capturadas.
     *
     * @param \Exception $exception La excepción a manejar.
     */
    public function manejar(\Exception $exception) {
        error_log($exception->getMessage());
        $codigo = $exception->getCode();
        if ($codigo < 400 || $codigo >= 600) {
            $codigo = 500;
        }
        http_response_code($codigo);

        $rutaVista = __DIR__ . '/../resources/views/errors/' . $codigo . '.php';
        if (!file_exists($rutaVista)) {
            $rutaVista = __DIR__ . '/../resources/views/errors/500.php';
        } if (file_exists($rutaVista)) {
            require $rutaVista;
        } else {
            echo 'Ocurrió un error';
        }
    }
}
