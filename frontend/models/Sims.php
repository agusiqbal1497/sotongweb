<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%sims}}".
 *
 * @property int $id
 * @property string|null $iccid
 * @property string|null $imsi
 * @property string $msisdn
 * @property string|null $device
 * @property int|null $mccmnc
 * @property int|null $stu
 * @property string|null $slot
 * @property int $active
 * @property string|null $lastmessage
 * @property string|null $expiry
 * @property string|null $bill
 * @property int $messages
 * @property string|null $last_sent
 * @property string|null $last_received
 * @property string|null $last_update
 */
class sims extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sims}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['msisdn', 'messages'], 'required'],
            [['mccmnc', 'stu', 'active', 'messages'], 'integer'],
            [['lastmessage', 'expiry', 'last_sent', 'last_received', 'last_update'], 'safe'],
            [['iccid'], 'string', 'max' => 32],
            [['imsi', 'msisdn', 'device'], 'string', 'max' => 20],
            [['slot'], 'string', 'max' => 5],
            [['bill'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iccid' => 'Iccid',
            'imsi' => 'Imsi',
            'msisdn' => 'Msisdn',
            'device' => 'Device',
            'mccmnc' => 'Mccmnc',
            'stu' => 'Stu',
            'slot' => 'Slot',
            'active' => 'Active',
            'lastmessage' => 'Lastmessage',
            'expiry' => 'Expiry',
            'bill' => 'Bill',
            'messages' => 'Messages',
            'last_sent' => 'Last Sent',
            'last_received' => 'Last Received',
            'last_update' => 'Last Update',
        ];
    }
}
