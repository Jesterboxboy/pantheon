<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.9.1)
# source: proto/frey.proto

declare(strict_types=1);

namespace Common;

use Google\Protobuf\Internal\Message;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Twirp\Context;
use Twirp\Error;
use Twirp\ErrorCode;

/**
 * @internal FreyAbstractClient provides abstraction for JsonClient and Client (default).
 * Note that you MUST NOT use it directly! It is an internal implementation detail that is not
 * covered by backward compatibility promise. The only thing that will and should remain backward
 * compatible is the two clients.
 */
abstract class FreyAbstractClient
{
    /**
     * @var server
     */
    protected $addr;

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    /**
     * @var string
     */
    protected $prefix;

    public function __construct(
        $addr,
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactory = null,
        StreamFactoryInterface $streamFactory = null,
        string $prefix = '/twirp'
    ) {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        if ($requestFactory === null) {
            $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        }

        if ($streamFactory === null) {
            $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        $this->addr = $this->urlBase($addr);
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->prefix = ltrim(rtrim($prefix, '/'), '/');
    }

    /**
     * {@inheritdoc}
     */
    public function RequestRegistration(array $ctx, \Common\AuthRequestRegistrationPayload $in): \Common\AuthRequestRegistrationResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'RequestRegistration');

        $out = new \Common\AuthRequestRegistrationResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/RequestRegistration';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/RequestRegistration';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function ApproveRegistration(array $ctx, \Common\AuthApproveRegistrationPayload $in): \Common\AuthApproveRegistrationResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'ApproveRegistration');

        $out = new \Common\AuthApproveRegistrationResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/ApproveRegistration';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/ApproveRegistration';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function Authorize(array $ctx, \Common\AuthAuthorizePayload $in): \Common\AuthAuthorizeResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'Authorize');

        $out = new \Common\AuthAuthorizeResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/Authorize';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/Authorize';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function QuickAuthorize(array $ctx, \Common\AuthQuickAuthorizePayload $in): \Common\AuthQuickAuthorizeResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'QuickAuthorize');

        $out = new \Common\AuthQuickAuthorizeResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/QuickAuthorize';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/QuickAuthorize';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function Me(array $ctx, \Common\AuthMePayload $in): \Common\AuthMeResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'Me');

        $out = new \Common\AuthMeResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/Me';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/Me';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function DepersonalizeAccount(array $ctx, \Common\DepersonalizePayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'DepersonalizeAccount');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/DepersonalizeAccount';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/DepersonalizeAccount';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function ChangePassword(array $ctx, \Common\AuthChangePasswordPayload $in): \Common\AuthChangePasswordResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'ChangePassword');

        $out = new \Common\AuthChangePasswordResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/ChangePassword';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/ChangePassword';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function RequestResetPassword(array $ctx, \Common\AuthRequestResetPasswordPayload $in): \Common\AuthRequestResetPasswordResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'RequestResetPassword');

        $out = new \Common\AuthRequestResetPasswordResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/RequestResetPassword';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/RequestResetPassword';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function ApproveResetPassword(array $ctx, \Common\AuthApproveResetPasswordPayload $in): \Common\AuthApproveResetPasswordResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'ApproveResetPassword');

        $out = new \Common\AuthApproveResetPasswordResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/ApproveResetPassword';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/ApproveResetPassword';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetAccessRules(array $ctx, \Common\AccessGetAccessRulesPayload $in): \Common\AccessGetAccessRulesResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetAccessRules');

        $out = new \Common\AccessGetAccessRulesResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetAccessRules';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetAccessRules';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetRuleValue(array $ctx, \Common\AccessGetRuleValuePayload $in): \Common\AccessGetRuleValueResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetRuleValue');

        $out = new \Common\AccessGetRuleValueResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetRuleValue';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetRuleValue';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdatePersonalInfo(array $ctx, \Common\PersonsUpdatePersonalInfoPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'UpdatePersonalInfo');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/UpdatePersonalInfo';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/UpdatePersonalInfo';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetPersonalInfo(array $ctx, \Common\PersonsGetPersonalInfoPayload $in): \Common\PersonsGetPersonalInfoResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetPersonalInfo');

        $out = new \Common\PersonsGetPersonalInfoResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetPersonalInfo';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetPersonalInfo';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function FindByTenhouIds(array $ctx, \Common\PersonsFindByTenhouIdsPayload $in): \Common\PersonsFindByTenhouIdsResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'FindByTenhouIds');

        $out = new \Common\PersonsFindByTenhouIdsResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/FindByTenhouIds';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/FindByTenhouIds';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function FindByMajsoulAccountId(array $ctx, \Common\PersonsFindByMajsoulIdsPayload $in): \Common\PersonsFindByTenhouIdsResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'FindByMajsoulAccountId');

        $out = new \Common\PersonsFindByTenhouIdsResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/FindByMajsoulAccountId';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/FindByMajsoulAccountId';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function FindByTitle(array $ctx, \Common\PersonsFindByTitlePayload $in): \Common\PersonsFindByTitleResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'FindByTitle');

        $out = new \Common\PersonsFindByTitleResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/FindByTitle';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/FindByTitle';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetGroups(array $ctx, \Common\PersonsGetGroupsPayload $in): \Common\PersonsGetGroupsResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetGroups');

        $out = new \Common\PersonsGetGroupsResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetGroups';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetGroups';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetEventAdmins(array $ctx, \Common\AccessGetEventAdminsPayload $in): \Common\AccessGetEventAdminsResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetEventAdmins');

        $out = new \Common\AccessGetEventAdminsResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetEventAdmins';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetEventAdmins';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetSuperadminFlag(array $ctx, \Common\AccessGetSuperadminFlagPayload $in): \Common\AccessGetSuperadminFlagResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetSuperadminFlag');

        $out = new \Common\AccessGetSuperadminFlagResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetSuperadminFlag';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetSuperadminFlag';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetOwnedEventIds(array $ctx, \Common\AccessGetOwnedEventIdsPayload $in): \Common\AccessGetOwnedEventIdsResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetOwnedEventIds');

        $out = new \Common\AccessGetOwnedEventIdsResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetOwnedEventIds';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetOwnedEventIds';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetRulesList(array $ctx, \Common\AccessGetRulesListPayload $in): \Common\AccessGetRulesListResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetRulesList');

        $out = new \Common\AccessGetRulesListResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetRulesList';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetRulesList';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetAllEventRules(array $ctx, \Common\AccessGetAllEventRulesPayload $in): \Common\AccessGetAllEventRulesResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetAllEventRules');

        $out = new \Common\AccessGetAllEventRulesResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetAllEventRules';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetAllEventRules';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetPersonAccess(array $ctx, \Common\AccessGetPersonAccessPayload $in): \Common\AccessGetPersonAccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetPersonAccess');

        $out = new \Common\AccessGetPersonAccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetPersonAccess';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetPersonAccess';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetGroupAccess(array $ctx, \Common\AccessGetGroupAccessPayload $in): \Common\AccessGetGroupAccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetGroupAccess');

        $out = new \Common\AccessGetGroupAccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetGroupAccess';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetGroupAccess';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetAllPersonAccess(array $ctx, \Common\AccessGetAllPersonAccessPayload $in): \Common\AccessGetAllPersonAccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetAllPersonAccess');

        $out = new \Common\AccessGetAllPersonAccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetAllPersonAccess';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetAllPersonAccess';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetAllGroupAccess(array $ctx, \Common\AccessGetAllGroupAccessPayload $in): \Common\AccessGetAllGroupAccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetAllGroupAccess');

        $out = new \Common\AccessGetAllGroupAccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetAllGroupAccess';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetAllGroupAccess';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function AddRuleForPerson(array $ctx, \Common\AccessAddRuleForPersonPayload $in): \Common\AccessAddRuleForPersonResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'AddRuleForPerson');

        $out = new \Common\AccessAddRuleForPersonResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/AddRuleForPerson';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/AddRuleForPerson';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function AddRuleForGroup(array $ctx, \Common\AccessAddRuleForGroupPayload $in): \Common\AccessAddRuleForGroupResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'AddRuleForGroup');

        $out = new \Common\AccessAddRuleForGroupResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/AddRuleForGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/AddRuleForGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdateRuleForPerson(array $ctx, \Common\AccessUpdateRuleForPersonPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'UpdateRuleForPerson');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/UpdateRuleForPerson';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/UpdateRuleForPerson';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdateRuleForGroup(array $ctx, \Common\AccessUpdateRuleForGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'UpdateRuleForGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/UpdateRuleForGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/UpdateRuleForGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function DeleteRuleForPerson(array $ctx, \Common\AccessDeleteRuleForPersonPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'DeleteRuleForPerson');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/DeleteRuleForPerson';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/DeleteRuleForPerson';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function DeleteRuleForGroup(array $ctx, \Common\AccessDeleteRuleForGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'DeleteRuleForGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/DeleteRuleForGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/DeleteRuleForGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function ClearAccessCache(array $ctx, \Common\AccessClearAccessCachePayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'ClearAccessCache');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/ClearAccessCache';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/ClearAccessCache';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function CreateAccount(array $ctx, \Common\PersonsCreateAccountPayload $in): \Common\PersonsCreateAccountResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'CreateAccount');

        $out = new \Common\PersonsCreateAccountResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/CreateAccount';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/CreateAccount';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function CreateGroup(array $ctx, \Common\PersonsCreateGroupPayload $in): \Common\PersonsCreateGroupResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'CreateGroup');

        $out = new \Common\PersonsCreateGroupResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/CreateGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/CreateGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function UpdateGroup(array $ctx, \Common\PersonsUpdateGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'UpdateGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/UpdateGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/UpdateGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function DeleteGroup(array $ctx, \Common\PersonsDeleteGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'DeleteGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/DeleteGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/DeleteGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function AddPersonToGroup(array $ctx, \Common\PersonsAddPersonToGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'AddPersonToGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/AddPersonToGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/AddPersonToGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function RemovePersonFromGroup(array $ctx, \Common\PersonsRemovePersonFromGroupPayload $in): \Common\GenericSuccessResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'RemovePersonFromGroup');

        $out = new \Common\GenericSuccessResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/RemovePersonFromGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/RemovePersonFromGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetPersonsOfGroup(array $ctx, \Common\PersonsGetPersonsOfGroupPayload $in): \Common\PersonsGetPersonsOfGroupResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetPersonsOfGroup');

        $out = new \Common\PersonsGetPersonsOfGroupResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetPersonsOfGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetPersonsOfGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function GetGroupsOfPerson(array $ctx, \Common\PersonsGetGroupsOfPersonPayload $in): \Common\PersonsGetGroupsOfPersonResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'GetGroupsOfPerson');

        $out = new \Common\PersonsGetGroupsOfPersonResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/GetGroupsOfPerson';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/GetGroupsOfPerson';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function AddSystemWideRuleForPerson(array $ctx, \Common\AccessAddSystemWideRuleForPersonPayload $in): \Common\AccessAddSystemWideRuleForPersonResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'AddSystemWideRuleForPerson');

        $out = new \Common\AccessAddSystemWideRuleForPersonResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/AddSystemWideRuleForPerson';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/AddSystemWideRuleForPerson';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function AddSystemWideRuleForGroup(array $ctx, \Common\AccessAddSystemWideRuleForGroupPayload $in): \Common\AccessAddSystemWideRuleForGroupResponse
    {
        $ctx = Context::withPackageName($ctx, 'common');
        $ctx = Context::withServiceName($ctx, 'Frey');
        $ctx = Context::withMethodName($ctx, 'AddSystemWideRuleForGroup');

        $out = new \Common\AccessAddSystemWideRuleForGroupResponse();

        $url = $this->addr;
        if (empty($this->prefix)) {
            $url = $url.'/common.Frey/AddSystemWideRuleForGroup';
        } else {
            $url = $url.'/'.$this->prefix.'/common.Frey/AddSystemWideRuleForGroup';
        }

        $this->doRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * Common code to make a request to the remote twirp service.
     */
    abstract protected function doRequest(array $ctx, string $url, Message $in, Message $out): void;

    /**
     * Makes an HTTP request and adds common headers.
     */
    protected function newRequest(array $ctx, string $url, string $reqBody, string $contentType): RequestInterface
    {
        $body = $this->streamFactory->createStream($reqBody);

        $req = $this->requestFactory->createRequest('POST', $url);

        $headers = Context::httpRequestHeaders($ctx);

        foreach ($headers as $key => $value) {
            $req = $req->withHeader($key, $value);
        }

        return $req
            ->withBody($body)
            ->withHeader('Accept', $contentType)
            ->withHeader('Content-Type', $contentType)
            ->withHeader('Twirp-Version', 'v8.1.0')
            ->withHeader('TwirPHP-Version', '0.9.1')
        ;
    }

    /**
     * Adds consistency to errors generated in the client.
     */
    protected function clientError(string $desc, \Throwable $e): TwirpError
    {
        return TwirpError::newError(ErrorCode::Internal, sprintf('%s: %s', $desc, $e->getMessage()), $e);
    }

    /**
     * Builds a twirp Error from a non-200 HTTP response.
     * If the response has a valid serialized Twirp error, then it's returned.
     * If not, the response status code is used to generate a similar twirp
     * error. {@see self::twirpErrorFromIntermediary} for more info on intermediary errors.
     */
    protected function errorFromResponse(ResponseInterface $resp): TwirpError
    {
        $statusCode = $resp->getStatusCode();
        $statusText = $resp->getReasonPhrase();

        if ($this->isHttpRedirect($statusCode)) {
            // Unexpected redirect: it must be an error from an intermediary.
            // Twirp clients don't follow redirects automatically, Twirp only handles
            // POST requests, redirects should only happen on GET and HEAD requests.
            $location = $resp->getHeaderLine('Location');
            $msg = sprintf(
                'unexpected HTTP status code %d "%s" received, Location="%s"',
                $statusCode,
                $statusText,
                $location
            );

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $location);
        }

        $body = (string)$resp->getBody();

        $rawError = json_decode($body, true);
        if ($rawError === null) {
            $msg = sprintf('error from intermediary with HTTP status code %d "%s"', $statusCode, $statusText);

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $body);
        }

        $rawError = $rawError + ['code' => '', 'msg' => '', 'meta' => []];

        if (ErrorCode::isValid($rawError['code']) === false) {
            $msg = 'invalid type returned from server error response: '.$rawError['code'];

            return TwirpError::newError(ErrorCode::Internal, $msg);
        }

        $error = TwirpError::newError($rawError['code'], $rawError['msg']);

        foreach ($rawError['meta'] as $key => $value) {
           $error->setMeta($key, $value);
        }

        return $error;
    }

    /**
     * Maps HTTP errors from non-twirp sources to twirp errors.
     * The mapping is similar to gRPC: https://github.com/grpc/grpc/blob/master/doc/http-grpc-status-mapping.md.
     * Returned twirp Errors have some additional metadata for inspection.
     */
    protected function twirpErrorFromIntermediary(int $status, string $msg, string $bodyOrLocation): TwirpError
    {
        if ($this->isHttpRedirect($status)) {
            $code = ErrorCode::Internal;
        } else {
            switch ($status) {
                case 400: // Bad Request
                    $code = ErrorCode::Internal;
                    break;
                case 401: // Unauthorized
                    $code = ErrorCode::Unauthenticated;
                    break;
                case 403: // Forbidden
                    $code = ErrorCode::PermissionDenied;
                    break;
                case 404: // Not Found
                    $code = ErrorCode::BadRoute;
                    break;
                case 429: // Too Many Requests
                    $code = ErrorCode::ResourceExhausted;
                    break;
                case 502: // Bad Gateway
                case 503: // Service Unavailable
                case 504: // Gateway Timeout
                    $code = ErrorCode::Unavailable;
                    break;
                default: // All other codes
                    $code = ErrorCode::Unknown;
                    break;
            }
        }

        $error = TwirpError::newError($code, $msg);
        $error->setMeta('http_error_from_intermediary', 'true');
        $error->setMeta('status_code', (string)$status);

        if ($this->isHttpRedirect($status)) {
            $error->setMeta('location', $bodyOrLocation);
        } else {
            $error->setMeta('body', $bodyOrLocation);
        }

        return $error;
    }

    protected function isHttpRedirect(int $status): bool
    {
        return $status >= 300 && $status <= 399;
    }

    protected function urlBase(string $addr): string
    {
        $scheme = parse_url($addr, PHP_URL_SCHEME);

        // If parse_url fails, return the addr unchanged.
        if ($scheme === false) {
            return $addr;
        }

        // If the addr does not specify a scheme, default to http.
        if (empty($scheme)) {
            $addr = 'http://'.ltrim($addr, ':/');
        }

        return $addr;
    }
}
