<?php
	include 'configdb.php';
	//$sw = $_POST['stopword'];
	//$kd = $_POST['kata'];
	$jSystem = "SELECT system_answer FROM t_soal";
	$sa = $conn->query($jSystem);

	if(isset($_POST['submit']))
	{
		$stopword = array('ada',
											'adalah',
											'adanya',
											'adapun',
											'agak',
											'agaknya',
											'agar',
											'akan',
											'akankah',
											'akhir',
											'akhiri',
											'akhirnya',
											'aku',
											'akulah',
											'amat',
											'amatlah',
											'anda',
											'andalah',
											'antar',
											'antara',
											'antaranya',
											'apa',
											'apaan',
											'apabila',
											'apakah',
											'apalagi',
											'apatah',
											'artinya',
											'asal',
											'asalkan',
											'atas',
											'atau',
											'ataukah',
											'ataupun',
											'awal',
											'awalnya',
											'bagai',
											'bagaikan',
											'bagaimana',
											'bagaimanakah',
											'bagaimanapun',
											'bagi','bagian',
											'bahkan','bahwa',
											'bahwasanya',
											'baik',
											'bakal',
											'bakalan',
											'balik',
											'banyak',
											'bapak',
											'baru',
											'bawah',
											'beberapa',
											'begini',
											'beginian',
											'beginikah',
											'beginilah',
											'begitu',
											'begitukah',
											'begitulah',
											'begitupun',
											'bekerja',
											'belakang',
											'belakangan',
											'belum',
											'belumlah',
											'benar',
											'benarkah',
											'benarlah',
											'berada',
											'berakhir',
											'berakhirlah',
											'berakhirnya',
											'berapa',
											'berapakah',
											'berapalah',
											'berapapun',
											'berarti',
											'berawal',
											'berbagai',
											'berdatangan',
											'beri',
											'berikan',
											'berikut',
											'berikutnya',
											'berjumlah',
											'berkali-kali',
											'berkata',
											'berkehendak',
											'berkeinginan',
											'berkenaan',
											'berlainan',
											'berlalu',
											'berlangsung',
											'berlebihan',
											'bermacam',
											'bermacam-macam',
											'bermaksud',
											'bermula',
											'bersama',
											'bersama-sama',
											'bersiap',
											'bersiap-siap',
											'bertanya',
											'bertanya-tanya',
											'berturut',
											'berturut-turut',
											'bertutur',
											'berujar',
											'berupa',
											'besar',
											'betul',
											'betulkah',
											'biasa',
											'biasanya',
											'bila',
											'bilakah',
											'bisa',
											'bisakah',
											'boleh',
											'bolehkah',
											'bolehlah',
											'buat',
											'bukan',
											'bukankah',
											'bukanlah',
											'bukannya',
											'bulan',
											'bung',
											'cara',
											'caranya',
											'cukup',
											'cukupkah',
											'cukuplah',
											'cuma',
											'dahulu',
											'dalam',
											'dan',
											'dapat',
											'dari',
											'daripada',
											'datang',
											'dekat',
											'demi',
											'demikian',
											'demikianlah',
											'dengan',
											'depan',
											'di',
											'dia',
											'diakhiri',
											'diakhirinya',
											'dialah',
											'diantara',
											'diantaranya',
											'diberi',
											'diberikan',
											'diberikannya',
											'dibuat',
											'dibuatnya',
											'didapat',
											'didatangkan',
											'digunakan',
											'diibaratkan',
											'diibaratkannya',
											'diingat',
											'diingatkan',
											'diinginkan',
											'dijawab',
											'dijelaskan',
											'dijelaskannya',
											'dikarenakan',
											'dikatakan',
											'dikatakannya',
											'dikerjakan',
											'diketahui',
											'diketahuinya',
											'dikira',
											'dilakukan',
											'dilalui',
											'dilihat',
											'dimaksud',
											'dimaksudkan',
											'dimaksudkannya',
											'dimaksudnya',
											'diminta',
											'dimintai',
											'dimisalkan',
											'dimulai',
											'dimulailah',
											'dimulainya',
											'dimungkinkan',
											'dini',
											'dipastikan',
											'diperbuat',
											'diperbuatnya',
											'dipergunakan',
											'diperkirakan',
											'diperlihatkan',
											'diperlukan',
											'diperlukannya',
											'dipersoalkan',
											'dipertanyakan',
											'dipunyai',
											'diri',
											'dirinya',
											'disampaikan',
											'disebut',
											'disebutkan',
											'disebutkannya',
											'disini',
											'disinilah',
											'ditambahkan',
											'ditandaskan',
											'ditanya',
											'ditanyai',
											'ditanyakan',
											'ditegaskan',
											'ditujukan',
											'ditunjuk',
											'ditunjuki',
											'ditunjukkan',
											'ditunjukkannya',
											'ditunjuknya',
											'dituturkan',
											'dituturkannya',
											'diucapkan',
											'diucapkannya',
											'diungkapkan',
											'dong',
											'dua',
											'dulu',
											'empat',
											'enggak',
											'enggaknya',
											'entah',
											'entahlah',
											'guna',
											'gunakan',
											'hal',
											'hampir',
											'hanya',
											'hanyalah',
											'hari',
											'harus',
											'haruslah',
											'harusnya',
											'hendak',
											'hendaklah',
											'hendaknya',
											'hingga',
											'ia',
											'ialah',
											'ibarat',
											'ibaratkan',
											'ibaratnya',
											'ibu',
											'ikut',
											'ingat',
											'ingat-ingat',
											'ingin',
											'inginkah',
											'inginkan',
											'ini',
											'inikah',
											'inilah',
											'itu',
											'itukah',
											'itulah',
											'jadi',
											'jadilah',
											'jadinya',
											'jangan',
											'jangankan',
											'janganlah',
											'jauh',
											'jawab',
											'jawaban',
											'jawabnya',
											'jelas',
											'jelaskan',
											'jelaslah',
											'jelasnya',
											'jika',
											'jikalau',
											'juga',
											'jumlah',
											'jumlahnya',
											'justru',
											'kala',
											'kalau',
											'kalaulah',
											'kalaupun',
											'kalian',
											'kami',
											'kamilah',
											'kamu',
											'kamulah',
											'kan',
											'kapan',
											'kapankah',
											'kapanpun',
											'karena',
											'karenanya',
											'kasus',
											'kata',
											'katakan',
											'katakanlah',
											'katanya',
											'ke',
											'keadaan',
											'kebetulan',
											'kecil',
											'kedua',
											'keduanya',
											'keinginan',
											'kelamaan',
											'kelihatan',
											'kelihatannya',
											'kelima',
											'keluar',
											'kembali',
											'kemudian',
											'kemungkinan',
											'kemungkinannya',
											'kenapa',
											'kepada',
											'kepadanya',
											'kesampaian',
											'keseluruhan',
											'keseluruhannya',
											'keterlaluan',
											'ketika',
											'khususnya',
											'kini',
											'kinilah',
											'kira',
											'kira-kira',
											'kiranya',
											'kita',
											'kitalah',
											'kok',
											'kurang',
											'lagi',
											'lagian',
											'lah',
											'lain',
											'lainnya',
											'lalu',
											'lama',
											'lamanya',
											'lanjut',
											'lanjutnya',
											'lebih',
											'lewat',
											'lima',
											'luar',
											'macam',
											'maka',
											'makanya',
											'makin',
											'malah',
											'malahan',
											'mampu',
											'mampukah',
											'mana',
											'manakala',
											'manalagi',
											'masa',
											'masalah',
											'masalahnya',
											'masih',
											'masihkah',
											'masing',
											'masing-masing',
											'mau',
											'maupun',
											'melainkan',
											'melakukan',
											'melalui',
											'melihat',
											'melihatnya',
											'memang',
											'memastikan',
											'memberi',
											'memberikan',
											'membuat',
											'memerlukan',
											'memihak',
											'meminta',
											'memintakan',
											'memisalkan',
											'memperbuat',
											'mempergunakan',
											'memperkirakan',
											'memperlihatkan',
											'mempersiapkan',
											'mempersoalkan',
											'mempertanyakan',
											'mempunyai',
											'memulai',
											'memungkinkan',
											'menaiki',
											'menambahkan',
											'menandaskan',
											'menanti',
											'menanti-nanti',
											'menantikan',
											'menanya',
											'menanyai',
											'menanyakan',
											'mendapat',
											'mendapatkan',
											'mendatang',
											'mendatangi',
											'mendatangkan',
											'menegaskan',
											'mengakhiri',
											'mengapa',
											'mengatakan',
											'mengatakannya',
											'mengenai',
											'mengerjakan',
											'mengetahui',
											'menggunakan',
											'menghendaki',
											'mengibaratkan',
											'mengibaratkannya',
											'mengingat',
											'mengingatkan',
											'menginginkan',
											'mengira',
											'mengucapkan',
											'mengucapkannya',
											'mengungkapkan',
											'menjadi',
											'menjawab',
											'menjelaskan',
											'menuju',
											'menunjuk',
											'menunjuki',
											'menunjukkan',
											'menunjuknya',
											'menurut',
											'menuturkan',
											'menyampaikan',
											'menyangkut',
											'menyatakan',
											'menyebutkan',
											'menyeluruh',
											'menyiapkan',
											'merasa',
											'mereka',
											'merekalah',
											'merupakan',
											'meski',
											'meskipun',
											'meyakini',
											'meyakinkan',
											'minta',
											'mirip',
											'misal',
											'misalkan',
											'misalnya',
											'mula',
											'mulai',
											'mulailah',
											'mulanya',
											'mungkin',
											'mungkinkah',
											'nah',
											'naik',
											'namun',
											'nanti',
											'nantinya',
											'nyaris',
											'nyatanya',
											'oleh',
											'olehnya',
											'pada',
											'padahal',
											'padanya',
											'pak',
											'paling',
											'panjang',
											'pantas',
											'para',
											'pasti',
											'pastilah',
											'penting',
											'pentingnya',
											'per',
											'percuma',
											'perlu',
											'perlukah',
											'perlunya',
											'pernah',
											'persoalan',
											'pertama',
											'pertama-tama',
											'pertanyaan',
											'pertanyakan',
											'pihak',
											'pihaknya',
											'pukul',
											'pula',
											'pun',
											'punya',
											'rasa',
											'rasanya',
											'rata',
											'rupanya',
											'saat',
											'saatnya',
											'saja',
											'sajalah',
											'saling',
											'sama',
											'sama-sama',
											'sambil',
											'sampai',
											'sampai-sampai',
											'sampaikan',
											'sana',
											'sangat',
											'sangatlah',
											'satu',
											'saya',
											'sayalah',
											'se',
											'sebab',
											'sebabnya',
											'sebagai',
											'sebagaimana',
											'sebagainya',
											'sebagian',
											'sebaik',
											'sebaik-baiknya',
											'sebaiknya',
											'sebaliknya',
											'sebanyak',
											'sebegini',
											'sebegitu',
											'sebelum',
											'sebelumnya',
											'sebenarnya',
											'seberapa',
											'sebesar',
											'sebetulnya',
											'sebisanya',
											'sebuah',
											'sebut',
											'sebutlah',
											'sebutnya',
											'secara',
											'secukupnya',
											'sedang',
											'sedangkan',
											'sedemikian',
											'sedikit',
											'sedikitnya',
											'seenaknya',
											'segala',
											'segalanya',
											'segera',
											'seharusnya',
											'sehingga',
											'seingat',
											'sejak',
											'sejauh',
											'sejenak',
											'sejumlah',
											'sekadar',
											'sekadarnya',
											'sekali',
											'sekali-kali',
											'sekalian',
											'sekaligus',
											'sekalipun',
											'sekarang',
											'sekarang',
											'sekecil',
											'seketika',
											'sekiranya',
											'sekitar',
											'sekitarnya',
											'sekurang-kurangnya',
											'sekurangnya',
											'sela',
											'selain',
											'selaku',
											'selalu',
											'selama',
											'selama-lamanya',
											'selamanya',
											'selanjutnya',
											'seluruh',
											'seluruhnya',
											'semacam',
											'semakin',
											'semampu',
											'semampunya',
											'semasa',
											'semasih',
											'semata',
											'semata-mata',
											'semaunya',
											'sementara',
											'semisal',
											'semisalnya',
											'sempat',
											'semua',
											'semuanya',
											'semula',
											'sendiri',
											'sendirian',
											'sendirinya',
											'seolah',
											'seolah-olah',
											'seorang',
											'sepanjang',
											'sepantasnya',
											'sepantasnyalah',
											'seperlunya',
											'seperti',
											'sepertinya',
											'sepihak',
											'sering',
											'seringnya',
											'serta',
											'serupa',
											'sesaat',
											'sesama',
											'sesampai',
											'sesegera',
											'sesekali',
											'seseorang',
											'sesuatu',
											'sesuatunya',
											'sesudah',
											'sesudahnya',
											'setelah',
											'setempat',
											'setengah',
											'seterusnya',
											'setiap',
											'setiba',
											'setibanya',
											'setidak-tidaknya',
											'setidaknya',
											'setinggi',
											'seusai',
											'sewaktu',
											'siap',
											'siapa',
											'siapakah',
											'siapapun',
											'sini',
											'sinilah',
											'soal',
											'soalnya',
											'suatu',
											'sudah',
											'sudahkah',
											'sudahlah',
											'supaya',
											'tadi',
											'tadinya',
											'tahu',
											'tahun',
											'tak',
											'tambah',
											'tambahnya',
											'tampak',
											'tampaknya',
											'tandas',
											'tandasnya',
											'tanpa',
											'tanya',
											'tanyakan',
											'tanyanya',
											'tapi',
											'tegas',
											'tegasnya',
											'telah',
											'tempat',
											'tengah',
											'tentang',
											'tentu',
											'tentulah',
											'tentunya',
											'tepat',
											'terakhir',
											'terasa',
											'terbanyak',
											'terdahulu',
											'terdapat',
											'terdiri',
											'terhadap',
											'terhadapnya',
											'teringat',
											'teringat-ingat',
											'terjadi',
											'terjadilah',
											'terjadinya',
											'terkira',
											'terlalu',
											'terlebih',
											'terlihat',
											'termasuk',
											'ternyata',
											'tersampaikan',
											'tersebut',
											'tersebutlah',
											'tertentu',
											'tertuju',
											'terus',
											'terutama',
											'tetap',
											'tetapi',
											'tiap',
											'tiba',
											'tiba-tiba',
											'tidak',
											'tidakkah',
											'tidaklah',
											'tiga',
											'tinggi',
											'toh',
											'tunjuk',
											'turut',
											'tutur',
											'tuturnya',
											'ucap',
											'ucapnya',
											'ujar',
											'ujarnya',
											'umum',
											'umumnya',
											'ungkap',
											'ungkapnya',
											'untuk',
											'usah',
											'usai',
											'waduh',
											'wah',
											'wahai',
											'waktu',
											'waktunya',
											'walau',
											'walaupun',
											'wong',
											'yaitu',
											'yakin',
											'yakni',
											'yang'
			);
						
		$kata_dasar = array('penjualan'=>'jual',
											'berpengalaman'=>'pengalaman',
											'pelatihan'=>'latih',
											'keterampilan'=>'terampil',
											'bekerja'=>'kerja',
											'menantang'=>'tantang',
											'bermanfaat'=>'manfaat',
											'kebijakan'=>'bijak',
											'pengembangan'=>'kembang',
											'kemampuan'=>'mampu',
											'mencari'=>'cari',
											'terbaik'=>'baik',
											'kemampuan'=>'mampu',
											'pekerjaan'=>'kerja',
											'kebutuhan'=>'butuh',
											'perusahaan'=>'usaha',
											'pencapaian'=>'capai',
											'pengakuan'=>'aku',
											'mencapai'=>'capai',
											'berhasil'=>'hasil',
											'kepuasan'=>'puas',
											'keterampilan'=>'terampil',
											'tekanan'=>'tekan',
											'menambah'=>'tambah',
											'mengikuti'=>'ikut',
											'berpartisipasi'=>'partisipasi'
			);

		$a = $_POST['answer'];

		
		function uploadAnswer($array, $connect)
		{
		 	if (is_array($array)) 	
			{
				foreach ($array as $row => $value) 
				{
					$no = mysqli_real_escape_string($connect, $row);
					$user_answer = mysqli_real_escape_string($connect, $value);
					$sql = "INSERT INTO t_user_answer (no, user_answer) VALUES (null,'".$user_answer."')";
					mysqli_query($connect, $sql);
				}
			}
		}
		uploadAnswer($a, $conn);
		

		/*
		function uploadAnswer($array, $connect)
		{
		 	if (is_array($array)) 	
			{
				$values = array(); 
				foreach ($array as $row => $value) 
				{
					//$no = mysql_real_escape_string($conn, $value[0]);
					$user_answer = mysql_real_escape_string($conn, $value[0]);
					$aQuery = "INSERT INTO t_user_answer (user_answer) VALUES ('".$a."')";
					$values[] = "('user_answer')";
				}
				$sql = "INSERT INTO t_user_answer (user_answer)";
				$sql .= implode(',  ', $values); 
			}
		}
		uploadAnswer($a, $conn);
		//var_dump($values));
		*/

echo "1. Jawaban :";
		//user
		$answer = array();
		foreach ($a as $key => $value) 
		{
			$answer[] = $value;
		}
		echo "<pre>";
		print_r($answer);
		echo "</pre>";


//echo "1. Jawaban :";
		//system
		$system_answer = array();
		foreach ($sa as $key => $value) 
		{
			$system_answer[$key] = $value["system_answer"];
		}
		echo "<pre>";
		print_r($system_answer);
		echo "</pre>";

																																																				
echo "2. Parser :";//convert to lower case
		//user
		$parse_answer = array();
		foreach ($answer as $key => $value) 
		{
			$parse_answer[] = strtolower(preg_replace('/[^a-zA-Z ]/', '',$value));
		}
		echo "<pre>";
		print_r($parse_answer);
		echo "</pre>";
		
		//system
		$parse_system_answer = array();
		foreach ($system_answer as $key => $value) 
		{
			$parse_system_answer[] = strtolower(preg_replace('/[^a-zA-Z ]/', '',$value));
		}

		echo "<pre>";
		print_r($parse_system_answer);
		echo "</pre>";

								
echo "3. Filter :";//delete stopword
		//user
		$filter_answer = array();
		foreach ($parse_answer as $key => $value) 
		{
			$filter_answer[] = preg_replace('/\b('.implode('|',$stopword).')\b/','',$value);
		}
		echo "<pre>";
		print_r($filter_answer);
		echo "</pre>";

		//system
		$filter_system_answer = array();
		foreach ($parse_system_answer as $key => $value) 
		{
			$filter_system_answer[] = preg_replace('/\b('.implode('|',$stopword).')\b/','',$value);
		}
		echo "<pre>";
		print_r($filter_system_answer);
		echo "</pre>";


echo "4. Stemming :";//convert kata berimbuhan ke kata dasar
		//user
		$steamming_answer = array();
		foreach ($filter_answer as $key => $value)
		{
			$steamming_answer[] = str_replace(array_keys($kata_dasar), array_values($kata_dasar), $value);
		}
		echo "<pre>";
		print_r($steamming_answer);
		echo "</pre>";

		//system
		$steamming_system_answer = array();
		foreach ($filter_system_answer as $key => $value)
		{
			$steamming_system_answer[] = str_replace(array_keys($kata_dasar), array_values($kata_dasar), $value);
		}
		echo "<pre>";
		print_r($steamming_system_answer);
		echo "</pre>";


echo "5. Complete :";//no space = 1 string
		//user
		$complete_answer = array();
		foreach ($steamming_answer as $key => $value) 
		{
			$complete_answer[] = preg_replace('/\s+/', '', $value);
		}
		echo "<pre>";
		print_r($complete_answer);
		echo "</pre>";

		//system
		$complete_system_answer = array();
		foreach ($steamming_system_answer as $key => $value) 
		{
			$complete_system_answer[] = preg_replace('/\s+/', '', $value);
		}
		echo "<pre>";
		print_r($complete_system_answer);
		echo "</pre>";		
						

echo "6. K-gram = 2 :";//bacok to be 2 length
		//user		
		$kgram_answer = array();
		$complete_answer_length = count($complete_answer);
		for($i = 0; $i < $complete_answer_length; $i++)
		{
		    $kgram_answer[$i] = array();				    
			for($j = 0; $j < (strlen($complete_answer[$i]) - 1); $j++)
			{	
			    $kgram_answer[$i][] = substr($complete_answer[$i], $j, 2);
			}
		}
		echo "<pre>";
		print_r($kgram_answer);
		echo "<pre>";

		//system		
		$kgram_system_answer = array();
		$complete_system_answer_length = count($complete_system_answer);
		for($i = 0; $i < $complete_system_answer_length; $i++)
		{
		    $kgram_system_answer[$i] = array();				    
			for($j = 0; $j < (strlen($complete_system_answer[$i]) - 1); $j++)
			{	
			    $kgram_system_answer[$i][] = substr($complete_system_answer[$i], $j, 2);
			}
		}
		echo "<pre>";
		print_r($kgram_system_answer);
		echo "<pre>";


echo "7. Indek 0 :";//indek 0 convert to ascii
		//user
		$rabin_karp_answer_i0 = array();
		foreach ($kgram_answer as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
			$rabin_karp_answer_i0[$key][] = ord($value1[0])*10;
			}
		}
		echo "<pre>";
		print_r($rabin_karp_answer_i0);
		echo "<pre>";
		
		//system
		$rabin_karp_system_answer_i0 = array();
		foreach ($kgram_system_answer as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
			$rabin_karp_system_answer_i0[$key][] = ord($value1[0])*10;
			}
		}
		echo "<pre>";
		print_r($rabin_karp_system_answer_i0);
		echo "<pre>";


