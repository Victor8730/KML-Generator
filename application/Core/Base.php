<?php

declare(strict_types=1);

namespace Core;

class Base implements face\Base
{
    protected const VERSION = '1.0.0';

    /**
     * Application folder name
     */
    protected const PATH_APPLICATION = 'application';

    /**
     * Controller folder name
     */
    protected const PATH_CONTROLLERS = 'Controllers';

    /**
     * Model folder name
     */
    protected const PATH_MODEL = 'Models';

    /**
     * Cache folder name
     */
    protected const PATH_CACHE = 'Cache';

    /**
     * Views folder name
     */
    protected const PATH_VIEWS = 'Views';

    /**
     * @var Validator|object
     */
    protected object $validator;

    public function __construct()
    {
        $this->validator = new Validator();
    }

}