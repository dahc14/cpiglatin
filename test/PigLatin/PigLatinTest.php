<?php
	namespace Dahc14\PigLatin;
	
	class PigLatinTest extends \PHPUnit_Framework_TestCase {
		public function testGetName() {
			$pigLatin = new \Dahc14\PigLatin\word2PigLatin();
			
			$expect = "anielDay";
			$word = "Daniel";
			
			$this->assertEquals($word, $expect, "The translation is not correct.");
		}
	}
?>