<?php

namespace Proxies\__CG__\Mautic\FormBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Form extends \Mautic\FormBundle\Entity\Form implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'name', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'formAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'description', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'alias', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'category', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'cachedHtml', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'postAction', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'postActionProperty', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'fields', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'actions', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'template', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'inKioskMode', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'renderStyle', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'submissions', 'submissionCount', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'formType', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'noIndex', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'progressiveProfilingLimit', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'usesProgressiveProfiling', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'name', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'formAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'description', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'alias', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'category', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'cachedHtml', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'postAction', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'postActionProperty', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'fields', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'actions', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'template', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'inKioskMode', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'renderStyle', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'submissions', 'submissionCount', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'formType', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'noIndex', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'progressiveProfilingLimit', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Form' . "\0" . 'usesProgressiveProfiling', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Form $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription($truncate = false, $length = 45)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', [$truncate, $length]);

        return parent::getDescription($truncate, $length);
    }

    /**
     * {@inheritDoc}
     */
    public function setCachedHtml($cachedHtml)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCachedHtml', [$cachedHtml]);

        return parent::setCachedHtml($cachedHtml);
    }

    /**
     * {@inheritDoc}
     */
    public function getCachedHtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCachedHtml', []);

        return parent::getCachedHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function getRenderStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRenderStyle', []);

        return parent::getRenderStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostAction($postAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostAction', [$postAction]);

        return parent::setPostAction($postAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostAction', []);

        return parent::getPostAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostActionProperty($postActionProperty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostActionProperty', [$postActionProperty]);

        return parent::setPostActionProperty($postActionProperty);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostActionProperty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostActionProperty', []);

        return parent::getPostActionProperty();
    }

    /**
     * {@inheritDoc}
     */
    public function getResultCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResultCount', []);

        return parent::getResultCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', [$publishUp]);

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', []);

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', [$publishDown]);

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', []);

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function addField($key, \Mautic\FormBundle\Entity\Field $field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addField', [$key, $field]);

        return parent::addField($key, $field);
    }

    /**
     * {@inheritDoc}
     */
    public function removeField($key, \Mautic\FormBundle\Entity\Field $field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeField', [$key, $field]);

        return parent::removeField($key, $field);
    }

    /**
     * {@inheritDoc}
     */
    public function getFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFields', []);

        return parent::getFields();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldAliases()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldAliases', []);

        return parent::getFieldAliases();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\Mautic\FormBundle\Entity\Submission $submissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubmission', [$submissions]);

        return parent::addSubmission($submissions);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubmission(\Mautic\FormBundle\Entity\Submission $submissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubmission', [$submissions]);

        return parent::removeSubmission($submissions);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', []);

        return parent::getSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAction($key, \Mautic\FormBundle\Entity\Action $action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAction', [$key, $action]);

        return parent::addAction($key, $action);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAction(\Mautic\FormBundle\Entity\Action $action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAction', [$action]);

        return parent::removeAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function clearActions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearActions', []);

        return parent::clearActions();
    }

    /**
     * {@inheritDoc}
     */
    public function getActions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActions', []);

        return parent::getActions();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', []);

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', [$template]);

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getInKioskMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInKioskMode', []);

        return parent::getInKioskMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setInKioskMode($inKioskMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInKioskMode', [$inKioskMode]);

        return parent::setInKioskMode($inKioskMode);
    }

    /**
     * {@inheritDoc}
     */
    public function setRenderStyle($renderStyle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRenderStyle', [$renderStyle]);

        return parent::setRenderStyle($renderStyle);
    }

    /**
     * {@inheritDoc}
     */
    public function isInKioskMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInKioskMode', []);

        return parent::isInKioskMode();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormType', []);

        return parent::getFormType();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormType($formType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormType', [$formType]);

        return parent::setFormType($formType);
    }

    /**
     * {@inheritDoc}
     */
    public function setNoIndex($noIndex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoIndex', [$noIndex]);

        return parent::setNoIndex($noIndex);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoIndex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoIndex', []);

        return parent::getNoIndex();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormAttributes($formAttributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormAttributes', [$formAttributes]);

        return parent::setFormAttributes($formAttributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormAttributes', []);

        return parent::getFormAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function isStandalone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStandalone', []);

        return parent::isStandalone();
    }

    /**
     * {@inheritDoc}
     */
    public function generateFormName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateFormName', []);

        return parent::generateFormName();
    }

    /**
     * {@inheritDoc}
     */
    public function usesProgressiveProfiling()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'usesProgressiveProfiling', []);

        return parent::usesProgressiveProfiling();
    }

    /**
     * {@inheritDoc}
     */
    public function setProgressiveProfilingLimit($progressiveProfilingLimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProgressiveProfilingLimit', [$progressiveProfilingLimit]);

        return parent::setProgressiveProfilingLimit($progressiveProfilingLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getProgressiveProfilingLimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProgressiveProfilingLimit', []);

        return parent::getProgressiveProfilingLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
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
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        return parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        return parent::setChanges($changes);
    }

}