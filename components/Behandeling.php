<?php namespace Hessel\Behandelingen\Components;

use Cms\Classes\ComponentBase;

class Behandeling extends ComponentBase
{
    /**
    *titel
    *@var string 
    */
    public $item_title;

    public function componentDetails()
    {
        return [
            'name'        => 'Behandeling Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

      public function onRun()
    {
        $this->page['item_title'] = 'Hessel';
    }
}
