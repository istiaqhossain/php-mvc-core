<?php

namespace app\core\form;

use app\core\Model;

abstract class BaseField
{
    abstract public function renderInput(): string;

    public Model $model;
    public string $attribute;

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
        <div class="form-floating mb-4">
            %s
            <label for="%s">%s</label>
            <div class="invalid-feedback">
                %s
            </div>    
        </div>
        ', 
            $this->renderInput(),
            $this->attribute, // for
            $this->model->getLabel($this->attribute), // label
            $this->model->getFirstError($this->attribute) // error msg
        );
    }
}
