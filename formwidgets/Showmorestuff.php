<?php namespace Radiantweb\NestedRelation\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * showmorestuff Form Widget
 */
class Showmorestuff extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'radiantweb_nestedrelation_showmorestuff';

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
        return $this->makePartial('showmorestuff');
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
        $this->addCss('css/showmorestuff.css', 'Radiantweb.NestedRelation');
        $this->addJs('js/showmorestuff.js', 'Radiantweb.NestedRelation');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
