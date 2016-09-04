<?php

class Validator
{
    private $fields;
    private $rules;

    public function __construct($fields, $rules)
    {
        $this->fields = $fields;
        $this->rules = $rules;
    }

    /**
     * @param $postFields
     * @return bool
     */
    public function checkFields($postFields)
    {
        foreach($postFields as $key => $value)
        {
            if (array_search($key, array_keys($this->fields)) === false) return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    public function validateFields($postFields)
    {

    }
}