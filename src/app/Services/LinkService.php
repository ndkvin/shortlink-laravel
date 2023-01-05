<?php

namespace App\Services;

interface  LinkService {
  function createLink(string $name, string $url): string;
}