<?php

namespace Core;

/**
 * Clase Validation
 *
 * Esta clase se encarga de validar datos según un conjunto de reglas.
 */
class Validation {
    protected $data;   
    protected $rules;  
    protected $errors = []; 

    public function __construct($data, $rules) {
        $this->data = $data;
        $this->rules = $rules;
    }

    /**
     * Realiza la validación de los datos.
     *
     * @return bool Verdadero si no hay errores, falso en caso contrario.
     */
    public function validate() {
        foreach ($this->rules as $field => $rules) {
            $rulesArray = explode('|', $rules);
            foreach ($rulesArray as $rule) {
                $this->validateRule($field, $rule);
            }
        }
        return empty($this->errors);
    }

    /**
     * Valida una regla específica.
     *
     * @param string $field Campo a validar.
     * @param string $rule Regla a aplicar.
     */
    protected function validateRule($field, $rule) {
        $value = $this->data[$field] ?? null;
        if (strpos($rule, ':') !== false) {
            [$ruleName, $ruleValue] = explode(':', $rule);
        } else {
            $ruleName = $rule;
            $ruleValue = null;
        }
        
        switch ($ruleName) {
            case 'required':
                if (is_null($value)) {
                    $this->addError($field, "$field es requerido");
                }
                break;
            case 'string':
                if (!is_string($value)) {
                    $this->addError($field, "$field debe ser una cadena");
                }
                break;
            case 'email':
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($field, "$field debe ser un correo electrónico válido");
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    $this->addError($field, "$field no debe tener más de $ruleValue caracteres");
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    $this->addError($field, "$field debe tener al menos $ruleValue caracteres");
                }
                break;
            case 'confirmed':
                $confirmationField = $field . '_confirmation';
                if ($value !== ($this->data[$confirmationField] ?? null)) {
                    $this->addError($field, "$field no coincide con la confirmación");
                }
                break;
            case 'unique':
                $this->validateUnique($field, $value, $ruleValue);
                break;
            default:
                break;
        }
    }

    /**
     * Valida si el valor es único en la base de datos.
     *
     * @param string $field Campo a validar.
     * @param mixed $value Valor a validar.
     * @param string $ruleValue Tabla y columna.
     */
    protected function validateUnique($field, $value, $ruleValue) {
        $tableAndColumn = explode(',', $ruleValue);
        $table = $tableAndColumn[0];
        $column = $tableAndColumn[1];
        
        // Obtener la conexión de la base de datos estáticamente
        $queryBuilder = new QueryBuilder(Database::getInstance()->obtenerConexion());
        $exists = $queryBuilder->table($table)->where($column, '=', $value)->exists();
        if ($exists) {
            $this->addError($field, "$field ya está en uso");
        }
    }

    /**
     * Agrega un error a la lista de errores.
     *
     * @param string $field Campo asociado al error.
     * @param string $message Mensaje de error.
     */
    protected function addError($field, $message) {
        $this->errors[$field][] = $message;
    }

    /**
     * Devuelve los errores encontrados.
     *
     * @return array Errores de validación.
     */
    public function getErrors() {
        return $this->errors;
    }
}
