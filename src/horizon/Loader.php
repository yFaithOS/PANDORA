<?php

namespace horizon;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Loader extends PluginBase {
    
    private static $object = null;
    public $data;
    
    public function onLoad() {
        if($this->getDataFolder()) {
            @mkdir($this->getDataFolder());
        }
        self::$object = $this;
    }
    
    public function onEnable() {
        
    }

}

?>
