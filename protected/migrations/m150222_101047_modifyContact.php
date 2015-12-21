<?php

class m150222_101047_modifyContact extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_web_contacto`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_web_contacto', array(
            'id_contacto' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombres_contacto' => 'varchar(255) NOT NULL',
            'correo_contacto' => 'varchar(255) NOT NULL',
            'mensaje_contacto' => 'text NOT NULL',
            'fecha_contacto' => 'date NOT NULL',
            'respuesta_contacto' => 'tinyint(4) DEFAULT 0',
            'estado_contacto' => 'tinyint(4) DEFAULT 1'
        ));
    }

    public function safeDown() {
        $this->dropTable("tb_ins_web_contacto");
    }
}
