<?php

namespace Bastas\Form;

use Bastas\Form\HtmlElement\FormElement;

/**
 * Class Form
 * @package Bastas\Form
 */
class Form extends HtmlElement
{
    /**
     * @var array
     */
    private $formElements = [];

    /**
     * @param FormElement $formElement
     */
    public function addElement(FormElement $formElement)
    {
        $this->formElements[$formElement->getElementName()] = $formElement;
    }

    /**
     * @param string $formElementName
     */
    public function removeElement(string $formElementName)
    {
        unset($this->formElements[$formElementName]);
    }

    /**
     * @return array
     */
    public function getFormElements() : array
    {
        return $this->formElements;
    }

    /**
     * @return array
     */
    public function getFormAttributes() : array
    {
        return $this->elementAttributes;
    }

    /**
     * @param array $formData
     */
    public function assignDataToFormElements(array $formData)
    {
        foreach ($formData as $key => $value) {
            if (isset($this->formElements[$key])) {
                $this->formElements[$key]->assignData($value);
            }
        }
    }

    /**
     *
     */
    public function isValid()
    {
        //TODO Implement with the Bastas\Validator Component
    }
}