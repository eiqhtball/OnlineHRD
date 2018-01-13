<?php
	include 'configdb.php';
	include 'stemming.php';
	require_once '../core/sessionuser.php';
	if (!isset($ceksession)) 
	{
		header('location: login.php');
	}
	$sw = $conn->query("SELECT stopword FROM stopword");
	$sa = $conn->query("SELECT system_answer FROM t_soal");
	$sa2 = $conn->query("SELECT system_answer2 FROM t_soal");
	$sa3 = $conn->query("SELECT system_answer3 FROM t_soal");
	$sa4 = $conn->query("SELECT system_answer4 FROM t_soal");
	$sa5 = $conn->query("SELECT system_answer5 FROM t_soal");
	$sa6 = $conn->query("SELECT system_answer6 FROM t_soal");
	$stopword = array();
		foreach ($sw as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
				$stopword[] = $value1;
			}
		}

		$a = $_POST['answer'];
		//user
		$answer = array();
			foreach ($a as $key => $value) 
			{
				$answer[] = $value;
			}
		//system1
		$system_answer = array();
			foreach ($sa as $key => $value) 
			{
				$system_answer[$key] = $value["system_answer"];
			}
		//system2
		$system_answer2 = array();
			foreach ($sa2 as $key => $value) 
			{
				$system_answer2[$key] = $value["system_answer2"];
			}
		//system3
		$system_answer3 = array();
			foreach ($sa3 as $key => $value) 
			{
				$system_answer3[$key] = $value["system_answer3"];
			}
		//system4
		$system_answer4 = array();
			foreach ($sa4 as $key => $value) 
			{
				$system_answer4[$key] = $value["system_answer4"];
			}
		//system5
		$system_answer5 = array();
			foreach ($sa5 as $key => $value) 
			{
				$system_answer5[$key] = $value["system_answer5"];
			}
		//system6
		$system_answer6 = array();
			foreach ($sa6 as $key => $value) 
			{
				$system_answer6[$key] = $value["system_answer6"];
			}

	function parser($answer)
	{
		foreach ($answer as $key => $value) 
		{
			$parser[] = strtolower(preg_replace('/[^a-zA-Z ]/', '',$value));
		}
		return $parser;
	}
//$stopword = menghilankan kata hubung.contoh = dan, dengan, yang, atau
	function filter($parser, $stopword)
	{
		foreach ($parser as $key => $value) 
		{
			$filter[] = preg_replace('/\b('.implode('|',$stopword).')\b/','',$value);
		}
		return $filter;
	}
//steming = merubah kebentuk kata dasar
	function steamming($filter)
	{
		// foreach ($filter as $key => $value) 
		// {
		// 	$steamming[] = str_replace(array_keys($kata_dasar), array_values($kata_dasar), $value);
		// }
		// return $steamming;

		foreach ($filter as $key => $value) 
		{
			$stm[] = str_word_count($value, 1);
		}

		foreach ($stm as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
				$stmm[$key][]= hapusakhiran(hapusawalan2(hapusawalan1(hapuspp(hapuspartikel($value1))))); 
			}
		}

		foreach ($stmm as $key => $value) 
		{
			$steamming[]= implode(' ', $value); 
		}
		return $steamming;
	}

	function no_space($steamming)
	{
		foreach ($steamming as $key => $value) 
		{
			$no_space[] = preg_replace('/\s+/', '', $value);
		}
		return $no_space;
	}

	function kgram_2($no_space)
	{
		for($i = 0; $i < count($no_space); $i++)
		{
		$kgram_2[$i] = array();				    
			for($j = 0; $j < (strlen($no_space[$i]) - 1); $j++)
			{	
			   $kgram_2[$i][] = substr($no_space[$i], $j, 2);
			}
		}
		return $kgram_2;
	}

	function change_to_ascii_indek_0($kgram_2)
	{
		$change_to_ascii_indek_0 = array();
			foreach ($kgram_2 as $key => $value) 
			{
				foreach ($value as $key1 => $value1) 
				{
					$change_to_ascii_indek_0[$key][] = ord($value1[0])*10;
				}
			}
		return $change_to_ascii_indek_0;
	}

	function change_to_ascii_indek_1($kgram_2)
	{
		$change_to_ascii_indek_1 = array();
			foreach ($kgram_2 as $key => $value) 
			{
				foreach ($value as $key1 => $value1) 
				{
					$change_to_ascii_indek_1[$key][] = ord($value1[1])*1;
				}
			}
		return $change_to_ascii_indek_1;
	}

	function plus_indek_0_and_indek_1($no_space, $change_to_ascii_indek_0, $change_to_ascii_indek_1)
	{
		$plus_indek_0_and_indek_1 = array();
			for($i = 0; $i < count($no_space); $i++)
			{
				for($j = 0; $j < (strlen($no_space[$i]) -1); $j++) 
				{
			  		$plus_indek_0_and_indek_1[$i][$j] = $change_to_ascii_indek_0[$i][$j] + $change_to_ascii_indek_1[$i][$j];
			  	}
			}
		return $plus_indek_0_and_indek_1;
	}
