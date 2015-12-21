<?php

class m150222_042213_createTableKey extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_gen_key`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_key', array(
            'key_id' => 'varchar(255)  NOT NULL PRIMARY KEY'
        ));

        $insertKey = "INSERT INTO `tb_ins_sis_key` VALUES ('1ns1t3');";
        $this->execute($insertKey);
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_key");
    }

}
