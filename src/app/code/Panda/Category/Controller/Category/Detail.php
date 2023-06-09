<?php

namespace Panda\Category\Controller\Category;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ){}

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
