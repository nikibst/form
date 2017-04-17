<?php

namespace Bastas\Form\HtmlElement\DescreteFormElement;

use Bastas\Form\HtmlElement\FormElement;

/**
 * Class Input
 * @package Bastas\Form\HtmlElement\DescreteFormElement
 */
class Input extends FormElement
{
    /**
     * Input constructor.
     * @param string $elementName
     * @param array $attributes
     */
    public function __construct(string $elementName, array $attributes)
    {
        parent::__construct($elementName, $attributes);
    }
}