<?php

namespace Odiseo\BlogBundle\Model;

/**
 * @author Diego D'amico <diego@odiseo.com.ar>
 */
class ArticleImage extends Image implements ArticleImageInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
