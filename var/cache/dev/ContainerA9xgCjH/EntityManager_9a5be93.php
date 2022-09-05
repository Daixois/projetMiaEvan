<?php

namespace ContainerA9xgCjH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1e21a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7eb0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesae8ea = [
        
    ];

    public function getConnection()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getConnection', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getMetadataFactory', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getExpressionBuilder', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'beginTransaction', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getCache', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'transactional', array('func' => $func), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'commit', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->commit();
    }

    public function rollback()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'rollback', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getClassMetadata', array('className' => $className), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'createQuery', array('dql' => $dql), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'createNamedQuery', array('name' => $name), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'createQueryBuilder', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'flush', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'clear', array('entityName' => $entityName), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->clear($entityName);
    }

    public function close()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'close', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->close();
    }

    public function persist($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'persist', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'remove', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'refresh', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'detach', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'merge', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'contains', array('entity' => $entity), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getEventManager', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getConfiguration', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'isOpen', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getUnitOfWork', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getProxyFactory', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'initializeObject', array('obj' => $obj), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'getFilters', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'isFiltersStateClean', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'hasFilters', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return $this->valueHolder1e21a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7eb0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1e21a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1e21a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1e21a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__get', ['name' => $name], $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        if (isset(self::$publicPropertiesae8ea[$name])) {
            return $this->valueHolder1e21a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e21a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e21a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e21a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e21a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__isset', array('name' => $name), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e21a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1e21a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__unset', array('name' => $name), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e21a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1e21a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__clone', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        $this->valueHolder1e21a = clone $this->valueHolder1e21a;
    }

    public function __sleep()
    {
        $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, '__sleep', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;

        return array('valueHolder1e21a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7eb0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7eb0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7eb0a && ($this->initializer7eb0a->__invoke($valueHolder1e21a, $this, 'initializeProxy', array(), $this->initializer7eb0a) || 1) && $this->valueHolder1e21a = $valueHolder1e21a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1e21a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1e21a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
