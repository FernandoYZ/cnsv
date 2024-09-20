<?php

namespace Core;

class Database {
    protected $conexiones = []; 
    protected $configuracion; 
    protected static $instancia;

    /**
     * Constructor de la clase Database.
     *
     * @param array $config Configuración de la base de datos.
     */
    public function __construct(array $config) {
        $this->configuracion = $config;
        $this->agregarConexion('default', $config);
        self::$instancia = $this;
    }

    /**
     * Obtiene la instancia única de la clase Database.
     *
     * @return Database La instancia de la clase.
     */
    public static function getInstance() {
        return self::$instancia;
    }

    /**
     * Agrega una nueva conexión a la base de datos.
     *
     * @param string $nombre Nombre de la conexión.
     * @param array $config Configuración de la conexión.
     * @throws Exception Si la conexión falla.
     */
    public function agregarConexion($nombre, array $config) {
        $dsn = "{$config['driver']}:host={$config['host']};
                dbname={$config['database']};
                charset={$config['charset']}";
        
        try {
            $this->conexiones[$nombre] = new \PDO($dsn, $config['username'], $config['password']);
            $this->conexiones[$nombre]->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \Exception('Conexión fallida: ' . $e->getMessage());
        }
    }

    /**
     * Obtiene una conexión a la base de datos.
     *
     * @param string $nombre Nombre de la conexión (por defecto 'default').
     * @return \PDO|null La conexión PDO o null si no existe.
     */
    public function obtenerConexion($nombre = 'default') {
        return $this->conexiones[$nombre] ?? null;
    }
    
    /**
     * Inicia una transacción en la base de datos.
     */
    public function iniciarTransaccion() {
        $this->obtenerConexion()->beginTransaction();
    }

    /**
     * Ejecuta una transacción con un callback.
     *
     * @param callable $callback Función que contiene la lógica de la transacción.
     * @throws Exception Si ocurre un error, se revierte la transacción.
     */
    public function transaccion(callable $callback) {
        try {
            $this->iniciarTransaccion();
            $callback($this->obtenerConexion());
            $this->confirmar();
        } catch (\Exception $e) {
            $this->revertir();
            throw $e;
        }
    }
    
    /**
     * Confirma la transacción actual.
     */
    public function confirmar() {
        $this->obtenerConexion()->commit();
    }

    /**
     * Revierte la transacción actual.
     */
    public function revertir() {
        $this->obtenerConexion()->rollBack();
    }
}
