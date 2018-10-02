<?php
$blocks = array();
$galery = array();
$myArray = array();
$counter = 0;
/*** data to global massive galery ***/
for ($type = 1; $type <= 3; $type++){
	$myArray = [];
	$className = "PhotoA".$type;
	$sql = "SELECT path,views FROM photos WHERE type='A".$type."' ORDER BY views ASC";
	$res = mysqli_query($connect, $sql);

	while ($data = mysqli_fetch_assoc($res)){
	
		$myObj = new $className($data['path'], $data['views'], $iter, $type);
		array_push($myArray,  $myObj);
		$counter++; Block::$types[$type]++;
	}
	$galery[$type] = $myArray;
}

/*** classes ***/
class Photo{
	const folderPath = "/images/full";
	public $name = "";
	public $views  = 0;
	public $path = "";
	public $iter = 0;
	
	public function __construct($path, $views, $iter, $type){
		$this->setter($path, $views, $iter, $type);
		$this->name = pathinfo($path, PATHINFO_BASENAME);
	}
	
	private function setter($path, $views, $iter, $type){
		$this->views = $views;
		$this->path = $path;
		$this->iter = $iter;
		$this->type = $type;
	}
	public function getViews(){
		return $this->views;
	}
	
}

class PhotoA1 extends Photo{};
class PhotoA2 extends Photo{};
class PhotoA3 extends Photo{};

//echo $galery[3][0]->name;

class Block{
	
	public $amountPhotos  = 0;
	public $type = -1;
	public $phInBlock = [];
	public $blockViews = 0;
	public static $types = [0, 0, 0, 0];
	
	public function __construct($blockType){
		$this->makeBlock($blockType);
		$this->blockViews = (rand(0, 100)+ 100*$this->blockViews)/$this->amountPhoots;
		$this->type = $blockType;
		//echo $this->blockViews." ".Block::$types[1]." ".Block::$types[2]." ".Block::$types[3]."<br>";
	}
	private function makeBlock($blockType){
		if ($blockType === 1 ){$this->popPhotos([1, 1, 1, 1]); $this->amountPhoots = 4;}
		if ($blockType === 2 ){$this->popPhotos([4, 3, 3]); $this->amountPhoots = 3;}	
		if ($blockType === 3 ){$this->popPhotos([2, 2, 3, 2, 2]); $this->amountPhoots = 5;}	
		if ($blockType === 4 ){$this->popPhotos([1, 1, 1, 1, 3, 3]); $this->amountPhoots = 6;}	
		if ($blockType === 5 ){$this->popPhotos([1, 2, 2]); $this->amountPhoots = 3;}	
		if ($blockType === 6 ){$this->popPhotos([3, 3, 3, 3]); $this->amountPhoots = 4;}
		if ($blockType === 7 ){$this->popPhotos([1, 1, 4, 1, 1]); $this->amountPhoots = 5;}				
	}
	
	private function popPhotos($types){
		foreach($types as $type){ 
			$big = false;
			if ($type === 4) {$type = 1; $big = true;}
			//echo "type $type<br>";
			$this->popPushPhoto($type, $big); 
			self::$types[$type]--;
		}
	}
	
	private function popPushPhoto($type, $big){
		global $galery;
		$myPhoto = array_pop($galery[$type]);
		if ($big) {$myPhoto->type = 4;}
		array_push($this->phInBlock, $myPhoto);
		$this->blockViews +=  $myPhoto->getViews();
	}
	
	public function getBlockViews(){
		return $this->blockViews;
	}
}
	
while(true){
	if (Block::$types[1] > 16 && Block::$types[2] > 8 && Block::$types[3] > 11){
		for ($i = 1; $i < 7; $i++) { $block = new Block($i); $blocks[$block->blockViews] = $block; }
	}
	elseif (Block::$types[3] >= Block::$types[2]+2 && Block::$types[3] > 3 ) {
		$block = new Block(6); $blocks[$block->blockViews] = $block;  
	}
	elseif (Block::$types[2] >= Block::$types[3] && Block::$types[3] > 0 && Block::$types[2] > 3) {
		$block = new Block(3); $blocks[$block->blockViews] = $block;  
	}
	elseif (Block::$types[2] >= Block::$types[1] && Block::$types[2] > 1 && Block::$types[1] > 5) {
		$block = new Block(5); $blocks[$block->blockViews] = $block;  
	}
	elseif ((Block::$types[3] >= Block::$types[1] || Block::$types[3] > Block::$types[2]) && Block::$types[1] > 1) {
		$block = new Block(2); $blocks[$block->blockViews] = $block;
	}
	else break;
}
		
while(true){
	if  (Block::$types[2] > 1 && Block::$types[1] > 5) {
		$block = new Block(5); $blocks[$block->blockViews] = $block;
	}
	elseif ( Block::$types[1] > 4 &&  Block::$types[2] > 1){
		$block = new Block(2); $blocks[$block->blockViews] = $block;
	}
	elseif ( Block::$types[1] > 4 &&  Block::$types[3] > 1){
		$block = new Block(4); $blocks[$block->blockViews] = $block;
	}
	elseif ( Block::$types[1] > 5 && rand(0, 2) >= 1){
		$block = new Block(7); $blocks[$block->blockViews] = $block;
	}
	elseif ( Block::$types[1] > 3){
		$block = new Block(1); $blocks[$block->blockViews] = $block;
	}
	else break;
}
//shuffle($blocks);
krsort($blocks);



?>