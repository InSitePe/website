<?php

class m150301_174847_createFxEncriptaryModifacionKey extends CDbMigration {

    public function safeUp() {

        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_key`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_key', array(
            'key_proyecto' => 'int  NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'key_id' => 'varchar(255)  NOT NULL',
            'key_estado' => 'tinyint(4) DEFAULT 1'
        ));

        $insertKey = "INSERT INTO `tb_ins_sis_key` (`key_id`) VALUES ('1ns1t3');";
        $this->execute($insertKey);

        $this->execute('DROP FUNCTION IF EXISTS `fx_ins_encriptar_password`');

        $createProcedureVAlidaAcceso = "CREATE FUNCTION `fx_ins_encriptar_password`(
           _password VARCHAR(255),
           _proyecto INT (4)           
            ) 
           RETURNS char(32) CHARSET utf8 COLLATE utf8_spanish2_ci
            BEGIN
                DECLARE _encriptar_password CHAR(32);
                DECLARE _llave VARCHAR(255);

                SET _llave = (SELECT `key_id` FROM `tb_ins_sis_key` WHERE key_proyecto = _proyecto AND key_estado = 1);
                SET _encriptar_password = (SELECT LEFT(SHA1(CONCAT(_password, LEFT(MD5(_llave),8))),32));
            RETURN _encriptar_password;
            END";
        $this->execute($createProcedureVAlidaAcceso);
    }

    public function safeDown() {
        $this->execute('DROP FUNCTION IF EXISTS `fx_ins_encriptar_password`');
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_gen_key`;';
        $this->execute($verifyKeyTable);
    }

}
