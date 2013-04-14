<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Listreat\\MainBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        // items_create
        if (0 === strpos($pathinfo, '/items/create') && preg_match('#^/items/create/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ItemController::createAction',)), array('_route' => 'items_create'));
        }

        // items_update
        if (0 === strpos($pathinfo, '/items/update') && preg_match('#^/items/update/(?P<item>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ItemController::updateAction',)), array('_route' => 'items_update'));
        }

        // shops_display
        if (0 === strpos($pathinfo, '/shops/show') && preg_match('#^/shops/show/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ShopController::showAction',)), array('_route' => 'shops_display'));
        }

        // myshops
        if ($pathinfo === '/shops/myshops') {
            return array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ShopController::myshopsAction',  '_route' => 'myshops',);
        }

        // shops_list
        if ($pathinfo === '/shops/list') {
            return array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ShopController::listAction',  '_route' => 'shops_list',);
        }

        // shops_create
        if ($pathinfo === '/shops/create') {
            return array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ShopController::createAction',  '_route' => 'shops_create',);
        }

        // shops_update
        if (0 === strpos($pathinfo, '/shops/update') && preg_match('#^/shops/update/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\MainBundle\\Controller\\ShopController::updateAction',)), array('_route' => 'shops_update'));
        }

        // profil
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\MainBundle\\Controller\\UserController::indexAction',)), array('_route' => 'profil'));
        }

        // fshops
        if (0 === strpos($pathinfo, '/api/fshops') && preg_match('#^/api/fshops/(?P<user>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\FollowController::fshopsAction',)), array('_route' => 'fshops'));
        }

        // follow
        if (0 === strpos($pathinfo, '/api/follow') && preg_match('#^/api/follow/(?P<user>[^/]+)/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\FollowController::followAction',)), array('_route' => 'follow'));
        }

        // unfollow
        if (0 === strpos($pathinfo, '/api/unfollow') && preg_match('#^/api/unfollow/(?P<user>[^/]+)/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\FollowController::unfollowAction',)), array('_route' => 'unfollow'));
        }

        // follow_check
        if (0 === strpos($pathinfo, '/api/follow/check') && preg_match('#^/api/follow/check/(?P<user>[^/]+)/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\FollowController::checkAction',)), array('_route' => 'follow_check'));
        }

        // listreat_api_item_get
        if (0 === strpos($pathinfo, '/api/items/get') && preg_match('#^/api/items/get/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ItemController::getAction',)), array('_route' => 'listreat_api_item_get'));
        }

        // listreat_api_item_new
        if (0 === strpos($pathinfo, '/api/items/new') && preg_match('#^/api/items/new/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ItemController::newAction',)), array('_route' => 'listreat_api_item_new'));
        }

        // listreat_api_item_update
        if (0 === strpos($pathinfo, '/api/items/update') && preg_match('#^/api/items/update/(?P<item>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ItemController::updateAction',)), array('_route' => 'listreat_api_item_update'));
        }

        // items_delete
        if (0 === strpos($pathinfo, '/api/items/delete') && preg_match('#^/api/items/delete/(?P<item>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ItemController::deleteAction',)), array('_route' => 'items_delete'));
        }

        // listreat_api_shop_list
        if ($pathinfo === '/api/shops') {
            return array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ShopController::listAction',  '_route' => 'listreat_api_shop_list',);
        }

        // listreat_api_shop_get
        if (0 === strpos($pathinfo, '/api/shops/get') && preg_match('#^/api/shops/get/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ShopController::getAction',)), array('_route' => 'listreat_api_shop_get'));
        }

        // listreat_api_shop_new
        if (0 === strpos($pathinfo, '/api/shops/new') && preg_match('#^/api/shops/new/(?P<creator>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ShopController::newAction',)), array('_route' => 'listreat_api_shop_new'));
        }

        // listreat_api_shop_update
        if (0 === strpos($pathinfo, '/api/shops/update') && preg_match('#^/api/shops/update/(?P<shop>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\ShopController::updateAction',)), array('_route' => 'listreat_api_shop_update'));
        }

        // listreat_api_user_list
        if ($pathinfo === '/api/users') {
            return array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\UserController::listAction',  '_route' => 'listreat_api_user_list',);
        }

        // listreat_api_user_get
        if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\UserController::getAction',)), array('_route' => 'listreat_api_user_get'));
        }

        // friend
        if (0 === strpos($pathinfo, '/api/friend') && preg_match('#^/api/friend/(?P<user>[^/]+)/(?P<friend>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Listreat\\ApiBundle\\Controller\\UserController::friendAction',)), array('_route' => 'friend'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_listreat_user_user_list
            if ($pathinfo === '/admin/listreat/user/user/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_list',  '_route' => 'admin_listreat_user_user_list',);
            }

            // admin_listreat_user_user_create
            if ($pathinfo === '/admin/listreat/user/user/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_create',  '_route' => 'admin_listreat_user_user_create',);
            }

            // admin_listreat_user_user_batch
            if ($pathinfo === '/admin/listreat/user/user/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_batch',  '_route' => 'admin_listreat_user_user_batch',);
            }

            // admin_listreat_user_user_edit
            if (0 === strpos($pathinfo, '/admin/listreat/user/user') && preg_match('#^/admin/listreat/user/user/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_edit',)), array('_route' => 'admin_listreat_user_user_edit'));
            }

            // admin_listreat_user_user_delete
            if (0 === strpos($pathinfo, '/admin/listreat/user/user') && preg_match('#^/admin/listreat/user/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_delete',)), array('_route' => 'admin_listreat_user_user_delete'));
            }

            // admin_listreat_user_user_show
            if (0 === strpos($pathinfo, '/admin/listreat/user/user') && preg_match('#^/admin/listreat/user/user/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_show',)), array('_route' => 'admin_listreat_user_user_show'));
            }

            // admin_listreat_user_user_export
            if ($pathinfo === '/admin/listreat/user/user/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_listreat_user_user_export',  '_route' => 'admin_listreat_user_user_export',);
            }

            // admin_listreat_user_friend_list
            if ($pathinfo === '/admin/listreat/user/friend/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_list',  '_route' => 'admin_listreat_user_friend_list',);
            }

            // admin_listreat_user_friend_create
            if ($pathinfo === '/admin/listreat/user/friend/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_create',  '_route' => 'admin_listreat_user_friend_create',);
            }

            // admin_listreat_user_friend_batch
            if ($pathinfo === '/admin/listreat/user/friend/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_batch',  '_route' => 'admin_listreat_user_friend_batch',);
            }

            // admin_listreat_user_friend_edit
            if (0 === strpos($pathinfo, '/admin/listreat/user/friend') && preg_match('#^/admin/listreat/user/friend/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_edit',)), array('_route' => 'admin_listreat_user_friend_edit'));
            }

            // admin_listreat_user_friend_delete
            if (0 === strpos($pathinfo, '/admin/listreat/user/friend') && preg_match('#^/admin/listreat/user/friend/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_delete',)), array('_route' => 'admin_listreat_user_friend_delete'));
            }

            // admin_listreat_user_friend_show
            if (0 === strpos($pathinfo, '/admin/listreat/user/friend') && preg_match('#^/admin/listreat/user/friend/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_show',)), array('_route' => 'admin_listreat_user_friend_show'));
            }

            // admin_listreat_user_friend_export
            if ($pathinfo === '/admin/listreat/user/friend/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.friend',  '_sonata_name' => 'admin_listreat_user_friend_export',  '_route' => 'admin_listreat_user_friend_export',);
            }

            // admin_listreat_main_shop_list
            if ($pathinfo === '/admin/listreat/main/shop/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_list',  '_route' => 'admin_listreat_main_shop_list',);
            }

            // admin_listreat_main_shop_create
            if ($pathinfo === '/admin/listreat/main/shop/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_create',  '_route' => 'admin_listreat_main_shop_create',);
            }

            // admin_listreat_main_shop_batch
            if ($pathinfo === '/admin/listreat/main/shop/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_batch',  '_route' => 'admin_listreat_main_shop_batch',);
            }

            // admin_listreat_main_shop_edit
            if (0 === strpos($pathinfo, '/admin/listreat/main/shop') && preg_match('#^/admin/listreat/main/shop/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_edit',)), array('_route' => 'admin_listreat_main_shop_edit'));
            }

            // admin_listreat_main_shop_delete
            if (0 === strpos($pathinfo, '/admin/listreat/main/shop') && preg_match('#^/admin/listreat/main/shop/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_delete',)), array('_route' => 'admin_listreat_main_shop_delete'));
            }

            // admin_listreat_main_shop_show
            if (0 === strpos($pathinfo, '/admin/listreat/main/shop') && preg_match('#^/admin/listreat/main/shop/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_show',)), array('_route' => 'admin_listreat_main_shop_show'));
            }

            // admin_listreat_main_shop_export
            if ($pathinfo === '/admin/listreat/main/shop/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.shop',  '_sonata_name' => 'admin_listreat_main_shop_export',  '_route' => 'admin_listreat_main_shop_export',);
            }

            // admin_listreat_main_item_list
            if ($pathinfo === '/admin/listreat/main/item/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_list',  '_route' => 'admin_listreat_main_item_list',);
            }

            // admin_listreat_main_item_create
            if ($pathinfo === '/admin/listreat/main/item/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_create',  '_route' => 'admin_listreat_main_item_create',);
            }

            // admin_listreat_main_item_batch
            if ($pathinfo === '/admin/listreat/main/item/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_batch',  '_route' => 'admin_listreat_main_item_batch',);
            }

            // admin_listreat_main_item_edit
            if (0 === strpos($pathinfo, '/admin/listreat/main/item') && preg_match('#^/admin/listreat/main/item/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_edit',)), array('_route' => 'admin_listreat_main_item_edit'));
            }

            // admin_listreat_main_item_delete
            if (0 === strpos($pathinfo, '/admin/listreat/main/item') && preg_match('#^/admin/listreat/main/item/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_delete',)), array('_route' => 'admin_listreat_main_item_delete'));
            }

            // admin_listreat_main_item_show
            if (0 === strpos($pathinfo, '/admin/listreat/main/item') && preg_match('#^/admin/listreat/main/item/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_show',)), array('_route' => 'admin_listreat_main_item_show'));
            }

            // admin_listreat_main_item_export
            if ($pathinfo === '/admin/listreat/main/item/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.item',  '_sonata_name' => 'admin_listreat_main_item_export',  '_route' => 'admin_listreat_main_item_export',);
            }

            // admin_listreat_main_follow_list
            if ($pathinfo === '/admin/listreat/main/follow/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_list',  '_route' => 'admin_listreat_main_follow_list',);
            }

            // admin_listreat_main_follow_create
            if ($pathinfo === '/admin/listreat/main/follow/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_create',  '_route' => 'admin_listreat_main_follow_create',);
            }

            // admin_listreat_main_follow_batch
            if ($pathinfo === '/admin/listreat/main/follow/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_batch',  '_route' => 'admin_listreat_main_follow_batch',);
            }

            // admin_listreat_main_follow_edit
            if (0 === strpos($pathinfo, '/admin/listreat/main/follow') && preg_match('#^/admin/listreat/main/follow/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_edit',)), array('_route' => 'admin_listreat_main_follow_edit'));
            }

            // admin_listreat_main_follow_delete
            if (0 === strpos($pathinfo, '/admin/listreat/main/follow') && preg_match('#^/admin/listreat/main/follow/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_delete',)), array('_route' => 'admin_listreat_main_follow_delete'));
            }

            // admin_listreat_main_follow_show
            if (0 === strpos($pathinfo, '/admin/listreat/main/follow') && preg_match('#^/admin/listreat/main/follow/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_show',)), array('_route' => 'admin_listreat_main_follow_show'));
            }

            // admin_listreat_main_follow_export
            if ($pathinfo === '/admin/listreat/main/follow/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.follow',  '_sonata_name' => 'admin_listreat_main_follow_export',  '_route' => 'admin_listreat_main_follow_export',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
