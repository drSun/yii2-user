<?php
namespace dektrium\user\models\enums;

/**
 * Class UserStatusEnum
 * @package app\models\enums
 */
class UserStatusEnum extends \yii2mod\enum\helpers\BaseEnum
{
    const STATUS_ACTIVE = 'st_act';
    const STATUS_BAD_EMAIL = 'st_bml';
    const STATUS_DELETED = 'st_del';
    const STATUS_NON_VALIDATED = 'st_nvl';
    const STATUS_SLEEPING = 'st_slp';
    const STATUS_OTHER = 'st_oth';
    const STATUS_UNSUBSCRIBED = 'st_uns';

    protected static $list = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_BAD_EMAIL => 'Bad Email',
        self::STATUS_DELETED => 'Deleted',
        self::STATUS_NON_VALIDATED => 'Non Validated',
        self::STATUS_SLEEPING => 'Sleeping',
        self::STATUS_OTHER => 'Other',
        self::STATUS_UNSUBSCRIBED => 'Unsubscribed',
    ];
}
