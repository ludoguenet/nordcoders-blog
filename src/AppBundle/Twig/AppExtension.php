<?php

namespace AppBundle\Twig;


class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('truncate', [$this, 'truncateFilter'])
        ];
    }

    public function truncateFilter($content)
    {
        $content = substr($content, 0, 350) . '...';
        return $content;
    }
}