<?php

class m150224_230918_createTableLogin extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_login`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_login', array(
            'id_login' => 'char(32) NOT NULL PRIMARY KEY',
            'name_login' => 'varchar(255) NOT NULL',
            'clave_login' => 'varchar(255) NOT NULL',
            'estado_login' => 'tinyint(4) DEFAULT 1'
        ));
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_login");
    }
}
