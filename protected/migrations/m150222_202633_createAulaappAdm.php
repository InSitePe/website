<?php

class m150222_202633_createAulaappAdm extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_aul_institucion`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_aul_institucion', array(
            'id_institucion' => 'char(32) NOT NULL PRIMARY KEY',
            'nombre_institucion' => 'varchar(255) NOT NULL',
            'estado_institucion' => 'tinyint(4) DEFAULT 1'
        ));

    }

    public function safeDown() {
        $this->dropTable("tb_ins_aul_institucion");
    }

}
