<?php

namespace Core;

/**
 * Clase ViewCompiler
 *
 * Esta clase se encarga de compilar y renderizar vistas.
 */
class ViewCompiler {

    /**
     * Renderiza una vista específica.
     *
     * @param string $viewPath Ruta de la vista a renderizar.
     * @param array $data Datos a pasar a la vista.
     * @return string Contenido renderizado de la vista.
     * @throws \Exception Si la vista no se encuentra.
     */
    public function render($viewPath, $data = []) {
        if (!file_exists($viewPath)) {
            throw new \Exception("Vista no encontrada: $viewPath");
        }

        extract($data);
        ob_start();
        require $viewPath;
        return ob_get_clean();
    }

    /**
     * Renderiza una vista dentro de un diseño (layout).
     *
     * @param string $layoutPath Ruta del layout.
     * @param string $viewPath Ruta de la vista a renderizar.
     * @param array $data Datos a pasar tanto al layout como a la vista.
     * @return string Contenido renderizado del layout con la vista.
     */
    public function renderWithLayout($layoutPath, $viewPath, $data = []) {
        ob_start();
        $content = $this->render($viewPath, $data);
        $data['content'] = $content;
        return $this->render($layoutPath, $data);
    }
}
