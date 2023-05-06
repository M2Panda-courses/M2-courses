<?php declare(strict_types=1);

namespace Panda\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        die ('Blog Post detail');
    }
}
