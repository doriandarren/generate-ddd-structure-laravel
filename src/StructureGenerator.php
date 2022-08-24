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

            /********************
             * Folder Application
             ********************/
            $pathApp = $path . '/' . $bounded . '/' . $className . '/Application';
            if(!file_exists($pathApp)){
                mkdir($pathApp, 0777, true);
            }


            /********************
             * Folder Domain
             ********************/
            $pathDomain = $path . '/' . $bounded . '/' . $className . '/Domain';
            if(!is_dir($pathDomain)){
                mkdir($pathDomain, 0777, true);
            }

            // Folder Domain Exceptions
            $pathDomainExceptions = $path . '/' . $bounded . '/' . $className . '/Domain/Exceptions';
            if(!is_dir($pathDomainExceptions)){
                mkdir($pathDomainExceptions, 0777, true);
            }


            /***********************
             * Folder Infrastructure
             ***********************/

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


            echo "\n Folder created successfully \n";


        }else{
            die("Failed. Need to create folder \"src\"");
        }


    }



}
