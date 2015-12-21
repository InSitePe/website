<?php

class m150226_233745_modifyUserTb extends CDbMigration {

 public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_user`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_user', array(
            'id_user' => 'char(32) NOT NULL PRIMARY KEY',
            'nombre_user' => 'varchar(255) NOT NULL',
            'apellido_padre_user' => 'varchar(255) NOT NULL',
            'apellido_madre_user' => 'varchar(255) NOT NULL',
            'dni_user' => 'varchar(10) NOT NULL',
            'direccion_user' => 'varchar(255)  NULL',
            'correo_user' => 'varchar(255) NOT NULL',
            'telefono_user' => 'varchar(255) NOT NULL',
            'nacimiento_user' => 'date NOT NULL',
            'foto_user' => 'varchar(50)  NULL',
            'estado_user' => 'tinyint(4) DEFAULT 1'
        ));
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_user");
    }
}
