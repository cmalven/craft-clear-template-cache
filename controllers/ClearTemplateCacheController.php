<?php
namespace Craft;

class ClearTemplateCacheController extends BaseController
{
    protected $allowAnonymous = false;

    public function actionClear() {
        $this->requirePostRequest();
        $this->requireAjaxRequest();

        $cleared = craft()->templateCache->deleteAllCaches() ? 'success' : 'failure';
        ClearTemplateCachePlugin::log("Template caches cleared: {$cleared}", LogLevel::Info);

        $this->returnJson(array('success' => true));
    }

}

