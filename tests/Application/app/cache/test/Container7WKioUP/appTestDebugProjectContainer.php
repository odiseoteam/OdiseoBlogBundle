<?php

namespace Container7WKioUP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appTestDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    /**
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'sylius.storage.cookie' => 'getSylius_Storage_CookieService',
            'translator' => 'getTranslatorService',
        );
        $this->fileMap = array(
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine' => 'getDoctrineService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService.php',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'hateoas.event_subscriber.json' => 'getHateoas_EventSubscriber_JsonService.php',
            'hateoas.event_subscriber.xml' => 'getHateoas_EventSubscriber_XmlService.php',
            'hateoas.expression.link' => 'getHateoas_Expression_LinkService.php',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService.php',
            'hateoas.helper.link' => 'getHateoas_Helper_LinkService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'odiseo_blog.controller.article' => 'getOdiseoBlog_Controller_ArticleService.php',
            'odiseo_blog.controller.article_category' => 'getOdiseoBlog_Controller_ArticleCategoryService.php',
            'odiseo_blog.controller.article_category_translation' => 'getOdiseoBlog_Controller_ArticleCategoryTranslationService.php',
            'odiseo_blog.controller.article_translation' => 'getOdiseoBlog_Controller_ArticleTranslationService.php',
            'odiseo_blog.factory.article' => 'getOdiseoBlog_Factory_ArticleService.php',
            'odiseo_blog.factory.article_category' => 'getOdiseoBlog_Factory_ArticleCategoryService.php',
            'odiseo_blog.factory.article_category_translation' => 'getOdiseoBlog_Factory_ArticleCategoryTranslationService.php',
            'odiseo_blog.factory.article_translation' => 'getOdiseoBlog_Factory_ArticleTranslationService.php',
            'odiseo_blog.repository.article' => 'getOdiseoBlog_Repository_ArticleService.php',
            'odiseo_blog.repository.article_category' => 'getOdiseoBlog_Repository_ArticleCategoryService.php',
            'odiseo_blog.repository.article_category_translation' => 'getOdiseoBlog_Repository_ArticleCategoryTranslationService.php',
            'odiseo_blog.repository.article_translation' => 'getOdiseoBlog_Repository_ArticleTranslationService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'sm.callback.cascade_transition' => 'getSm_Callback_CascadeTransitionService.php',
            'sm.callback_factory' => 'getSm_CallbackFactoryService.php',
            'sm.factory' => 'getSm_FactoryService.php',
            'sylius.console.command.resource_debug' => 'getSylius_Console_Command_ResourceDebugService.php',
            'sylius.custom_bulk_action_grid_renderer.twig' => 'getSylius_CustomBulkActionGridRenderer_TwigService.php',
            'sylius.custom_grid_renderer.twig' => 'getSylius_CustomGridRenderer_TwigService.php',
            'sylius.event_subscriber.orm_mapped_super_class' => 'getSylius_EventSubscriber_OrmMappedSuperClassService.php',
            'sylius.event_subscriber.orm_repository_class' => 'getSylius_EventSubscriber_OrmRepositoryClassService.php',
            'sylius.form.extension.type.collection' => 'getSylius_Form_Extension_Type_CollectionService.php',
            'sylius.form.type.default' => 'getSylius_Form_Type_DefaultService.php',
            'sylius.form.type.grid_filter.boolean' => 'getSylius_Form_Type_GridFilter_BooleanService.php',
            'sylius.form.type.grid_filter.date' => 'getSylius_Form_Type_GridFilter_DateService.php',
            'sylius.form.type.grid_filter.entity' => 'getSylius_Form_Type_GridFilter_EntityService.php',
            'sylius.form.type.grid_filter.exists' => 'getSylius_Form_Type_GridFilter_ExistsService.php',
            'sylius.form.type.grid_filter.money' => 'getSylius_Form_Type_GridFilter_MoneyService.php',
            'sylius.form.type.grid_filter.string' => 'getSylius_Form_Type_GridFilter_StringService.php',
            'sylius.form.type.resource_autocomplete_choice' => 'getSylius_Form_Type_ResourceAutocompleteChoiceService.php',
            'sylius.form.type.resource_translations' => 'getSylius_Form_Type_ResourceTranslationsService.php',
            'sylius.grid.array_to_definition_converter' => 'getSylius_Grid_ArrayToDefinitionConverterService.php',
            'sylius.grid.data_extractor.property_access' => 'getSylius_Grid_DataExtractor_PropertyAccessService.php',
            'sylius.grid.data_provider' => 'getSylius_Grid_DataProviderService.php',
            'sylius.grid.data_source_provider' => 'getSylius_Grid_DataSourceProviderService.php',
            'sylius.grid.filters_applicator' => 'getSylius_Grid_FiltersApplicatorService.php',
            'sylius.grid.filters_criteria_resolver' => 'getSylius_Grid_FiltersCriteriaResolverService.php',
            'sylius.grid.provider' => 'getSylius_Grid_ProviderService.php',
            'sylius.grid.resource_view_factory' => 'getSylius_Grid_ResourceViewFactoryService.php',
            'sylius.grid.sorter' => 'getSylius_Grid_SorterService.php',
            'sylius.grid.view_factory' => 'getSylius_Grid_ViewFactoryService.php',
            'sylius.grid_driver.doctrine.dbal' => 'getSylius_GridDriver_Doctrine_DbalService.php',
            'sylius.grid_driver.doctrine.orm' => 'getSylius_GridDriver_Doctrine_OrmService.php',
            'sylius.grid_field.datetime' => 'getSylius_GridField_DatetimeService.php',
            'sylius.grid_field.string' => 'getSylius_GridField_StringService.php',
            'sylius.grid_field.twig' => 'getSylius_GridField_TwigService.php',
            'sylius.grid_filter.boolean' => 'getSylius_GridFilter_BooleanService.php',
            'sylius.grid_filter.date' => 'getSylius_GridFilter_DateService.php',
            'sylius.grid_filter.entity' => 'getSylius_GridFilter_EntityService.php',
            'sylius.grid_filter.exists' => 'getSylius_GridFilter_ExistsService.php',
            'sylius.grid_filter.money' => 'getSylius_GridFilter_MoneyService.php',
            'sylius.grid_filter.string' => 'getSylius_GridFilter_StringService.php',
            'sylius.random_generator' => 'getSylius_RandomGeneratorService.php',
            'sylius.registry.grid_driver' => 'getSylius_Registry_GridDriverService.php',
            'sylius.registry.grid_field' => 'getSylius_Registry_GridFieldService.php',
            'sylius.registry.grid_filter' => 'getSylius_Registry_GridFilterService.php',
            'sylius.resource_controller.resources_resolver.grid_aware' => 'getSylius_ResourceController_ResourcesResolver_GridAwareService.php',
            'sylius.storage.session' => 'getSylius_Storage_SessionService.php',
            'sylius.templating.helper.bulk_action_grid' => 'getSylius_Templating_Helper_BulkActionGridService.php',
            'sylius.templating.helper.grid' => 'getSylius_Templating_Helper_GridService.php',
            'sylius.translatable_entity_locale_assigner' => 'getSylius_TranslatableEntityLocaleAssignerService.php',
            'sylius.translation.translatable_listener.doctrine.orm' => 'getSylius_Translation_TranslatableListener_Doctrine_OrmService.php',
            'sylius.translation_locale_provider.immutable' => 'getSylius_TranslationLocaleProvider_ImmutableService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'test.client' => 'getTest_ClientService.php',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService.php',
            'test.service_container' => 'getTest_ServiceContainerService.php',
            'twig' => 'getTwigService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator' => 'getValidatorService.php',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'odiseo_blog.manager.article' => 'doctrine.orm.default_entity_manager',
            'odiseo_blog.manager.article_category' => 'doctrine.orm.default_entity_manager',
            'odiseo_blog.manager.article_category_translation' => 'doctrine.orm.default_entity_manager',
            'odiseo_blog.manager.article_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.grid.bulk_action_renderer.twig' => 'sylius.custom_bulk_action_grid_renderer.twig',
            'sylius.grid.renderer.twig' => 'sylius.custom_grid_renderer.twig',
            'sylius.translation_locale_provider' => 'sylius.translation_locale_provider.immutable',
        );
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(($this->privates['debug.event_dispatcher.inner'] ?? $this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher()), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), ($this->privates['monolog.logger.event'] ?? $this->getMonolog_Logger_EventService()));

        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fos_rest.format_listener'] ?? $this->getFosRest_FormatListenerService());
        }, 1 => 'onKernelRequest'), 34);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'), 192);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['fos_rest.exception_listener'] ?? $this->load('getFosRest_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -100);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage());
        }, 1 => 'onKernelRequest'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener());
        }, 1 => 'onException'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener());
        }, 1 => 'onException'), 512);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['debug.argument_resolver'] ?? $this->getDebug_ArgumentResolverService()));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\ServiceLocator(array('routing.loader' => function (): \Symfony\Component\Config\Loader\LoaderInterface {
            return ($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php'));
        })))->withContext('router.default', $this), ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appTestDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appTestDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this)), ($this->privates['monolog.logger.router'] ?? $this->getMonolog_Logger_RouterService()));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'sylius.storage.cookie' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Storage\CookieStorage
     */
    protected function getSylius_Storage_CookieService()
    {
        return $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ($this->privates['translation.loader.csv'] ?? $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader());
        }, 'translation.loader.dat' => function () {
            return ($this->privates['translation.loader.dat'] ?? $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader());
        }, 'translation.loader.ini' => function () {
            return ($this->privates['translation.loader.ini'] ?? $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader());
        }, 'translation.loader.json' => function () {
            return ($this->privates['translation.loader.json'] ?? $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader());
        }, 'translation.loader.mo' => function () {
            return ($this->privates['translation.loader.mo'] ?? $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader());
        }, 'translation.loader.php' => function () {
            return ($this->privates['translation.loader.php'] ?? $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader());
        }, 'translation.loader.po' => function () {
            return ($this->privates['translation.loader.po'] ?? $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader());
        }, 'translation.loader.qt' => function () {
            return ($this->privates['translation.loader.qt'] ?? $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader());
        }, 'translation.loader.res' => function () {
            return ($this->privates['translation.loader.res'] ?? $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader());
        }, 'translation.loader.xliff' => function () {
            return ($this->privates['translation.loader.xliff'] ?? $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader());
        }, 'translation.loader.yml' => function () {
            return ($this->privates['translation.loader.yml'] ?? $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader());
        })), ($this->privates['translator.formatter.default'] ?? $this->getTranslator_Formatter_DefaultService()), 'en_US', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.ar.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.ar.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.ar.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'az' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'bg' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.bg.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.bg.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.bg.yml')), 'ca' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.ca.yml'), 4 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'cs' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.cs.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.cs.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.cs.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')), 'cy' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.da.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.da.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.da.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'de' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.de.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.de.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.de.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')), 'el' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.el.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.el.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.el.yml')), 'en' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[5].'/src/Resources/translations/messages.en.yml'), 4 => ($this->targetDirs[5].'/src/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.en.yml'), 6 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.en.yml'), 7 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.en.yml'), 8 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff')), 'es' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[5].'/src/Resources/translations/messages.es.yml'), 4 => ($this->targetDirs[5].'/src/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.es.yml'), 6 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.es.yml'), 7 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.es.yml'), 8 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')), 'et' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.fa.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.fa.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.fa.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.fi.yml'), 3 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fi.xliff')), 'fr' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.fr.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.fr.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.fr.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff')), 'gl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff')), 'he' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.he.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.hr.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.hr.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.hr.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'hu' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.hu.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.hu.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.hu.yml')), 'hy' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.id.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.id.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.id.yml')), 'it' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.it.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.it.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.it.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')), 'ja' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.ja.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.ja.yml')), 'lb' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.lt.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.lt.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.lt.yml')), 'lv' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.nl.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.nl.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.nl.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.no.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.no.yml'), 5 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff')), 'pl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.pl.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.pl.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.pl.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')), 'pt' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.pt.yml'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.pt.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.pt.yml'), 5 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.pt_BR.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.pt_BR.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.pt_BR.yml')), 'ro' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.ro.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.ro.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.ro.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')), 'ru' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.ru.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.ru.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.ru.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')), 'sk' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.sk.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sk.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.sk.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'sl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.sl.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sl.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.sl.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'sq' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.sq.yml'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sq.yml'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.sq.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'sr_Latn' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'sv' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sv.yml'), 4 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sv.xliff')), 'th' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.th.yml'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.th.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.th.yml'), 5 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'tl' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.tr.yml'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.tr.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.tr.yml'), 5 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'uk' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.uk.yml'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.uk.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.uk.yml'), 5 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')), 'vi' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.zh_CN.yml'), 4 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.zh_CN.yml'), 5 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.zh_CN.yml'), 6 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.zh_TW.yml')), 'pt_PT' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'be' => array(0 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.be.yml'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.be.yml')), 'de_CH' => array(0 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.de_CH.yml'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.de_CH.yml'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.de_CH.yml')), 'sr' => array(0 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.sr.yml'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sr.yml')), 'sr_CS' => array(0 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/flashes.sr_CS.yml'), 1 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/messages.sr_CS.yml'), 2 => ($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/translations/validators.sr_CS.yml')), 'oc' => array(0 => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales(array(0 => 'en_US', 1 => 'en'));

        return $instance;
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker());
        }, 2));
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->privates['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(($this->privates['debug.argument_resolver.inner'] ?? $this->getDebug_ArgumentResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }

    /**
     * Gets the private 'debug.argument_resolver.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getDebug_ArgumentResolver_InnerService()
    {
        return $this->privates['debug.argument_resolver.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 6));
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(($this->privates['debug.controller_resolver.inner'] ?? $this->getDebug_ControllerResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }

    /**
     * Gets the private 'debug.controller_resolver.inner' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getDebug_ControllerResolver_InnerService()
    {
        return $this->privates['debug.controller_resolver.inner'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['monolog.logger.php'] ?? $this->getMonolog_Logger_PhpService()), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), true);
    }

    /**
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(($this->privates['fos_rest.decoder_provider'] ?? $this->getFosRest_DecoderProviderService()), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->privates['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('fos_rest.decoder.json' => function () {
            return ($this->privates['fos_rest.decoder.json'] ?? $this->privates['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder());
        }, 'fos_rest.decoder.xml' => function () {
            return ($this->privates['fos_rest.decoder.xml'] ?? $this->privates['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder());
        })), array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the private 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->privates['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener(($this->privates['fos_rest.format_negotiator'] ?? $this->getFosRest_FormatNegotiatorService()));
    }

    /**
     * Gets the private 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->privates['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->add(($this->privates['fos_rest.request_matcher.2364365e6bb6bfd5cadeda231e59db9139fadac2b673beb794ba3c0068839a899dc3c386'] ?? $this->getFosRest_RequestMatcher_2364365e6bb6bfd5cadeda231e59db9139fadac2b673beb794ba3c0068839a899dc3c386Service()), array('priorities' => array(0 => 'json', 1 => 'xml'), 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL, 'attributes' => array(), 'stop' => false));
        $instance->add(($this->privates['fos_rest.request_matcher.69e9d3fd562e0ecffc5bce0c68d3b7a673d187934b742bc76452558275bbd7611198d478'] ?? $this->getFosRest_RequestMatcher_69e9d3fd562e0ecffc5bce0c68d3b7a673d187934b742bc76452558275bbd7611198d478Service()), array('stop' => true, 'methods' => NULL, 'attributes' => array(), 'prefer_extension' => '2.0', 'fallback_format' => 'html', 'priorities' => array()));

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.request_matcher.2364365e6bb6bfd5cadeda231e59db9139fadac2b673beb794ba3c0068839a899dc3c386' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getFosRest_RequestMatcher_2364365e6bb6bfd5cadeda231e59db9139fadac2b673beb794ba3c0068839a899dc3c386Service()
    {
        return $this->privates['fos_rest.request_matcher.2364365e6bb6bfd5cadeda231e59db9139fadac2b673beb794ba3c0068839a899dc3c386'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api', NULL, NULL, NULL, array());
    }

    /**
     * Gets the private 'fos_rest.request_matcher.69e9d3fd562e0ecffc5bce0c68d3b7a673d187934b742bc76452558275bbd7611198d478' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getFosRest_RequestMatcher_69e9d3fd562e0ecffc5bce0c68d3b7a673d187934b742bc76452558275bbd7611198d478Service()
    {
        return $this->privates['fos_rest.request_matcher.69e9d3fd562e0ecffc5bce0c68d3b7a673d187934b742bc76452558275bbd7611198d478'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array());
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en_US', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.firephp' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FirePHPHandler
     */
    protected function getMonolog_Handler_FirephpService()
    {
        $this->privates['monolog.handler.firephp'] = $instance = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/test.log'), 100, true, NULL);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->privates['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler(($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->privates['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->privates['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler(($this->privates['monolog.handler.firephp'] ?? $this->getMonolog_Handler_FirephpService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('initialized_session' => function () {
            return ($this->services['session'] ?? null);
        }, 'session' => function () {
            return ($this->services['session'] ?? $this->load('getSessionService.php'));
        })));
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ($this->services['session'] ?? $this->load('getSessionService.php'));
        })));
    }

    /**
     * Gets the private 'translator.formatter.default' shared service.
     *
     * @return \Symfony\Component\Translation\Formatter\MessageFormatter
     */
    protected function getTranslator_Formatter_DefaultService()
    {
        return $this->privates['translator.formatter.default'] = new \Symfony\Component\Translation\Formatter\MessageFormatter(($this->privates['translator.selector'] ?? $this->privates['translator.selector'] = new \Symfony\Component\Translation\MessageSelector()));
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[2]; break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'OdiseoBlogBundle' => array(
                    'path' => ($this->targetDirs[5].'/src'),
                    'namespace' => 'Odiseo\\BlogBundle',
                ),
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'winzouStateMachineBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/winzou/state-machine-bundle'),
                    'namespace' => 'winzou\\Bundle\\StateMachineBundle',
                ),
                'JMSSerializerBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'BazingaHateoasBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/willdurand/hateoas-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\HateoasBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'FOSRestBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'SyliusResourceBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/sylius/resource-bundle'),
                    'namespace' => 'Sylius\\Bundle\\ResourceBundle',
                ),
                'SyliusGridBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/sylius/grid-bundle'),
                    'namespace' => 'Sylius\\Bundle\\GridBundle',
                ),
                'WhiteOctoberPagerfantaBundle' => array(
                    'path' => ($this->targetDirs[5].'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appTestDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[2].'/config/routing.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[2].'/DoctrineMigrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'OdiseoBlogBundle' => 'Odiseo\\BlogBundle\\OdiseoBlogBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'winzouStateMachineBundle' => 'winzou\\Bundle\\StateMachineBundle\\winzouStateMachineBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'SyliusGridBundle' => 'Sylius\\Bundle\\GridBundle\\SyliusGridBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appTestDebugProjectContainer',
            'locale' => 'en_US',
            'secret' => 'Heron is the best animal in the world!',
            'odiseo_blog.driver.doctrine/orm' => true,
            'odiseo_blog.driver' => 'doctrine/orm',
            'sylius.resources' => array(
                'odiseo_blog.article' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Odiseo\\BlogBundle\\Model\\Article',
                        'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'repository' => 'Odiseo\\BlogBundle\\Doctrine\\ORM\\ArticleRepository',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Odiseo\\BlogBundle\\Model\\ArticleTranslation',
                            'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleTranslationType',
                        ),
                    ),
                ),
                'odiseo_blog.article_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Odiseo\\BlogBundle\\Model\\ArticleTranslation',
                        'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleTranslationType',
                    ),
                ),
                'odiseo_blog.article_category' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Odiseo\\BlogBundle\\Model\\ArticleCategory',
                        'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'repository' => 'Odiseo\\BlogBundle\\Doctrine\\ORM\\ArticleCategoryRepository',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleCategoryType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryTranslation',
                            'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleCategoryTranslationType',
                        ),
                    ),
                ),
                'odiseo_blog.article_category_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryTranslation',
                        'interface' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Odiseo\\BlogBundle\\Form\\Type\\ArticleCategoryTranslationType',
                    ),
                ),
            ),
            'odiseo_blog.model.article.class' => 'Odiseo\\BlogBundle\\Model\\Article',
            'odiseo_blog.controller.article.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'odiseo_blog.factory.article.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'odiseo_blog.repository.article.class' => 'Odiseo\\BlogBundle\\Doctrine\\ORM\\ArticleRepository',
            'odiseo_blog.model.article_translation.class' => 'Odiseo\\BlogBundle\\Model\\ArticleTranslation',
            'odiseo_blog.controller.article_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'odiseo_blog.factory.article_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'odiseo_blog.model.article_category.class' => 'Odiseo\\BlogBundle\\Model\\ArticleCategory',
            'odiseo_blog.controller.article_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'odiseo_blog.factory.article_category.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'odiseo_blog.repository.article_category.class' => 'Odiseo\\BlogBundle\\Doctrine\\ORM\\ArticleCategoryRepository',
            'odiseo_blog.model.article_category_translation.class' => 'Odiseo\\BlogBundle\\Model\\ArticleCategoryTranslation',
            'odiseo_blog.controller.article_category_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'odiseo_blog.factory.article_category_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'Heron is the best animal in the world!',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en_US',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => array(

            ),
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appTestDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'sm.configs' => array(

            ),
            'sm.factory.class' => 'SM\\Factory\\Factory',
            'sm.callback_factory.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallbackFactory',
            'sm.callback.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback',
            'sm.twig_extension.class' => 'SM\\Extension\\Twig\\SMExtension',
            'sm.callback.cascade_transition.class' => 'SM\\Callback\\CascadeTransitionCallback',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'hateoas.link_factory.class' => 'Hateoas\\Factory\\LinkFactory',
            'hateoas.links_factory.class' => 'Hateoas\\Factory\\LinksFactory',
            'hateoas.embeds_factory.class' => 'Hateoas\\Factory\\EmbeddedsFactory',
            'hateoas.expression.evaluator.class' => 'Bazinga\\Bundle\\HateoasBundle\\Hateoas\\Expression\\LazyFunctionExpressionEvaluator',
            'bazinga_hateoas.expression_language.class' => 'Bazinga\\Bundle\\HateoasBundle\\ExpressionLanguage\\ExpressionLanguage',
            'hateoas.expression.link.class' => 'Hateoas\\Expression\\LinkExpressionFunction',
            'hateoas.serializer.xml.class' => 'Hateoas\\Serializer\\XmlSerializer',
            'hateoas.serializer.json_hal.class' => 'Hateoas\\Serializer\\JsonHalSerializer',
            'hateoas.serializer.exclusion_manager.class' => 'Hateoas\\Serializer\\ExclusionManager',
            'hateoas.event_subscriber.xml.class' => 'Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber',
            'hateoas.event_subscriber.json.class' => 'Hateoas\\Serializer\\EventSubscriber\\JsonEventSubscriber',
            'hateoas.inline_deferrer.embeds.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.inline_deferrer.links.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.configuration.provider.resolver.chain.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\ChainResolver',
            'hateoas.configuration.provider.resolver.method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\MethodResolver',
            'hateoas.configuration.provider.resolver.static_method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\StaticMethodResolver',
            'hateoas.configuration.provider.resolver.symfony_container.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\SymfonyContainerResolver',
            'hateoas.configuration.relation_provider.class' => 'Hateoas\\Configuration\\Provider\\RelationProvider',
            'hateoas.configuration.relations_repository.class' => 'Hateoas\\Configuration\\RelationsRepository',
            'hateoas.configuration.metadata.yaml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\YamlDriver',
            'hateoas.configuration.metadata.xml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\XmlDriver',
            'hateoas.configuration.metadata.annotation_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\AnnotationDriver',
            'hateoas.configuration.metadata.extension_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\ExtensionDriver',
            'hateoas.generator.registry.class' => 'Hateoas\\UrlGenerator\\UrlGeneratorRegistry',
            'hateoas.generator.symfony.class' => 'Hateoas\\UrlGenerator\\SymfonyUrlGenerator',
            'hateoas.helper.link.class' => 'Hateoas\\Helper\\LinkHelper',
            'hateoas.twig.link.class' => 'Hateoas\\Twig\\Extension\\LinkExtension',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'fos_rest.format_listener.rules' => NULL,
            'sylius.state_machine.class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
            'sylius.resource.settings' => array(
                'paginate' => NULL,
                'limit' => NULL,
                'allowed_paginate' => array(
                    0 => 10,
                    1 => 20,
                    2 => 30,
                ),
                'default_page_size' => 10,
                'sortable' => false,
                'sorting' => NULL,
                'filterable' => false,
                'criteria' => NULL,
            ),
            'sylius.orm.repository.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.translation.translatable_listener.doctrine.orm.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMTranslatableListener',
            'sylius.grid.templates.action' => array(

            ),
            'sylius.grid.templates.bulk_action' => array(

            ),
            'sylius.grid.templates.filter' => array(

            ),
            'sylius.grids_definitions' => array(

            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'console.command.ids' => array(
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.doctrine_migrations.diff_command',
                5 => 'console.command.public_alias.doctrine_migrations.execute_command',
                6 => 'console.command.public_alias.doctrine_migrations.generate_command',
                7 => 'console.command.public_alias.doctrine_migrations.latest_command',
                8 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                9 => 'console.command.public_alias.doctrine_migrations.status_command',
                10 => 'console.command.public_alias.doctrine_migrations.version_command',
                11 => 'sylius.console.command.resource_debug',
            ),
        );
    }
}
