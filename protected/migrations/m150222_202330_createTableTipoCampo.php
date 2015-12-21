<?php

class m150222_202330_createTableTipoCampo extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_tipo_campo`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_tipo_campo', array(
            'id_campo' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombre_campo' => 'varchar(255) NOT NULL',
            'estado_campo' => 'tinyint(4) DEFAULT 1'
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_tipo_campo', array(
            array('nombre_campo' => 'input'),
            array('nombre_campo' => 'radio'),
            array('nombre_campo' => 'combobox'),
            array('nombre_campo' => 'textarea'),
            array('nombre_campo' => 'checkbox'),
            array('nombre_campo' => 'date'),
            array('nombre_campo' => 'time'),
            array('nombre_campo' => 'file'),
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_tipo_campo");
    }

}
