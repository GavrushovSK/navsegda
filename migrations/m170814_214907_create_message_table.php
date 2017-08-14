<?php

use yii\db\Migration;

/**
 * Handles the creation of table `message`.
 */
class m170814_214907_create_message_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey(),
            'm_title' => $this->string(45)->notNull(),
            'm_text' => $this->text()->notNull(),
            'm_date_registration' => $this->dateTime()->notNull(),
            'm_date_upgrate' => $this->dateTime()->notNull(),
            'm_status' => $this->integer()->notNull()->defaultValue(0),
            'rel_user_id' => $this->integer()->notNull(),

        ]);
        $this->addForeignKey('message_user_id', 'message', 'rel_user_id', 'user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(message_user_id, message);
        $this->dropTable('message');
    }
}
