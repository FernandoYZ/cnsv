<?php

namespace Core;

/**
 * Clase Model
 *
 * Esta clase proporciona la funcionalidad básica para interactuar con la base de datos,
 * incluyendo operaciones de validación, guardado, actualización, eliminación y relaciones.
 * 
 * @var QueryBuilder $queryBuilder Instancia de QueryBuilder para construir consultas.
 * @var ValidationRules $validationRules Reglas de validación para los datos del modelo.
 */
class Model {
    protected $queryBuilder;
    protected $validationRules = [];

    /**
     * Establece la conexión a la base de datos.
     *
     * @param \PDO $pdo Instancia de PDO para la conexión a la base de datos.
     */
    public function setConnection($pdo) {
        $this->queryBuilder = new QueryBuilder($pdo);
    }

    /**
     * Valida los datos según las reglas definidas.
     *
     * @param array $data Datos a validar.
     * @return bool|array Devuelve true si la validación es exitosa, o un array de errores.
     */
    public function validate($data) {
        $validator = new Validation($data, $this->validationRules);
        if ($validator->validate()) {
            return true;
        }
        return $validator->getErrors();
    }

    /**
     * Guarda los datos en la base de datos.
     *
     * @param array $data Datos a guardar.
     * @return mixed Devuelve el resultado de la operación de guardado o errores de validación.
     */
    public function save($data) {
        $errors = $this->validate($data);
        if ($errors === true) {
            return $this->queryBuilder->save($this->getTable(), $data);
        }
        return $errors;
    }

    /**
     * Actualiza los datos en la base de datos.
     *
     * @param array $data Datos a actualizar.
     * @param mixed $id Identificador del registro a actualizar.
     * @param string $idColumn Nombre de la columna del identificador.
     * @return mixed Devuelve el resultado de la operación de actualización o errores de validación.
     */
    public function update($data, $id, $idColumn = 'id') {
        $errors = $this->validate($data);
        if ($errors === true) {
            return $this->queryBuilder->update($this->getTable(), $data, $id, $idColumn);
        }
        return $errors;
    }

    /**
     * Elimina un registro de la base de datos.
     *
     * @param mixed $id Identificador del registro a eliminar.
     * @param string $idColumn Nombre de la columna del identificador.
     * @return mixed Resultado de la operación de eliminación.
     */
    public function delete($id, $idColumn = 'id') {
        return $this->queryBuilder->delete($this->getTable(), $id, $idColumn);
    }

    /**
     * Obtiene todos los registros de la tabla.
     *
     * @return array Lista de registros.
     */
    public function all() {
        return $this->queryBuilder->all($this->getTable());
    }

    /**
     * Busca un registro por su identificador.
     *
     * @param mixed $id Identificador del registro.
     * @param string $idColumn Nombre de la columna del identificador.
     * @return mixed Registro encontrado o null.
     */
    public function find($id, $idColumn = 'id') {
        return $this->queryBuilder->find($this->getTable(), $id, $idColumn);
    }

    /**
     * Obtiene el nombre de la tabla asociada al modelo.
     *
     * @return string Nombre de la tabla.
     */
    protected function getTable() {
        return strtolower((new \ReflectionClass($this))->getShortName());
    }

    // Relaciones

    /**
     * Define una relación "uno a uno".
     *
     * @param string $relatedModel Clase del modelo relacionado.
     * @param string $foreignKey Nombre de la clave foránea.
     * @param string $localKey Nombre de la clave local.
     * @return mixed Registro relacionado.
     */
    public function hasOne($relatedModel, $foreignKey, $localKey = 'id') {
        $relatedInstance = new $relatedModel();
        return $relatedInstance->where($foreignKey, '=', $this->$localKey)->first();
    }

    /**
     * Define una relación "uno a muchos".
     *
     * @param string $relatedModel Clase del modelo relacionado.
     * @param string $foreignKey Nombre de la clave foránea.
     * @param string $localKey Nombre de la clave local.
     * @return array Registros relacionados.
     */
    public function hasMany($relatedModel, $foreignKey, $localKey = 'id') {
        $relatedInstance = new $relatedModel();
        return $relatedInstance->where($foreignKey, '=', $this->$localKey)->get();
    }

    /**
     * Define una relación "pertenece a".
     *
     * @param string $relatedModel Clase del modelo relacionado.
     * @param string $foreignKey Nombre de la clave foránea.
     * @param string $ownerKey Nombre de la clave del propietario.
     * @return mixed Registro relacionado.
     */
    public function belongsTo($relatedModel, $foreignKey, $ownerKey = 'id') {
        $relatedInstance = new $relatedModel();
        return $relatedInstance->where($ownerKey, '=', $this->$foreignKey)->first();
    }

    /**
     * Define una relación "pertenece a muchos".
     *
     * @param string $relatedModel Clase del modelo relacionado.
     * @param string $pivotTable Nombre de la tabla pivote.
     * @param string $foreignKey Nombre de la clave foránea en la tabla pivote.
     * @param string $relatedKey Nombre de la clave relacionada en la tabla pivote.
     * @param string $localKey Nombre de la clave local.
     * @return array Registros relacionados.
     */
    public function belongsToMany($relatedModel, $pivotTable, $foreignKey, $relatedKey, $localKey = 'id') {
        $queryBuilder = new QueryBuilder($this->queryBuilder->getPdo());
        $results = $queryBuilder
            ->select('*')
            ->from($pivotTable)
            ->where($foreignKey, '=', $this->$localKey)
            ->get();
        
        $relatedInstance = new $relatedModel();
        $ids = array_column($results, $relatedKey);
        
        return $relatedInstance->whereIn('id', $ids)->get();
    }
}
