<?php

namespace Khaild\Phpfirst\form;

use Khaild\Phpfirst\Model;

/**
 * Class BaseField
 *
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package Khaild\Phpfirst\form
 */
abstract class BaseField
{

    public Model $model;
    public string $attribute;
    public string $type;
    abstract public function renderInput();


    /**
     * Field constructor.
     *
     * @param \Khaild\Phpfirst\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('<div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }

}