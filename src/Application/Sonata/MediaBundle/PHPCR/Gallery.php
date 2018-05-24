<?php

namespace App\Application\Sonata\MediaBundle\PHPCR;

use Sonata\MediaBundle\PHPCR\BaseGallery as BaseGallery;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @link https://sonata-project.org/easy-extends
 *
 * References:
 * @link http://docs.doctrine-project.org/projects/doctrine-phpcr-odm/en/latest/index.html
 */
class Gallery extends BaseGallery
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
