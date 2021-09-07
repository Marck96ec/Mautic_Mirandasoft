<?php

namespace Proxies\__CG__\Mautic\LeadBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PointsChangeLog extends \Mautic\LeadBundle\Entity\PointsChangeLog implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'lead', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'type', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'eventName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'actionName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'delta', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'dateAdded'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'lead', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'type', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'eventName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'actionName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'delta', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\PointsChangeLog' . "\0" . 'dateAdded'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PointsChangeLog $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventName($eventName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventName', [$eventName]);

        return parent::setEventName($eventName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventName', []);

        return parent::getEventName();
    }

    /**
     * {@inheritDoc}
     */
    public function setActionName($actionName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActionName', [$actionName]);

        return parent::setActionName($actionName);
    }

    /**
     * {@inheritDoc}
     */
    public function getActionName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActionName', []);

        return parent::getActionName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelta($delta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelta', [$delta]);

        return parent::setDelta($delta);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelta', []);

        return parent::getDelta();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

}
