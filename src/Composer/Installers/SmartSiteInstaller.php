<?php
namespace Composer\Installers;

class SmartSiteInstaller extends BaseInstaller
{
    protected $locations = array(
        'theme'     => 'public/projects/{$name}/',
    );
}
