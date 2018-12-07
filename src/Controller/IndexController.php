<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\MongoDB\Controller;

use MongoDB\Client;
use MSBios\Application\Controller\IndexController as DefaultIndexController;
use Zend\View\Model\ModelInterface;

/**
 * Class IndexController
 * @package MSBios\MongoDB\Controller
 */
class IndexController extends DefaultIndexController
{

    /** @var Client */
    protected $client;

    /**
     * IndexController constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return ModelInterface
     */
    public function indexAction()
    {
        /** @var ModelInterface $viewModel */
        $viewModel = parent::indexAction();
        $viewModel->setVariable('client', $this->client);
        return $viewModel;
    }
}
