<?php declare(strict_types=1);

namespace Panda\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    private $session;
    public function __construct(
        Session $session,
    ){
        $this->session = $session;
    }

    public function execute()
    {
        echo '<pre>';
        var_dump($this->session->getData());
        die();
    }
}
