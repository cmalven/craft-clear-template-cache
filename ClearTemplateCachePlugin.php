<?php
namespace Craft;


class ClearTemplateCachePlugin extends BasePlugin
{
    public function getName() {
        return Craft::t('Clear Template Cache');
    }

    public function getVersion() {
        return '1.0';
    }

    public function getDeveloper() {
        return 'Chris Malven';
    }

    public function getDeveloperUrl() {
        return 'http://malven.co';
    }
}
