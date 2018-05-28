<?php

use yii\db\Migration;

/**
 * Class m180525_211224_weather
 */
class m180525_211224_weather extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180525_211224_weather cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180525_211224_weather cannot be reverted.\n";

        return false;
    }
    */
}
