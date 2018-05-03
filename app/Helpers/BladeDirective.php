<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Blade;
use App\Helpers\BrowserCheck;


class BladeDirective
{
    private $browserChecks;


    public function __construct(BrowserCheck $browserCheck)
    {
        $this->browserChecks = $browserCheck;
    }


    /**
     * Register directive checking if the browser is Internet Explorer.
     *
     * @param $directiveName
     */
    public function registerInternetExplorer($directiveName)
    {
        Blade::if($directiveName, function () {
            return $this->browserChecks->isInternetExplorer();
        });
    }


    /**
     * Register directive checking for a supported version of Internet Explorer.
     *
     * @param $directiveName
     */
    public function registerSupportedInternetExplorerVersion($directiveName)
    {
        Blade::if($directiveName, function () {
            return $this->browserChecks->isSupportedInternetExplorerVersion();
        });
    }


    /**
     * Register directive for checking if a browser is Internet Explorer of version 11.
     *
     * @param $directiveName
     */
    public function registerInternetExplorer11($directiveName)
    {
        Blade::if($directiveName, function () {
            return $this->browserChecks->isInternetExplorer11();
        });
    }
}