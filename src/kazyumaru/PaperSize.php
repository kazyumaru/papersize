<?php
namespace kazyumaru;
mb_internal_encoding('UTF-8');
class PaperSize{
    public function __construct(){
    }
    public function set($paper,$orientation="p",$unit="mm"):object{
        $size = new \stdClass();
        switch($paper){
            case 'B10':
            case 'b10':
                $size->width = 32;
                $size->height = 45;
                $size->size = "B10";
                break;
            case 'B9':
            case 'b9':
                $size->width = 45;
                $size->height = 64;
                $size->size = "B9";
                break;
            case 'B8':
            case 'b8':
                $size->width = 64;
                $size->height = 91;
                $size->size = "B8";
                break;
            case 'B7':
            case 'b7':
                $size->width = 91;
                $size->height = 128;
                $size->size = "B7";
                break;
            case 'B6':
            case 'b6':
                $size->width = 128;
                $size->height = 182;
                $size->size = "B6";
                break;
            case 'JISB5':
            case 'jisb5':
            case 'B5':
            case 'b5':
                $size->width = 182;
                $size->height = 257;
                $size->size = "B5";
                break;
            case 'ISOB5':
            case 'isob5':
                $size->width = 176;
                $size->height = 250;
                $size->size = "ISOB5";
                break;
            case 'B4':
            case 'b4':
                $size->width = 257;
                $size->height = 364;
                $size->size = "B4";
                break;
            case 'B3':
            case 'b3':
                $size->width = 364;
                $size->height = 515;
                $size->size = "B3";
                break;
            case 'B2':
            case 'b2':
                $size->width = 515;
                $size->height = 728;
                $size->size = "B2";
                break;
            case 'B1':
            case 'b1':
                $size->width = 728;
                $size->height = 1030;
                $size->size = "B1";
                break;
            case 'B0':
            case 'b0':
                $size->width = 1030;
                $size->height = 1456;
                $size->size = "B0";
                break;
            case 'A10':
            case 'a10':
                $size->width = 26;
                $size->height = 37;
                $size->size = "A10";
                break;
            case 'A9':
            case 'a9':
                $size->width = 37;
                $size->height = 52;
                $size->size = "A9";
                break;
            case 'A8':
            case 'a8':
                $size->width = 52;
                $size->height = 74;
                $size->size = "A8";
                break;
            case 'A7':
            case 'a7':
                $size->width = 74;
                $size->height = 105;
                $size->size = "A7";
                break;
            case 'A6':
            case 'a6':
                $size->width = 105;
                $size->height = 148;
                $size->size = "A6";
                break;
            case 'A5':
            case 'a5':
                $size->width = 148;
                $size->height = 210;
                $size->size = "A5";
                break;
            case 'A4':
            case 'a4':
                $size->width = 210;
                $size->height = 297;
                $size->size = "A4";
                break;
            case 'A3':
            case 'a3':
                $size->width = 297;
                $size->height = 420;
                $size->size = "A3";
                break;
            case 'A2':
            case 'a2':
                $size->width = 420;
                $size->height = 594;
                $size->size = "A2";
                break;
            case 'A1':
            case 'a1':
                $size->width = 594;
                $size->height = 841;
                $size->size = "A1";
                break;
            case 'A0':
            case 'a0':
                $size->width = 841;
                $size->height = 1189;
                $size->size = "A0";
                break;
            case 'letter':
            case 'Letter':
            case 'LETTER':
                $size->width = 215.9;
                $size->height = 279.4;
                $size->size = "Letter";
                break;
            case 'legal':
            case 'Legal':
            case 'LEGAL':
                $size->width = 215.9;
                $size->height = 355.6;
                $size->size = "Legal";
                break;
            case 'Tabroid':
            case 'TABROID':
            case 'tabroid':
                $size->width = 279.4;
                $size->height = 431.8;
                $size->size = "Tabroid";
                break;
            case 'bcard':
                $size->width = 55;
                $size->height = 91;
                $size->size = "BusinessCard";
                break;
            default:
                $size->width = 0;
                $size->height = 0;
                $size->size = "undefined";
                break;
        }
        $size->unit = $unit;
        if($orientation==="l"||$orientation==="L"){
            $size = $this->landscape($size);
            $size->orientation = "landscape";
        }else if($orientation==="p"||$orientation==="P"){
            $size->orientation = "portrate";
        }else{
            $size->orientation = "undefined";
        }

        //単位の変換
        switch($unit){
            case 'inch':
                $size = $this->mm2inch($size);
                break;
            case 'pt':
                $size = $this->mm2pt($size);
                break;
            case 'q':
                $size = $this->mm2q($size);
                break;
            case 'cm':
                $size = $this->mm2cm($size);
                break;
            case 'mm':
                $size->unit = "mm";
                break;
            default:
        }
        return $size;
    }
    //用紙の向き
    public function landscape($size):object{
        list($size->width,$size->height) = array($size->height,$size->width);
        return $size;
    }
    //mmからinch
    public function mm2inch($size):object{
        $size->width = $size->width*0.039370;
        $size->height = $size->height*0.039370;
        $size->unit = "inch";
        return $size;
    }
    //mmからpt
    public function mm2pt($size):object{
        $size->width = $size->width*2.835;
        $size->height = $size->height*2.835;
        $size->unit = "pt";
        return $size;
    }
    //mmから級
    public function mm2q($size):object{
        $size->width = $size->width*4;
        $size->height = $size->height*4;
        $size->unit = "Q";
        return $size;
    }
    //mmからcm
    public function mm2cm($size):object{
        $size->width = $size->width/10;
        $size->height = $size->height/10;
        $size->unit = "cm";
        return $size;
    }
}

?>