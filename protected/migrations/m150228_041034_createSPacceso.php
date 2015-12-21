<?php

class m150228_041034_createSPacceso extends CDbMigration {

    public function safeUp() {
        $this->execute('DROP PROCEDURE IF EXISTS `sp_aul_validar_acceso`');
        $this->execute('DROP PROCEDURE IF EXISTS `sp_ins_validar_acceso`');
        
        $createProcedureVAlidaAcceso = "
           CREATE PROCEDURE `sp_ins_validar_acceso`(_usuario	VARCHAR(200),
                    _password	VARCHAR(200))
            BEGIN
            -- Declaramos las variables que se utilizaran
            DECLARE
            _encriptar_password,
            _id_usuario CHAR (32);
            -- encriptamos la contraseña enviada por el usuario
            SET _encriptar_password = (SELECT	db_aulaapp.`fx_aul_encriptar_password` (_password));

            -- Inicio [1] Si el usuario existe
            IF (EXISTS (SELECT	LOG.name_login	FROM tb_ins_sis_login LOG	WHERE	LOG.name_login = _usuario)) THEN	
            -- Inicio [2] Si la contraseña del usuario es la correcta
                    IF (EXISTS (SELECT	LOG.name_login	FROM tb_ins_sis_login LOG	WHERE	LOG.clave_login = _encriptar_password)) THEN
            -- Inicio [3] Si el usuario se encuentra activo
                            IF (EXISTS (SELECT	LOG.name_login FROM tb_ins_sis_login LOG	WHERE LOG.name_login = _usuario AND LOG.clave_login = _encriptar_password AND LOG.estado_login = 1)) THEN
            -- Extraemos el ID del institucion a la cual pertenece el usaurio para verificar si se encuentra activa
                                    SET _id_usuario = (SELECT LOG.id_login FROM tb_ins_sis_login LOG WHERE LOG.name_login = _usuario AND LOG.clave_login = _encriptar_password AND LOG.estado_login = 1);

                                    SELECT	NULL AS 'error', USU.*	FROM	tb_ins_sis_user USU	WHERE	USU.id_user = _id_usuario	AND USU.estado_user = 1;

                            ELSE
                                    SELECT 'Su cuenta está deshabilitada' AS 'message',	3 AS 'error';
                            END IF;
            -- Fin [3]
                    ELSE
                            SELECT 'La contraseña es incorrecta' AS 'message',2 AS 'error';
                    END IF;
            -- Fin [2]
            ELSE
                    SELECT 'Usuario no existe' AS 'message',1 AS 'error';
            END IF;
            -- Fin [1]
            END";
        $this->execute($createProcedureVAlidaAcceso);
    }

    public function safeDown() {
        $this->execute('DROP PROCEDURE IF EXISTS `sp_ins_validar_acceso`');
    }

}
