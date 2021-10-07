<?php

namespace app\core\form;

use app\core\Model;

class TextareaField extends BaseField
{
    public const TYPE_TEXTAREA = 'textarea';
    
    public string $type;

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXTAREA;
        parent::__construct($model, $attribute);
    }

    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control %s" id="%s" placeholder="%s" style="height: 80px">%s</textarea>', 
            $this->attribute, // name
            $this->model->hasError($this->attribute) ? 'is-invalid' : '', // error class
            $this->attribute, // id
            $this->attribute, // placeholder
            $this->model->{$this->attribute}, // value
        );
    }
}