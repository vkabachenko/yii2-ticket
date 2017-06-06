<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 */
class m170606_082653_create_department_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('ticket_department', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ticket_department');
    }
}
