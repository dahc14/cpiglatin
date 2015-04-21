<?php
	namespace Dahc14\PigLatin;

	class CPigLatin {
		public function word2PigLatin($word) {
			$consonants = "bcdfghj-np-tvwxz";
			$letters = "a-z";
			$vowels = "aeiou";
			
			return preg_replace_callback("/([$vowels]|(qu|[y$consonants](['’]?[$consonants])*))((['’]?[$letters])*)/iu", function($callback) {
				if($callback[2]) {
					if(!$callback[4])
						return $callback[0];
					
					$pigLatin = "{$callback[4]}{$callback[2]}ay";
				} else
					$pigLatin = "{$callback[0]}way";
				
				return $pigLatin;
			}, $word);
		}
	}
?>