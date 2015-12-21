<?php

class m150222_083543_createTableSexo extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_sexo`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_sexo', array(
            'id_sexo' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombre_sexo' => 'varchar(255) NOT NULL',
            'estado_sexo' => 'tinyint(4) DEFAULT 1'
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_sexo', array(
            array('nombre_sexo' => 'Hombre'),
            array('nombre_sexo' => 'Mujer'),
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_sexo");
    }

}
