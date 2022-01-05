<?php

namespace ContainerXd8x3PD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10c9e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0297b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb441 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getConnection', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getMetadataFactory', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getExpressionBuilder', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'beginTransaction', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getCache', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'transactional', array('func' => $func), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'commit', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->commit();
    }

    public function rollback()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'rollback', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getClassMetadata', array('className' => $className), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'createQuery', array('dql' => $dql), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'createNamedQuery', array('name' => $name), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'createQueryBuilder', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'flush', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'clear', array('entityName' => $entityName), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->clear($entityName);
    }

    public function close()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'close', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->close();
    }

    public function persist($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'persist', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'remove', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'refresh', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'detach', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'merge', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'contains', array('entity' => $entity), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getEventManager', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getConfiguration', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'isOpen', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getUnitOfWork', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getProxyFactory', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'initializeObject', array('obj' => $obj), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'getFilters', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'isFiltersStateClean', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'hasFilters', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return $this->valueHolder10c9e->hasFilters();
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

        $instance->initializer0297b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder10c9e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10c9e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10c9e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__get', ['name' => $name], $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        if (isset(self::$publicPropertieseb441[$name])) {
            return $this->valueHolder10c9e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10c9e;

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

        $targetObject = $this->valueHolder10c9e;
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
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10c9e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10c9e;
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
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__isset', array('name' => $name), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10c9e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10c9e;
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
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__unset', array('name' => $name), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10c9e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10c9e;
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
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__clone', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        $this->valueHolder10c9e = clone $this->valueHolder10c9e;
    }

    public function __sleep()
    {
        $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, '__sleep', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;

        return array('valueHolder10c9e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0297b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0297b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0297b && ($this->initializer0297b->__invoke($valueHolder10c9e, $this, 'initializeProxy', array(), $this->initializer0297b) || 1) && $this->valueHolder10c9e = $valueHolder10c9e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10c9e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10c9e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
