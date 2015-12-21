<?php

class m150222_083255_createTableDocument extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_tipo_documento`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_tipo_documento', array(
            'id_tipo_documento' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombre_tipo_documento' => 'varchar(255) NOT NULL',
            'estado_tipo_documento' => 'tinyint(4) DEFAULT 1'
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_tipo_documento', array(
            array('nombre_tipo_documento' => 'DNI'),
            array('nombre_tipo_documento' => 'Pasaporte'),
            array('nombre_tipo_documento' => 'Carnet de Extranjeria'),
            array('nombre_tipo_documento' => 'Partida de Nacimiento'),
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_tipo_documento");
    }

}
