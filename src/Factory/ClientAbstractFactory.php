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
     * @inheritdoc
     *
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
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object
     * @throws \ReflectionException
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $defaultOptions */
        $defaultOptions = $container->build(Module::class, $options);

        /** @var array $args */
        $args = $defaultOptions[$requestedName] ?: $defaultOptions;

        return (new \ReflectionClass($requestedName))
            ->newInstanceArgs($args);
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
