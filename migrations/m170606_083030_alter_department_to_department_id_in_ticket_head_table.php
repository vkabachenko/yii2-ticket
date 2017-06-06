<?php

use yii\db\Migration;

class m170606_083030_alter_department_to_department_id_in_ticket_head_table extends Migration
{
    public function up()
    {
        $this->dropColumn('ticket_head', 'department');
        $this->addColumn('ticket_head','department_id','integer');
        $this->addForeignKey('fk-ticket_head_department_id','ticket_head','department_id','ticket_department','id','SET NULL');
    }

    public function down()
    {
        $this->dropForeignKey('fk-ticket_head_department_id', 'ticket_head');
        $this->dropColumn('ticket_head', 'department_id');
        $this->addColumn('ticket_head','department','string');
    }

}