//membandingkan jawaban user dengan system
	function count_same_value($plus_indek_0_and_indek_1_user, $plus_indek_0_and_indek_1_system)
	{
		$count_same_value = array();
			foreach ($plus_indek_0_and_indek_1_system as $key => $value) 
			{
				$count_same_value[] = count(array_intersect($value, $plus_indek_0_and_indek_1_user[$key]));
			}
		return $count_same_value;
	}

	function sum_array($no_space_user, $no_space_system, $plus_indek_0_and_indek_1_user, $plus_indek_0_and_indek_1_system)
	{
		$sum_array_user = array();
			for($i = 0; $i < count($no_space_user); $i++)
			{
				for($j = 0; $j < (strlen($no_space_user[$i]) -1); $j++) 
				{
					$sum_array_user[$i] = count($plus_indek_0_and_indek_1_user[$i]);
				}
			}

		$sum_array_system = array();
			for($i = 0; $i < count($no_space_system); $i++)
			{
				for($j = 0; $j < (strlen($no_space_system[$i]) -1); $j++) 
				{
					$sum_array_system[$i] = count($plus_indek_0_and_indek_1_system[$i]);
				}
			}
	
		$sum_array = array();
			foreach ($sum_array_system as $key => $value) 
			{
				$sum_array[] = $value + $sum_array_user[$key];
			}

		return $sum_array;
	}

	function textSimilarity($count_same_value, $sum_array)
	{
		$textSimilarity = array();
			foreach ($sum_array as $key => $value) 
			{
				$textSimilarity[] = 2*$count_same_value[$key] / $value;
			}
		return $textSimilarity;
	}

	if(isset($_POST['submit']))
	{		
			
 		$parse_answer  = parser($answer);
 		$parse_answer1 = parser($system_answer);
 		$parse_answer2 = parser($system_answer2);
 		$parse_answer3 = parser($system_answer3);
 		$parse_answer4 = parser($system_answer4);
 		$parse_answer5 = parser($system_answer5);
 		$parse_answer6 = parser($system_answer6);
 		
 		$filter_answer  = filter($parse_answer, $stopword);
 		$filter_answer1 = filter($parse_answer1, $stopword);
 		$filter_answer2 = filter($parse_answer2, $stopword);
 		$filter_answer3 = filter($parse_answer3, $stopword);
 		$filter_answer4 = filter($parse_answer4, $stopword);
 		$filter_answer5 = filter($parse_answer5, $stopword);
 		$filter_answer6 = filter($parse_answer6, $stopword);

 		$steamming_answer = steamming($filter_answer);
 		$steamming_answer1 = steamming($filter_answer1);
 		$steamming_answer2 = steamming($filter_answer2);
 		$steamming_answer3 = steamming($filter_answer3);
 		$steamming_answer4 = steamming($filter_answer4);
 		$steamming_answer5 = steamming($filter_answer5);
 		$steamming_answer6 = steamming($filter_answer6);

 		$no_space_answer = no_space($steamming_answer);
 		$no_space_answer1 = no_space($steamming_answer1);
 		$no_space_answer2 = no_space($steamming_answer2);
 		$no_space_answer3 = no_space($steamming_answer3);
 		$no_space_answer4 = no_space($steamming_answer4);
 		$no_space_answer5 = no_space($steamming_answer5);
 		$no_space_answer6 = no_space($steamming_answer6);

 		$kgram_2_answer = kgram_2($no_space_answer);
 		$kgram_2_answer1 = kgram_2($no_space_answer1);
 		$kgram_2_answer2 = kgram_2($no_space_answer2);
 		$kgram_2_answer3 = kgram_2($no_space_answer3);
 		$kgram_2_answer4 = kgram_2($no_space_answer4);
 		$kgram_2_answer5 = kgram_2($no_space_answer5);
 		$kgram_2_answer6 = kgram_2($no_space_answer6);

 		$change_to_ascii_indek_0_answer = change_to_ascii_indek_0($kgram_2_answer);
 		$change_to_ascii_indek_0_answer1 = change_to_ascii_indek_0($kgram_2_answer1);
 		$change_to_ascii_indek_0_answer2 = change_to_ascii_indek_0($kgram_2_answer2);
 		$change_to_ascii_indek_0_answer3 = change_to_ascii_indek_0($kgram_2_answer3);
 		$change_to_ascii_indek_0_answer4 = change_to_ascii_indek_0($kgram_2_answer4);
 		$change_to_ascii_indek_0_answer5 = change_to_ascii_indek_0($kgram_2_answer5);
 		$change_to_ascii_indek_0_answer6 = change_to_ascii_indek_0($kgram_2_answer6);
 		
 		$change_to_ascii_indek_1_answer = change_to_ascii_indek_1($kgram_2_answer);
 		$change_to_ascii_indek_1_answer1 = change_to_ascii_indek_1($kgram_2_answer1);
 		$change_to_ascii_indek_1_answer2 = change_to_ascii_indek_1($kgram_2_answer2);
 		$change_to_ascii_indek_1_answer3 = change_to_ascii_indek_1($kgram_2_answer3);
 		$change_to_ascii_indek_1_answer4 = change_to_ascii_indek_1($kgram_2_answer4);
 		$change_to_ascii_indek_1_answer5 = change_to_ascii_indek_1($kgram_2_answer5);
 		$change_to_ascii_indek_1_answer6 = change_to_ascii_indek_1($kgram_2_answer6);

 		$plus_indek_0_and_indek_1_answer  = plus_indek_0_and_indek_1($no_space_answer,  $change_to_ascii_indek_0_answer,   $change_to_ascii_indek_1_answer);
 		$plus_indek_0_and_indek_1_answer1 = plus_indek_0_and_indek_1($no_space_answer1, $change_to_ascii_indek_0_answer1, $change_to_ascii_indek_1_answer1);
 		$plus_indek_0_and_indek_1_answer2 = plus_indek_0_and_indek_1($no_space_answer2, $change_to_ascii_indek_0_answer2, $change_to_ascii_indek_1_answer2);
 		$plus_indek_0_and_indek_1_answer3 = plus_indek_0_and_indek_1($no_space_answer3, $change_to_ascii_indek_0_answer3, $change_to_ascii_indek_1_answer3);
 		$plus_indek_0_and_indek_1_answer4 = plus_indek_0_and_indek_1($no_space_answer4, $change_to_ascii_indek_0_answer4, $change_to_ascii_indek_1_answer4);
 		$plus_indek_0_and_indek_1_answer5 = plus_indek_0_and_indek_1($no_space_answer5, $change_to_ascii_indek_0_answer5, $change_to_ascii_indek_1_answer5);
 		$plus_indek_0_and_indek_1_answer6 = plus_indek_0_and_indek_1($no_space_answer6, $change_to_ascii_indek_0_answer6, $change_to_ascii_indek_1_answer6);

 		$count_same_value_answer1 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer1);
 		$count_same_value_answer2 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer2);
 		$count_same_value_answer3 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer3);
 		$count_same_value_answer4 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer4);
 		$count_same_value_answer5 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer5);
 		$count_same_value_answer6 = count_same_value($plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer6);

 		$sum_array_answer1 = sum_array($no_space_answer, $no_space_answer1, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer1);
 		$sum_array_answer2 = sum_array($no_space_answer, $no_space_answer2, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer2);
 		$sum_array_answer3 = sum_array($no_space_answer, $no_space_answer3, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer3);
 		$sum_array_answer4 = sum_array($no_space_answer, $no_space_answer4, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer4);
 		$sum_array_answer5 = sum_array($no_space_answer, $no_space_answer5, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer5);
 		$sum_array_answer6 = sum_array($no_space_answer, $no_space_answer6, $plus_indek_0_and_indek_1_answer, $plus_indek_0_and_indek_1_answer6);

 		$textSimilarity1 = textSimilarity($count_same_value_answer1, $sum_array_answer1);
 		$textSimilarity2 = textSimilarity($count_same_value_answer2, $sum_array_answer2);
 		$textSimilarity3 = textSimilarity($count_same_value_answer3, $sum_array_answer3);
 		$textSimilarity4 = textSimilarity($count_same_value_answer4, $sum_array_answer4);
 		$textSimilarity5 = textSimilarity($count_same_value_answer5, $sum_array_answer5);
 		$textSimilarity6 = textSimilarity($count_same_value_answer6, $sum_array_answer6);


		echo "<pre>";
		
		echo "<pre>";

