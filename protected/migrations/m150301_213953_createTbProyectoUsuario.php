<?php

class m150301_213953_createTbProyectoUsuario extends CDbMigration {

    public function safeUp() {
        $this->execute('DROP TABLE IF EXISTS `tb_ins_sis_proyectos`;');
        $this->execute('DROP TABLE IF EXISTS `tb_ins_sis_proyectos_usuarios`;');

        $this->createTable('tb_ins_sis_proyectos', array(
            'proyecto_id' => 'int  NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'nombre_proyecto' => 'varchar(255)  NOT NULL',
            'f_inicio_proyecto' => 'date',
            'f_produccion_proyecto' => 'date',
            'estado_proyecto' => 'tinyint(4) DEFAULT 1'
        ));
        $this->createTable('tb_ins_sis_proyectos_usuarios', array(
            'proyusu_id' => 'int  NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'f_inicio_proyusu' => 'date',
            'estado_proyusu' => 'tinyint(4) DEFAULT 1',
            'key_proyecto' => 'int  NOT NULL',
            'id_user' => 'char(32) NOT NULL',
        ));
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_proyectos");
        $this->dropTable("tb_ins_sis_proyectos_usuarios");
    }

}
