<?php

namespace Bastas\Form\HtmlElement\DescreteFormElement;

use Bastas\Form\HtmlElement\FormElement;

/**
 * Class Button
 * @package Bastas\Form\HtmlElement\DescreteFormElement
 */
class Button extends FormElement
{
    /**
     * Button constructor.
     * @param string $elementName
     * @param array $attributes
     */
    public function __construct(string $elementName, array $attributes)
    {
        parent::__construct($elementName, $attributes);
    }
}
