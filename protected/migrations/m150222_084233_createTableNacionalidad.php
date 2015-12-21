<?php

class m150222_084233_createTableNacionalidad extends CDbMigration {

    public function safeUp() {
        $verifyKeyTable = 'DROP TABLE IF EXISTS `tb_ins_sis_nacionalidad`;';
        $this->execute($verifyKeyTable);

        $this->createTable('tb_ins_sis_nacionalidad', array(
            'id_nacionalidad' => 'int(11) UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY',
            'nombre_pais' => 'varchar(255) NOT NULL',
            'nombre_nacionalidad' => 'varchar(255) NOT NULL',
            'estado_nacionalidad' => 'tinyint(4) DEFAULT 1'
        ));

        $builder = Yii::app()->db->schema->commandBuilder;
        $command = $builder->createMultipleInsertCommand('tb_ins_sis_nacionalidad', array(
            array('nombre_pais' => 'Alemania', 'nombre_nacionalidad' => 'Alemana'),
            array('nombre_pais' => 'Argentina', 'nombre_nacionalidad' => 'Argentina'),
            array('nombre_pais' => 'Bolivia', 'nombre_nacionalidad' => 'Boliviana'),
            array('nombre_pais' => 'Brasil', 'nombre_nacionalidad' => 'Brasileña'),
            array('nombre_pais' => 'Canadá', 'nombre_nacionalidad' => 'Canadiense'),
            array('nombre_pais' => 'Chile', 'nombre_nacionalidad' => 'Chilena'),
            array('nombre_pais' => 'China', 'nombre_nacionalidad' => 'China'),
            array('nombre_pais' => 'Colombia', 'nombre_nacionalidad' => 'Colombiana'),
            array('nombre_pais' => 'Costa Rica', 'nombre_nacionalidad' => 'Costarricense'),
            array('nombre_pais' => 'Cuba', 'nombre_nacionalidad' => 'Cubana'),
            array('nombre_pais' => 'Ecuador', 'nombre_nacionalidad' => 'Ecuatoriana'),
            array('nombre_pais' => 'El Salvador', 'nombre_nacionalidad' => 'Salvadoreña'),
            array('nombre_pais' => 'España', 'nombre_nacionalidad' => 'Española'),
            array('nombre_pais' => 'Francia', 'nombre_nacionalidad' => 'Francesa'),
            array('nombre_pais' => 'Guatemala', 'nombre_nacionalidad' => 'Guatemalteca'),
            array('nombre_pais' => 'Honduras', 'nombre_nacionalidad' => 'Hondureña'),
            array('nombre_pais' => 'India', 'nombre_nacionalidad' => 'India'),
            array('nombre_pais' => 'Inglaterra', 'nombre_nacionalidad' => 'Inglesa'),
            array('nombre_pais' => 'Italia', 'nombre_nacionalidad' => 'Italiana'),
            array('nombre_pais' => 'Japón', 'nombre_nacionalidad' => 'Japonesa'),
            array('nombre_pais' => 'Los Estados Unidos', 'nombre_nacionalidad' => 'Americana'),
            array('nombre_pais' => 'México', 'nombre_nacionalidad' => 'Mexicana'),
            array('nombre_pais' => 'Nicaragua', 'nombre_nacionalidad' => 'Nicaragüense'),
            array('nombre_pais' => 'Panamá', 'nombre_nacionalidad' => 'Panameña'),
            array('nombre_pais' => 'Paraguay', 'nombre_nacionalidad' => 'Paraguaya'),
            array('nombre_pais' => 'Perú', 'nombre_nacionalidad' => 'Peruana'),
            array('nombre_pais' => 'Portugal', 'nombre_nacionalidad' => 'Portuguesa'),
            array('nombre_pais' => 'Puerto Rico', 'nombre_nacionalidad' => 'Puertorriqueña'),
            array('nombre_pais' => 'República Dominicana', 'nombre_nacionalidad' => 'Dominicana'),
            array('nombre_pais' => 'Rusia', 'nombre_nacionalidad' => 'Rusa'),
            array('nombre_pais' => 'Uruguay', 'nombre_nacionalidad' => 'Uruguaya'),
            array('nombre_pais' => 'Venezuela', 'nombre_nacionalidad' => 'Venezolana')
        ));
        $command->execute();
    }

    public function safeDown() {
        $this->dropTable("tb_ins_sis_nacionalidad");
    }

}
