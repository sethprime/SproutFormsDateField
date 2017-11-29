<?php
namespace Craft;

class SproutFormsDateFieldPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Sprout Forms Date Field');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Seth Hendrick';
    }

    function getDeveloperUrl()
    {
        return 'https://mitcs.com';
    }

    public function registerSproutFormsFields()
    {
        $basePath = craft()->path->getPluginsPath() . 'sproutformsdatefield/';
        require_once $basePath . 'SproutFormsDateField.php';

        return array(
            new SproutFormsDateField(),
        );
    }
}