echo "8. Indek 1 :";//indek 1 convert to ascii
		//user
		$rabin_karp_answer_i1 = array();
		foreach ($kgram_answer as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
				$rabin_karp_answer_i1[$key][] = ord($value1[1])*1;
			}
		}
		echo "<pre>";
		print_r($rabin_karp_answer_i1);
		echo "<pre>";

		//system
		$rabin_karp_system_answer_i1 = array();
		foreach ($kgram_system_answer as $key => $value) 
		{
			foreach ($value as $key1 => $value1) 
			{
				$rabin_karp_system_answer_i1[$key][] = ord($value1[1])*1;
			}
		}
		echo "<pre>";
		print_r($rabin_karp_system_answer_i1);
		echo "<pre>";				


echo "9. Rabin Karp Result = indeks 0 + indeks 1 :";//jumlah indek 0 + indek 1
		//user
		$rabin_karp_result_answer = array();
		for($i = 0; $i < count($complete_answer); $i++)
		{
			for($j = 0; $j < (strlen($complete_answer[$i]) -1); $j++) 
			{
		  		$rabin_karp_result_answer[$i][$j] = $rabin_karp_answer_i0[$i][$j]+$rabin_karp_answer_i1[$i][$j];
		  	}
		}
		echo "<pre>";
		print_r($rabin_karp_result_answer);
		echo "<pre>";

		//system
		$rabin_karp_result_system_answer = array();
		for($i = 0; $i < count($complete_system_answer); $i++)
		{
			for($j = 0; $j < (strlen($complete_system_answer[$i]) -1); $j++) 
			{
		  		$rabin_karp_result_system_answer[$i][$j] = $rabin_karp_system_answer_i0[$i][$j]+$rabin_karp_system_answer_i1[$i][$j];
		  	}
		}
		echo "<pre>";
		print_r($rabin_karp_result_system_answer);
		echo "<pre>";


