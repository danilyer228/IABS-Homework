<?php

use yii\db\Migration;

/**
 * Handles the creation of table `breed`.
 */
class m180326_135617_create_breed_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('breed', [
            'id' => $this->primaryKey(),
            'breed' => $this->string(),
            'description' => $this->string(),
            'img' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('breed');
    }
}
