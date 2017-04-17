<?php

namespace Bastas\Form\HtmlElement\DescreteFormElement;

use Bastas\Form\HtmlElement\FormElement;

/**
 * Class Select
 * @package Bastas\Form\HtmlElement\DescreteFormElement
 */
class Select extends FormElement
{
    /**
     * Select constructor.
     * @param string $elementName
     * @param array $attributes
     * @param array $options
     */
    public function __construct(string $elementName, array $attributes, array $options = [])
    {
        parent::__construct($elementName, $attributes);

        // TODO Implement specific Select element behavior...
    }
}