<?php

use yii\db\Migration;

/**
 * Class m181015_200007_update_comment_table
 */
class m181015_200007_update_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-post-article_id',
            'comment',
            'article_id'
        );

        $this->addForeignKey(
            'fk-post-article_id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181015_200007_update_comment_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181015_200007_update_comment_table cannot be reverted.\n";

        return false;
    }
    */
}
