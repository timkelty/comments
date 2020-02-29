<?php
namespace verbb\comments\models;

use verbb\comments\records\Flag as FlagRecord;

use Craft;
use craft\base\Model;
use craft\validators\UniqueValidator;

class Flag extends Model
{
    // Public Properties
    // =========================================================================

    public $id;
    public $commentId;
    public $userId;
    public $sessionId;
    public $lastIp;


    // Public Methods
    // =========================================================================

    public function rules()
    {
        return [
            [['id'], 'number', 'integerOnly' => true],
            [['commentId'], 'required'],
        ];
    }

}