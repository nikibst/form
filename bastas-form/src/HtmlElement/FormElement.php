<?php

namespace Bastas\Form\HtmlElement;

use Bastas\Form\HtmlElement;

/**
 * Class FormElement
 * @package Bastas\Form\HtmlElement
 */
class FormElement extends HtmlElement
{
    /**
     * @var string
     */
    private $elementName;
    /**
     * @var string
     */
    private $assignedData = '';

    /**
     * FormElement constructor.
     * @param string $elementName
     * @param array $attributes
     */
    public function __construct(string $elementName, array $attributes = [])
    {
        $this->elementName = $elementName;

        if (!empty($attributes)) {
            $this->setAttributes($attributes);
        }
    }

    /**
     * @param $assignedData
     */
    public function assignData($assignedData)
    {
        $this->assignedData = $assignedData;
    }

    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->assignedData;
    }

    /**
     * @return string
     */
    public function getElementName() : string
    {
        return $this->elementName;
    }

    /**
     * @return array
     */
    public function getFormElementAttributes() : array
    {
        return $this->elementAttributes;
    }
}