<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m240628_162311_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone_no' => $this->integer(13)->notNull(),
            'salary' => $this->decimal(10, 2)->notNull(),
            'dob' => $this->date()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}
