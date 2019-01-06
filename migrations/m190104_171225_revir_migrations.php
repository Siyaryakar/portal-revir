<?php

use yii\db\Migration;

/**
 * Class m190104_171225_revir_migrations
 */
class m190104_171225_revir_migrations extends Migration
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
        echo "m190104_171225_revir_migrations cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
$tableOptions = null;
        if ($this->db->driverName === 'kouosl') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		


		$this->createTable('doktor', [
			'doktor_id' => $this->primaryKey(),
			'doktor_adi' => $this->string(10),
			'doktor_soyadi' => $this->string(10),
			'brans' => $this->string(30),
		], $tableOptions);


		$this->createTable('hasta', [
			'hasta_id' => $this->primaryKey(),
			'hasta_adi' => $this->string(10),
			'hasta_soyadi' => $this->string(10),
			'sikayet' => $this->string(40),
		], $tableOptions);


		$this->createTable('muayene', [
			'id' => $this->primaryKey(),
			'hasta_id' => $this->integer(11),
			'doktor_id' => $this->integer(11),
			'tani' => $this->string(40),
			'tedavi' => $this->string(100),
			'ilac' => $this->string(40),
			'muayene_tarihi' => $this->date(),
		], $tableOptions);

    }

    public function down()
    {
        echo "m190104_171225_revir_migrations cannot be reverted.\n";
		
$this->dropTable('doktor');
$this->dropTable('hasta');
$this->dropTable('muayene');

        return false;
    }
    
}
