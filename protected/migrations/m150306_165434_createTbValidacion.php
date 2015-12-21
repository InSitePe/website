<?php

class m150306_165434_createTbValidacion extends CDbMigration {

    public function safeUp() {
        $this->execute('DROP TABLE IF EXISTS `tb_ins_sis_validacion`;');

        $this->createTable('tb_ins_sis_validacion', array(
            "codigo_validacion" => "INT NOT NULL AUTO_INCREMENT primary key",
            "descripcion" => "VARCHAR(100) NULL",
            "estado" => "int NULL DEFAULT 1",
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_validacion', array(
            array('descripcion' => 'OBLIGATORIO'),
            array('descripcion' => 'EXACTO'),
            array('descripcion' => 'LONGITUD'),
            array('descripcion' => 'MULTIPLE'),
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_validacion");
    }

}
