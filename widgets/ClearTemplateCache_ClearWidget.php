<?php
namespace Craft;

class ClearTemplateCache_ClearWidget extends BaseWidget
{
    public function getName() {
        return Craft::t('Clear All Template Caches');
    }

    public function getBodyHtml() {
        return craft()->templates->render('cleartemplatecache/_widgets/cleartemplatecache/body');
    }
}
