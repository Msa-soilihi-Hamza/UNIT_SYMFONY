<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerVtMiCHx\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerVtMiCHx/EntityManagerGhost51e8656.php';
require __DIR__.'/ContainerVtMiCHx/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerVtMiCHx/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerVtMiCHx/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerVtMiCHx/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerVtMiCHx/getTwigService.php';
require __DIR__.'/ContainerVtMiCHx/getSession_FactoryService.php';
require __DIR__.'/ContainerVtMiCHx/getServicesResetterService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_RememberMe_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_CheckRememberMeConditions_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Authenticator_RememberMeHandler_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_Authenticator_RememberMe_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerVtMiCHx/getSecrets_VaultService.php';
require __DIR__.'/ContainerVtMiCHx/getRouting_LoaderService.php';
require __DIR__.'/ContainerVtMiCHx/getPropertyAccessorService.php';
require __DIR__.'/ContainerVtMiCHx/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_TypeExtension_Password_PasswordHasherService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_TypeExtension_Form_PasswordHasherService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Type_FormService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Type_FileService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Type_EntityService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Type_ColorService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_ServerParamsService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_RegistryService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_Listener_PasswordHasherService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_FactoryService.php';
require __DIR__.'/ContainerVtMiCHx/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerVtMiCHx/getErrorControllerService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerVtMiCHx/getDoctrineService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerVtMiCHx/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerVtMiCHx/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerVtMiCHx/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerVtMiCHx/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerVtMiCHx/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_SystemClearerService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_SystemService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_AppClearerService.php';
require __DIR__.'/ContainerVtMiCHx/getCache_AppService.php';
require __DIR__.'/ContainerVtMiCHx/getTemplateControllerService.php';
require __DIR__.'/ContainerVtMiCHx/getRedirectControllerService.php';
require __DIR__.'/ContainerVtMiCHx/getLoginFormAuthenticatorService.php';
require __DIR__.'/ContainerVtMiCHx/getUserRepositoryService.php';
require __DIR__.'/ContainerVtMiCHx/getSecurityControllerService.php';
require __DIR__.'/ContainerVtMiCHx/getHomeControllerService.php';
require __DIR__.'/ContainerVtMiCHx/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerVtMiCHx/get_ServiceLocator_RSTd_NAService.php';
require __DIR__.'/ContainerVtMiCHx/get_ServiceLocator_O_RE2jaService.php';
require __DIR__.'/ContainerVtMiCHx/get_ServiceLocator_CshazM0Service.php';
require __DIR__.'/ContainerVtMiCHx/get_Security_RequestMatcher_KLbKLHaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\LoginFormAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Dbal\SchemaAssetsFilterManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultTypedFieldMapper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler';
$classes[] = 'Symfony\Component\Security\Core\Signature\SignatureHasher';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\RememberMeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
