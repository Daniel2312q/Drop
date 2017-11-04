<?php

namespace Black_Rider;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\level\particle\LavaParticle;

class Drop extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if(strtolower($cmd->getName()) === "drop") {
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Diament: 1,25%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Złoto: 1,25%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Czerewony proch: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Szmaragd: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Lazuryt: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Żelazo: 2,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Węgiel: 2,5%");
			}
		}
	public function onBreak(BlockBreakEvent $event){
			$player = $event->getPlayer();
			$block = $event->getBlock();
			
		if($block->getId() == 1 &&  mt_rand(0, 60) == "1"){
			$player->getLevel()->dropItem($block, new item(264, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "DIAMENT" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 55) == "1"){
			$player->getLevel()->dropItem($block, new item(266, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "ZŁOTO" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 50) == "1"){
			$player->getLevel()->dropItem($block, new item(388, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "SZMARAGD" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 45) == "1"){
			$player->getLevel()->dropItem($block, new item(331, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "CZERWONY PROCH" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 40) == "1"){
			$player->getLevel()->dropItem($block, new item(351, 4, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "LAZURYT" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 35) == "1"){
			$player->getLevel()->dropItem($block, new item(265, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "ŻELAZO" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 30) == '1'){
			
			
			$player->getLevel()->dropItem($block, new item(263, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "WĘGIEL" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
		}
	}
}
<?php

namespace Black_Rider;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\level\particle\LavaParticle;

class Drop extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if(strtolower($cmd->getName()) === "drop") {
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Diament: 1,25%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Złoto: 1,25%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Czerewony proch: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Szmaragd: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Lazuryt: 1,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Żelazo: 2,5%");
			$sender->sendMessage(TextFormat::DARK_GREEN . "• " . TextFormat::GREEN . "> " . TextFormat::GRAY . "Węgiel: 2,5%");
			}
		}
	public function onBreak(BlockBreakEvent $event){
			$player = $event->getPlayer();
			$block = $event->getBlock();
			
		if($block->getId() == 1 &&  mt_rand(0, 60) == "1"){
			$player->getLevel()->dropItem($block, new item(264, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "DIAMENT" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 55) == "1"){
			$player->getLevel()->dropItem($block, new item(266, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "ZŁOTO" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 50) == "1"){
			$player->getLevel()->dropItem($block, new item(388, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "SZMARAGD" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 45) == "1"){
			$player->getLevel()->dropItem($block, new item(331, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "CZERWONY PROCH" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 40) == "1"){
			$player->getLevel()->dropItem($block, new item(351, 4, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "LAZURYT" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 35) == "1"){
			$player->getLevel()->dropItem($block, new item(265, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "ŻELAZO" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
			}
		if($block->getId() == 1 &&  mt_rand(0, 30) == '1'){
			$player->getLevel()->dropItem($block, new item(263, 0, mt_rand(0, 3)));
			$player->sendPopup(TextFormat::GREEN . "•> " . TextFormat::GRAY . "WĘGIEL" . TextFormat::GREEN . " <•");
			$player->getLevel()->addParticle(new LavaParticle($b, 2));
		}
	}
}
