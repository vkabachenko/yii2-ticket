<?php

namespace ricco\ticket\models;;

/**
 * This is the model class for table "ticket_department".
 *
 * @property integer $id
 * @property string $title
 */
class TicketDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    public static function departmentList()
    {
        return self::find()->select(['title', 'id'])->orderBy('title')->indexBy('id')->column();
    }
}
