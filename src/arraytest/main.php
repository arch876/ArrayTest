<?php

namespace arraytest;

//Server Use
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\plugin\Plugin;
//Config Use
use pocketmine\utils\Config;

class main extends PluginBase implements Listener{

	public function onEnable(){
		if(!file_exists($this->getDataFolder())){
			mkdir($this->getDataFolder(), 0744, true);
		}
		$this->data = new Config($this->getDataFolder() . "data.yml", Config::YAML);
		//Array Create
		$data = array('kill' => '1','death' => '10','money' => '100');
		$data1 = array('kill' => '10','death' => '100','money' => '1000');
		//Array Save
		$this->data->set("user", $data);
		$this->data->set("user1", $data1);
		$this->data->save();
		//Get Config Data All
		$all = $this->data->getAll();
		//Data Echo
		echo $all["user"]["kill"];
		echo $all["user"]["death"];
		echo $all["user"]["money"];
		echo $all["user1"]["kill"];
		echo $all["user1"]["death"];
		echo $all["user1"]["money"];
	}
}
