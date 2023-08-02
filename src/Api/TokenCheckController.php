<?php

namespace MyStaticPages\Api;

use Flarum\Api\Controller\AbstractListController;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;
use MyStaticPages\StaticPage;

class StaticPageController extends AbstractListController
{
    public function data(ServerRequestInterface $request, Document $document)
    {
        return StaticPage::all();
    }
}
