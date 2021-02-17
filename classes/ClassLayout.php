<?php 
namespace Classes;

class ClassLayout{

    public static function setHead($title, $description, $author='Vinicius Cavalheiro')
    {

        $html="<!DOCTYPE html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="  <meta charset='UTF-8'>\n";
        $html.="  <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $html.="  <meta name='author' content='$author'>\n";
        $html.="  <meta name='format-detection' content='telephone=no'>\n";
        $html.="  <meta neme='description' content='$description'>\n";
        $html.="  <title>$title</title>\n";
        $html.="  <link rel='stylesheet' href='".DIRPAGE."lib/css/style.css'>";
        #<!-- FAVIVON -->
        #<!-- STYLESHEET -->
        $html.="</head>\n\n";
        $html.="<body>\n";

        echo $html;

    }

    public static function setFooter()
    {
      
     
        $html="</body>\n";
        #<!-- JAVASCRIOP -->
        $html.=" </html>";
        echo $html;
    }
}