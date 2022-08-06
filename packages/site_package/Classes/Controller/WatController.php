<?php

declare(strict_types=1);

namespace Pwademo\Sitepackage\Controller;

use TYPO3\CMS\Core\Http\JsonResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class WatController extends ActionController
{
    public function watAction(): JsonResponse
    {
        return new JsonResponse([['item' => 'name']]);
    }
}
