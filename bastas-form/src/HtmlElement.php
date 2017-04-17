<?php

namespace Bastas\Form;

/**
 * Class HtmlElement
 * @package Bastas\Form
 */
abstract class HtmlElement
{
    /**
     * Holds the attributes for the specific instance element.
     *
     * @var array
     */
    protected $elementAttributes = [];

    /**
     * @param $attrKey
     * @param $attrVal
     * @return $this
     */
    public function setAttribute($attrKey, $attrVal)
    {
        $this->elementAttributes[$attrKey] = $attrVal;

        return $this;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes = [])
    {
        foreach ($attributes as $attrKey => $attrVal) {
            $this->elementAttributes[$attrKey] = $attrVal;
        }
    }
}