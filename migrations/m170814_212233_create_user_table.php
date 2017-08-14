<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170814_212233_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            'surname' => $this->string(45)->notNull(),
            'patronymic' => $this->string(45)->notNull(),
            'password' => $this->string(100)->notNull(),
            'date_registration' => $this->dateTime()->notNull(),
            'date_update' => $this->dateTime()->notNull(),
            'user_role' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
