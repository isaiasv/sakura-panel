<?php

namespace Sakura\Providers\Mvc;

use Sakura\Providers\AbstractServiceProvider;

use Phalcon\Mvc\Model\Metadata\Memory;

/**
 * \Sakura\Providers\ModelsMetadataServiceProvider
 *
 * @package Sakura\Providers
 */
class ModelsMetadataServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'modelsMetadata';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->serviceName,
            function () {
                $metadata = new Memory();

                return $metadata;
            }
        );
    }
}
