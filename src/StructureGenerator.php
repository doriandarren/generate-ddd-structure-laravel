<?php

namespace Infinito\GenerateDDDStructure;

use Infinito\GenerateDDDStructure\Helpers\GlobalSetting;


class StructureGenerator
{


    public function create($bounded, $className)
    {

        $dir = dirname(__FILE__,GlobalSetting::VALUE_DIRNAME_PROD);

        $path = $dir . "/" . "src";

        if(is_dir($path)){


            $pathApp = $path . '/' . $bounded . '/' . $className . '/Application';

            echo $pathApp;

            if(!file_exists($pathApp)){
                mkdir($pathApp, 0777, true);
            }



            $pathDomain = $path . '/' . $bounded . '/' . $className . '/Domain';
            if(!is_dir($pathDomain)){
                mkdir($pathDomain, 0777, true);
            }

            $pathDomainExceptions = $path . '/' . $bounded . '/' . $className . '/Domain/Exceptions';
            if(!is_dir($pathDomainExceptions)){
                mkdir($pathDomainExceptions, 0777, true);
            }






            $pathInf = $path . '/' . $bounded . '/' . $className . '/Infrastructure';
            if(!is_dir($pathInf)){
                mkdir($pathInf, 0777, true);
            }



            $pathInfContr = $path . '/' . $bounded . '/' . $className . '/Infrastructure/Controllers';
            if(!is_dir($pathInfContr)){
                mkdir($pathInfContr, 0777, true);
            }

            $pathInfRoute = $path . '/' . $bounded . '/' . $className . '/Infrastructure/Routes';
            if(!is_dir($pathInfRoute)){
                mkdir($pathInfRoute, 0777, true);
            }


            $pathInfServ = $path . '/' . $bounded . '/' . $className . '/Infrastructure/Services';
            if(!is_dir($pathInfServ)){
                mkdir($pathInfServ, 0777, true);
            }




        }else{
            die("Fallo al verificar carpetas");
        }


    }



}
