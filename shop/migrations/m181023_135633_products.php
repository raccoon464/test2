<?php

use yii\db\Migration;

/**
 * Class m181023_135633_products
 */
class m181023_135633_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('products', [
          'id' => $this->primaryKey(),
          'title' => $this->string(),
          'price' => $this->integer(),
          'discription' => $this->text(),
          'data' => $this->date(),
          'img' => $this->string(),
          'viewed' => $this->integer(),
          'status' => $this->integer(),
          'category_id' => $this->integer(),
      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181023_135633_products cannot be reverted.\n";

        return false;
    }

}
