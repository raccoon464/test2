<?php

use yii\db\Migration;

/**
 * Class m181023_135555_category
 */
class m181023_135555_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('category', [
          'id' => $this->primaryKey(),
          'title' => $this->string()

      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181023_135555_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_135555_category cannot be reverted.\n";

        return false;
    }
    */
}
