<?php
namespace SmbSpace;

class Hello{
    public static function hi(){
        return 'Hi, From SMB';
    }
    public static function helloGlobal()
    {
        return [
            'You Speak English? Hello',
            'You Speak French? Bonjour',
            'You Speak Greek? Geia!',
            'You Speak Hebrew? Shalóm'
        ];
    }
}