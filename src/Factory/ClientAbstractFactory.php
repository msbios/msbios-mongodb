<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\MongoDB\Factory;

use Interop\Container\ContainerInterface;
use MSBios\MongoDB\Module;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;

/**
 * Class ClientAbstractFactory
 * @package MSBios\MongoDB\Factory
 */
class ClientAbstractFactory implements AbstractFactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @return bool
     */
    public function canCreate(ContainerInterface $container, $requestedName)
    {
        /** @var array $options */
        $options = $container->get(Module::class);
        return isset($options[$requestedName]);
    }

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $options */
        $options = $container->get(Module::class);

        /** @var array $args */
        $args = $options[$requestedName] ?: $options;

        return (new \ReflectionClass($requestedName))->newInstanceArgs($args);
    }

    /**
     * @param $an_array
     * @return ClientAbstractFactory
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}