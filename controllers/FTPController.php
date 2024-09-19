<?php

namespace Controllers;

use Exception;
use Model\ActiveRecord;
use MVC\Router;
use phpseclib3\Net\SFTP;


class FTPController
{
    public static function subir (): void
    {
        try {
            $sftp = new SFTP('ftp', 22);
            $sftp->login('ftpuser', 'password');

            echo "CONECTADO EXITOSAMENTE ";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
