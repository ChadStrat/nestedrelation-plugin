<?php namespace Radiantweb\NestedRelation\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * showstuff Form Widget
 */
class Showstuff extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'radiantweb_nestedrelation_showstuff';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('showstuff');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/showstuff.css', 'Radiantweb.NestedRelation');
        $this->addJs('js/showstuff.js', 'Radiantweb.NestedRelation');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
