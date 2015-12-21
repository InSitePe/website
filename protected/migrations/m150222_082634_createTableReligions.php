<?php

class m150222_082634_createTableReligions extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_religion`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_religion', array(
            'id_religion' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombre_religion' => 'varchar(255) NOT NULL',
            'estado_religion' => 'tinyint(4) DEFAULT 1'
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_religion', array(
            array('nombre_religion' => 'Católico'),
            array('nombre_religion' => 'Adventista'),
            array('nombre_religion' => 'Evangelico'),
            array('nombre_religion' => 'Mormon'),
            array('nombre_religion' => 'Testigo de Jehová'),
            array('nombre_religion' => 'Pentecostes'),
            array('nombre_religion' => 'Pentecostales'),
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_religion");
    }

}
