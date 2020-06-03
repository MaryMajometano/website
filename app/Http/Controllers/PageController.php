<?php

namespace App\Http\Controllers;

use App\Repositories\Collection;

class PageController
{
    public function __invoke($locale, $page = 'home', Collection $collection)
    {
        $content = $collection->fetch($page, $locale);

        return view($content->template(), compact('content'));
    }
}
