<?php

use yii\db\Migration;

class m170618_093305_new_column_link_table_ticket_head extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%ticket_head}}','link','string');

    }

    public function safeDown()
    {
        $this->dropColumn('{{%ticket_head}}','link');
    }

}
