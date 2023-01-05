<?php

namespace App\Http\Controllers;

use App\Http\Requests\Link\CreateRequest;
use App\Services\LinkService;

class LinkController extends Controller
{

  private LinkService $linkService;

  /**
   * @param LinkService $linkService
   */
  public function __construct(LinkService $linkService)
  {
    $this->linkService = $linkService;
  }

  public function index()
  {
    return view('pages.link');
  }

  public function createLink(CreateRequest $req)
  {
    $data = $req->all();

    $result = $this->linkService->createLink($data['slug'], $data['link']);

    return redirect()
      ->route('link.index')
      ->with('status', 'Berhasil membuat ' . $result);
  }
}
