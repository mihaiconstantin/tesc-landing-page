<?php

namespace App\Helpers;


class BrowserCheck
{
    private $browser;


    public function __construct(\Browser $browser)
    {
        $this->browser = $browser;
    }


    /**
     * Checks if a browser is Internet Explorer.
     *
     * @param \Browser $browser
     * @return mixed
     */
    public function isInternetExplorer()
    {
        return $this->browser::isIE();
    }


    /**
     * Checks if the browser version is at least at the supported version.
     *
     * @param \Browser $browser
     * @param int $supportedVersion
     * @return bool
     */
    public function isSupportedInternetExplorerVersion($supportedVersion = 11)
    {
        return (
            !version_compare($this->browser::browserVersion(), $supportedVersion, '<')
        );
    }


    /**
     * Checks if a browser is Internet Explorer of version 11.
     *
     * @return mixed
     */
    public function isInternetExplorer11()
    {
        return $this->browser::isIEVersion(11);
    }

}