// echo "13. Compare :";//--------------------------------------------//mebandingkan hasil step 12 dgn hasil yg lain, terdapat 6    		 															  					hasil yg harus dicari yg terbesar

		$compare = array();
		foreach ($textSimilarity1 as $key => $value) 
		{
			if (
				$value >= $textSimilarity2[$key] &&
				$value >= $textSimilarity3[$key] &&
				$value >= $textSimilarity4[$key] &&
				$value >= $textSimilarity4[$key] &&
				$value >= $textSimilarity6[$key]
			   ) 
			{
				$compare[] = $value;	
			}
			else if (
					 $textSimilarity2 >= $value &&
					 $textSimilarity2 >= $textSimilarity3 &&
					 $textSimilarity2 >= $textSimilarity4 &&
					 $textSimilarity2 >= $textSimilarity5 &&
					 $textSimilarity2 >= $textSimilarity6 
					)
			{
				$compare[] = $textSimilarity2[$key];
			}
			else if (
					 $textSimilarity3 >= $value &&
					 $textSimilarity3 >= $textSimilarity2 &&
					 $textSimilarity3 >= $textSimilarity4 &&
					 $textSimilarity3 >= $textSimilarity5 &&
					 $textSimilarity3 >= $textSimilarity6 
					) 
			{
				$compare[] = $textSimilarity3[$key];
			}
			else if (
					 $textSimilarity4 >= $value &&
					 $textSimilarity4 >= $textSimilarity2 &&
					 $textSimilarity4 >= $textSimilarity3 &&
					 $textSimilarity4 >= $textSimilarity5 &&
					 $textSimilarity4 >= $textSimilarity6 
					) 
			{
				$compare[] = $textSimilarity4[$key];
			}
			else if (
					 $textSimilarity5 >= $value &&
					 $textSimilarity5 >= $textSimilarity2 &&
					 $textSimilarity5 >= $textSimilarity3 &&
					 $textSimilarity5 >= $textSimilarity4 &&
					 $textSimilarity5 >= $textSimilarity6 
					) 
			{
				$compare[] = $textSimilarity5[$key];
			}
			else 
			{
				$compare[] = $textSimilarity6[$key];
			}
		}
		//echo round( $textS * 100 ), '%';

//echo "14. Hasil :";---------------------------------------------//hasil dari step 13 (Compare), dicari yg >= 0.5 dan dibulatkan 																	  					ke 1, klu < 0.5 maka menjadi 0
		$pembulatan = array();	
		foreach ($compare as $key => $value) 
		{
			if ($value >= 0.5) 
			{
				$pembulatan[] = 1;
			}
			else
			{
				$pembulatan[] = 0;
			}
		}
		// echo "<pre>";
		// print_r($pembulatan);
		// echo "<pre>";

//echo "15. Status :";--------------------------------------------//mejumlahkan isi dari step 14 dan diupload ke database user 																	    					colom result
		$status = array_sum($pembulatan);
		// echo "<pre>";
		// print_r($status);
		// echo "<pre>";

		$u = $_SESSION['username'];
		$conn->query("UPDATE t_user SET result = '$status' WHERE username = '$u'");
		// var_dump($pembulatan);
		// exit;
	}
		header("location: ../menu_test.php");//setelah proses selesai dikembalikan ke menu_test.php

?>