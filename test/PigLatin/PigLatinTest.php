<?php
	namespace Dahc14\PigLatin;
	
	class PigLatinTest extends \PHPUnit_Framework_TestCase {
		public function testGetName() {
			$pigLatin = new \Dahc14\PigLatin\CPigLatin();
			
			$expect = "anielDay";
			$word = "Daniel";
			
			$result = $pigLatin->word2PigLatin($word);
			
			$this->assertEquals($result, $expect, "The translation is not correct.");
		}
	}
?>