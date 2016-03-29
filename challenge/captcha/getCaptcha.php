<?php
	class Vcode {
		private $width; 
		private $height; 
		private $num;  
		private $code;

		function __construct($width=80, $height=20, $num=4) {
			$this->width = $width;
			$this->height = $height;
			$this->num = $num;
			$this->code = $this->createcode();
		}

		function getcode() {
			return $this->code;
		}

		function outimg() {
			$this->createback();
			$this->outstring();
			$this->setdisturbcolor();
			$this->printimg();
		}

		private function createback() {
			$this->img = imagecreatetruecolor($this->width, $this->height);
			$bgcolor = imagecolorallocate($this->img, rand(225, 255), rand(225, 255), rand(225, 255)); 
			imagefill($this->img, 0, 0, $bgcolor);
			$bordercolor = imagecolorallocate($this->img, 0, 0, 0);
			imagerectangle($this->img, 0, 0, $this->width-1, $this->height-1, $bordercolor);
		}

		private function outstring() {
			for($i=0; $i<$this->num; $i++) {
				$color= imagecolorallocate($this->img, rand(0, 128), rand(0, 128), rand(0, 128)); 
				$fontsize=rand(3,5); 
				$x = 3+($this->width/$this->num)*$i;
				$y = rand(0, imagefontheight($fontsize)-3);
				imagechar($this->img, $fontsize, $x, $y, $this->code{$i}, $color);
			}
		}

		private function setdisturbcolor() {
			for($i=0; $i<100; $i++) {
				$color= imagecolorallocate($this->img, rand(0, 255), rand(0, 255), rand(0, 255)); 
				imagesetpixel($this->img, rand(1, $this->width-2), rand(1, $this->height-2), $color);
			}


		 	for($i=0; $i<26; $i++) {
				$color= imagecolorallocate($this->img, rand(0, 255), rand(0, 128), rand(0, 255)); 
				imagearc($this->img,rand(-10, $this->width+10), rand(-10, $this->height+10), rand(30, 300), rand(30, 300), 55,44, $color);
		 	}

			for($i=0;$i<64;$i++) {
		   		$color = imagecolorallocate($this->img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
		   		imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
  			}
		}

		private function printimg() {
			if(imagetypes() & IMG_GIF) {
				header("Content-type: image/gif");
				imagegif($this->img);
			}elseif (function_exists("imagejpeg")) {
				header("Content-type: image/jpeg");
				imagegif($this->img);
			}elseif (imagetypes() & IMG_PNG) {
				header("Content-type: image/png");
				imagegif($this->img);
			}else {
				die("No image support in this PHP server");
			} 
		}

		private function createcode() {
			$codes = "ABCDEFGHIGKLMNOPQRSTUVWXYZ";
			$code = "";
			for($i=0; $i < $this->num; $i++) {
				$code .=$codes{rand(0, strlen($codes)-1)}; 
			}
			return $code;
		}
		function __destruct() {
		 	imagedestroy($this->img);
		}
	}
	$vcode = new Vcode(80, 30, 4);
	setcookie("captcha",str_rot13($vcode->getcode()),time()+60*2);
	$vcode->outimg();
?>