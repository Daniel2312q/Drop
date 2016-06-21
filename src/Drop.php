<?php

namespace Black_Rider;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

  public function onBreak(BlockBreakEvent $event){
    $player = $event->getPlayer();
    }
  if($e->getBlock()->getId() == 1 && mt_rand(0, 60)){
    $player->getLevel()->getItem(264, 0, 1);
    $player->sendPopup(">>> Diament <<<");
