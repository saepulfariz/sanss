<?php 




$data = [
	'tenda' => [
		[
			'alat' => 'KAP 1-2', 
			'harga' => '30K'
		],
		[
			'alat' => 'KAP 1-4', 
			'harga' => '40K'
		],
		[
			'alat' => 'KAP 1-5', 
			'harga' => '50K'
		],
		[
			'alat' => 'KAP 1-10', 
			'harga' => '100K'
		],
		[
			'alat' => 'KAP 1-20 + Pasang', 
			'harga' => '500K'
		]
	],
	'individu' => [
		[
			'alat' => 'MATRAS', 
			'harga' => '5K'
		],
		[
			'alat' => 'SLEEPING BAG', 
			'harga' => '10K'
		],
		[
			'alat' => 'HEADLAMP', 
			'harga' => '10K'
		],
		[
			'alat' => 'JAKET GUNUNG', 
			'harga' => '15K'
		],
		[
			'alat' => 'TRAKING POLE', 
			'harga' => '15K'
		],
		[
			'alat' => 'DAYPACK', 
			'harga' => '25K'
		],
		[
			'alat' => 'CARRIER', 
			'harga' => '30K'
		],
		[
			'alat' => 'SEPATU GUNUNG', 
			'harga' => '30K'
		]
	],
	'kelompok' => [
		[
			'alat' => 'ISI ULANG GAS', 
			'harga' => '8K'
		],
		[
			'alat' => 'GAS PORTABLE + ISI', 
			'harga' => '15K'
		],
		[
			'alat' => 'LAMPU TENDA', 
			'harga' => '15K'
		],
		[
			'alat' => 'KOMPOR', 
			'harga' => '15K'
		],
		[
			'alat' => 'COOKSET', 
			'harga' => '15K'
		],
		[
			'alat' => 'HAMMOCK', 
			'harga' => '15K'
		],
		[
			'alat' => 'PLYSEAT', 
			'harga' => '20K'
		],
		[
			'alat' => 'HANDYTALKIE', 
			'harga' => '20K'
		]
	]
];


echo json_encode($data);







 ?>