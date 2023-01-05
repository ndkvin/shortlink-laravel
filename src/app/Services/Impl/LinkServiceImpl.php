<?php

namespace App\Services\Impl;

use App\Models\Link;
use App\Services\LinkService;

class LinkServiceImpl implements LinkService
{
  public function createLink(string $name, string $url): string
  {
    $result = Link::create([
      'slug' => $name,
      'link' => $url
    ]);

    return $result->slug;
  }
}