echo "10. Jumlah banyaknya array value dr rabin_karp_result :";//banyaknya indeks
		//user
		$count_rkr_a = array();
		for($i = 0; $i < count($complete_answer); $i++)
		{
			for($j = 0; $j < (strlen($complete_answer[$i]) -1); $j++) 
			{
				$count_rkr_a[$i] = count($rabin_karp_result_answer[$i]);
			}
		}
		echo "<pre>";
		print_r ($count_rkr_a);		
		echo "<pre>";

		echo "<br>";

		//system
		$count_rkr_sa = array();
		for($i = 0; $i < count($complete_system_answer); $i++)
		{
			for($j = 0; $j < (strlen($complete_system_answer[$i]) -1); $j++) 
			{
				$count_rkr_sa[$i] = count($rabin_karp_result_system_answer[$i]);
			}
		}
		echo "<pre>";
		print_r ($count_rkr_sa);		
		echo "<pre>";

		echo "<br>";

		$count_rkr = array();
		foreach ($count_rkr_sa as $key => $value) 
		{
			$count_rkr[] = $value + $count_rkr_a[$key];
		}
		$count_rkr_sa + $count_rkr_a;
		echo "<pre>";
		print_r ($count_rkr);		
		echo "<pre>";


echo "11. Jumlah value array yg sama :";//jumlah nilai array yg sama
	$same = array();
	foreach ($rabin_karp_result_system_answer as $key1 => $value1) 
	{
		//$same[] = array_intersect($value1, $rabin_karp_result_answer[$key1]);
		$same[] = count(array_intersect($value1, $rabin_karp_result_answer[$key1]));
	}
	echo "<pre>";
	print_r($same);
	echo "<pre>";
	
		
echo "12. Text Similarity :";//

	$textSimilarity = array();
	foreach ($count_rkr as $key => $value) 
		{
			$textSimilarity[] = 2*$same[$key] / $value;
		}
	echo "<pre>";
	print_r($textSimilarity);
	echo "<pre>";

	echo "<br>";

	//echo round( $textS * 100 ), '%';

echo "13. Hasil :";//LULUS / TIDAK LULUS
	
	foreach ($textSimilarity as $key => $value) 
	{
		if ($value > 0.5) 
		{
			echo "LULUS";
		}
		else
		{
			echo "TIDAK";
		}

	}

	foreach ($textSimilarity as $key => $value) 
	{
		# code...
	}
	
	}
?>