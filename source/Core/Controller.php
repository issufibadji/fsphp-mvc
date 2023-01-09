<?php

namespace Source\Core;

use Source\Support\Seo;

/**
 * fsphp-mvc | Class App
 *
 * @author Issufi Badji <ibjsoftwares@gmail.com>
 * @package Source\Core
 */
class Controller
{
    /** @var view */
    protected $view;
    /** @var Seo */
    protected $seo;

    /**
     * Controller constructor.
     * @param string|null $pathToViews
     */
    public function __construct(string $pathToViews = null)
    {
        $this->view = new View($pathToViews);
        $this->seo = new Seo();
    }
}