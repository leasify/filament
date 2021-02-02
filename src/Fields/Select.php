<?php

namespace Filament\Fields;

class Select extends InputField
{
    public $options = [];

    public $placeholder = 'Choose';

    public function options(array $options)
    {
        $this->options = $options;

        return $this;
    }

    public function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}