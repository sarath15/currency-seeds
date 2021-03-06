<?php
use Illuminate\Database\Seeder;
use Admin\Models\Country;
class CountriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'countries' )->delete ();
		DB::unprepared ( "ALTER TABLE countries AUTO_INCREMENT = 1;" );
		$country = [ 
				'1' => ['name' => 'Albania', 'time_zone' => '', 'status' => 1 ],
				'2' => ['name' => 'America', 'time_zone' => '', 'status' => 1 ],
				'3' => ['name' => 'Afghanistan', 'time_zone' => '', 'status' => 1 ],
				'4' => ['name' => 'Argentina', 'time_zone' => '', 'status' => 1 ],
				'5' => ['name' => 'Aruba', 'time_zone' => '', 'status' => 1 ],
				'6' => ['name' => 'Australia', 'time_zone' => '', 'status' => 1 ],
				'7' => ['name' => 'Azerbaijan', 'time_zone' => '', 'status' => 1 ],
				'8' => ['name' => 'Bahamas', 'time_zone' => '', 'status' => 1 ],
		    '9' => ['name' => 'Bahrain', 'time_zone' => 'Asia/Bahrain', 'status' => 0 ],
				'10' => ['name' => 'Barbados', 'time_zone' => '', 'status' => 1 ],
				'11' => ['name' => 'Belarus', 'time_zone' => '', 'status' => 1 ],
				'12' => ['name' => 'Belgium', 'time_zone' => '', 'status' => 1 ],
				'13' => ['name' => 'Beliz', 'time_zone' => '', 'status' => 1 ],
				'14' => ['name' => 'Bermuda', 'time_zone' => '', 'status' => 1 ],
				'15' => ['name' => 'Bolivia', 'time_zone' => '', 'status' => 1 ],
				'16' => ['name' => 'Bosnia and Herzegovina', 'time_zone' => '', 'status' => 1 ],
				'17' => ['name' => 'Botswana', 'time_zone' => '', 'status' => 1 ],
				'18' => ['name' => 'Bulgaria', 'time_zone' => '', 'status' => 1 ],
				'19' => ['name' => 'Brazil', 'time_zone' => '', 'status' => 1 ],
				'20' => ['name' => 'Britain (United Kingdom)', 'time_zone' => '', 'status' => 1 ],
				'21' => ['name' => 'Brunei Darussalam', 'time_zone' => '', 'status' => 1 ],
				'22' => ['name' => 'Cambodia', 'time_zone' => '', 'status' => 1 ],
				'23' => ['name' => 'Canada', 'time_zone' => '', 'status' => 1 ],
				'24' => ['name' => 'Cayman Islands', 'time_zone' => '', 'status' => 1 ],
				'25' => ['name' => 'Chile', 'time_zone' => '', 'status' => 1 ],
				'26' => ['name' => 'China', 'time_zone' => '', 'status' => 1 ],
				'27' => ['name' => 'Colombia', 'time_zone' => '', 'status' => 1 ],
				'28' => ['name' => 'Costa Rica', 'time_zone' => '', 'status' => 1 ],
				'29' => ['name' => 'Croatia', 'time_zone' => '', 'status' => 1 ],
				'30' => ['name' => 'Cuba', 'time_zone' => '', 'status' => 1 ],
				'31' => ['name' => 'Cyprus', 'time_zone' => '', 'status' => 1 ],
				'32' => ['name' => 'Czech Republic', 'time_zone' => '', 'status' => 1 ],
				'33' => ['name' => 'Denmark', 'time_zone' => '', 'status' => 1 ],
				'34' => ['name' => 'Dominican Republic', 'time_zone' => '', 'status' => 0 ],
				'35' => ['name' => 'East Caribbean', 'time_zone' => '', 'status' => 1 ],
				'36' => ['name' => 'Egypt', 'time_zone' => '', 'status' => 1 ],
				'37' => ['name' => 'El Salvador', 'time_zone' => '', 'status' => 1 ],
				'38' => ['name' => 'England (United Kingdom)', 'time_zone' => '', 'status' => 1 ],
				'39' => ['name' => 'Euro', 'time_zone' => '', 'status' => 1 ],
				'40' => ['name' => 'Falkland Islands', 'time_zone' => '', 'status' => 1 ],
				'41' => ['name' => 'Fiji', 'time_zone' => '', 'status' => 1 ],
				'42' => ['name' => 'France', 'time_zone' => '', 'status' => 1 ],
				'43' => ['name' => 'Ghana', 'time_zone' => '', 'status' => 0 ],
				'44' => ['name' => 'Gibraltar', 'time_zone' => '', 'status' => 1 ],
				'45' => ['name' => 'Greece', 'time_zone' => '', 'status' => 1 ],
				'46' => ['name' => 'Guatemala', 'time_zone' => '', 'status' => 1 ],
				'47' => ['name' => 'Guernsey', 'time_zone' => '', 'status' => 0 ],
				'48' => ['name' => 'Guyana', 'time_zone' => '', 'status' => 1 ],
				'49' => ['name' => 'Holland (Netherlands)', 'time_zone' => '', 'status' => 1 ],
				'50' => ['name' => 'Honduras', 'time_zone' => '', 'status' => 1 ],
				'51' => ['name' => 'Hong Kong', 'time_zone' => '', 'status' => 1 ],
				'52' => ['name' => 'Hungary', 'time_zone' => '', 'status' => 1 ],
				'53' => ['name' => 'Iceland', 'time_zone' => '', 'status' => 1 ],
				'54' => ['name' => 'India', 'time_zone' => '', 'status' => 1 ],
				'55' => ['name' => 'Indonesia', 'time_zone' => '', 'status' => 1 ],
		    '56' => ['name' => 'Iran', 'time_zone' => 'Asia/Tehran', 'status' => 1 ],
		    '57' => ['name' => 'Iraq', 'time_zone' => 'Asia/Baghdad', 'status' => 1 ],
				'58' => ['name' => 'Ireland', 'time_zone' => '', 'status' => 1 ],
				'59' => ['name' => 'Isle of Man', 'time_zone' => '', 'status' => 0 ],
				'60' => ['name' => 'Israel', 'time_zone' => '', 'status' => 1 ],
				'61' => ['name' => 'Italy', 'time_zone' => '', 'status' => 1 ],
				'62' => ['name' => 'Jamaica', 'time_zone' => '', 'status' => 1 ],
				'63' => ['name' => 'Japan', 'time_zone' => '', 'status' => 1 ],
				'64' => ['name' => 'Jersey', 'time_zone' => '', 'status' => 0 ],
		    '65' => ['name' => 'jordan', 'time_zone' => 'Asia/Amman', 'status' => 1 ],
				'66' => ['name' => 'Kazakhstan', 'time_zone' => '', 'status' => 1 ],
				'67' => ['name' => 'Korea (North)', 'time_zone' => '', 'status' => 1 ],
				'68' => ['name' => 'Korea (South)', 'time_zone' => '', 'status' => 1 ],
		    '69' => ['name' => 'Kuwait', 'time_zone' => 'Asia/Kuwait', 'status' => 1 ],
				'70' => ['name' => 'Kyrgyzstan', 'time_zone' => '', 'status' => 1 ],
				'71' => ['name' => 'Laos', 'time_zone' => '', 'status' => 1 ],
				'72' => ['name' => 'Latvia', 'time_zone' => '', 'status' => 1 ],
		    '73' => ['name' => 'Lebanon', 'time_zone' => 'Asia/Beirut', 'status' => 1 ],
				'74' => ['name' => 'Liberia', 'time_zone' => '', 'status' => 1 ],
				'75' => ['name' => 'Liechtenstein', 'time_zone' => '', 'status' => 1 ],
				'76' => ['name' => 'Lithuania', 'time_zone' => '', 'status' => 1 ],
				'77' => ['name' => 'Luxembourg', 'time_zone' => '', 'status' => 1 ],
				'78' => ['name' => 'Macedonia', 'time_zone' => '', 'status' => 1 ],
				'79' => ['name' => 'Malaysia', 'time_zone' => '', 'status' => 1 ],
				'80' => ['name' => 'Malta', 'time_zone' => '', 'status' => 1 ],
				'81' => ['name' => 'Mauritius', 'time_zone' => '', 'status' => 1 ],
				'82' => ['name' => 'Mexico', 'time_zone' => '', 'status' => 1 ],
				'83' => ['name' => 'Mongolia', 'time_zone' => '', 'status' => 1 ],
				'84' => ['name' => 'Mozambique', 'time_zone' => '', 'status' => 1 ],
				'85' => ['name' => 'Namibia', 'time_zone' => '', 'status' => 1 ],
				'86' => ['name' => 'Nepal', 'time_zone' => '', 'status' => 1 ],
				'87' => ['name' => 'Netherlands Antilles', 'time_zone' => '', 'status' => 1 ],
				'88' => ['name' => 'Netherlands', 'time_zone' => '', 'status' => 1 ],
				'89' => ['name' => 'New Zealand', 'time_zone' => '', 'status' => 1 ],
				'90' => ['name' => 'Nicaragua', 'time_zone' => '', 'status' => 1 ],
				'91' => ['name' => 'Nigeria', 'time_zone' => '', 'status' => 1 ],
				'92' => ['name' => 'North Korea', 'time_zone' => '', 'status' => 1 ],
				'93' => ['name' => 'Norway', 'time_zone' => '', 'status' => 1 ],
		    '94' => ['name' => 'Oman', 'time_zone' => 'Asia/Muscat', 'status' => 1 ],
		    '95' => ['name' => 'Pakistan', 'time_zone' => 'Asia/Karachi', 'status' => 1 ],
				'96' => ['name' => 'Panama', 'time_zone' => '', 'status' => 1 ],
				'97' => ['name' => 'Paraguay', 'time_zone' => '', 'status' => 1 ],
				'98' => ['name' => 'Peru', 'time_zone' => '', 'status' => 1 ],
				'99' => ['name' => 'Philippines', 'time_zone' => '', 'status' => 1 ],
				'100' => ['name' => 'Poland', 'time_zone' => '', 'status' => 1 ],
		    '101' => ['name' => 'Qatar', 'time_zone' => 'Asia/Qatar', 'status' => 1 ],
				'102' => ['name' => 'Romania', 'time_zone' => '', 'status' => 1 ],
				'103' => ['name' => 'Russia', 'time_zone' => '', 'status' => 1 ],
				'104' => ['name' => 'Saint Helena', 'time_zone' => '', 'status' => 1 ],
		        '105' => ['name' => 'Saudi Arabia', 'time_zone' => 'Asia/Riyadh', 'status' => 1 ],
				'106' => ['name' => 'Serbia', 'time_zone' => '', 'status' => 1 ],
				'107' => ['name' => 'Seychelles', 'time_zone' => '', 'status' => 1 ],
				'108' => ['name' => 'Singapore', 'time_zone' => '', 'status' => 1 ],
				'109' => ['name' => 'Slovenia', 'time_zone' => '', 'status' => 1 ],
				'110' => ['name' => 'Solomon Islands', 'time_zone' => '', 'status' => 1 ],
				'111' => ['name' => 'Somalia', 'time_zone' => '', 'status' => 1 ],
				'112' => ['name' => 'South Africa', 'time_zone' => '', 'status' => 1 ],
				'113' => ['name' => 'South Korea', 'time_zone' => '', 'status' => 1 ],
				'114' => ['name' => 'Spain', 'time_zone' => '', 'status' => 1 ],
				'115' => ['name' => 'Sri Lanka', 'time_zone' => '', 'status' => 1 ],
				'116' => ['name' => 'Sweden', 'time_zone' => '', 'status' => 1 ],
				'117' => ['name' => 'Switzerland', 'time_zone' => '', 'status' => 1 ],
				'118' => ['name' => 'Suriname', 'time_zone' => '', 'status' => 1 ],
				'119' => ['name' => 'Syria', 'time_zone' => '', 'status' => 1 ],
				'120' => ['name' => 'Taiwan', 'time_zone' => '', 'status' => 1 ],
				'121' => ['name' => 'Thailand', 'time_zone' => '', 'status' => 1 ],
				'122' => ['name' => 'Trinidad and Tobago', 'time_zone' => '', 'status' => 1 ],
				'123' => ['name' => 'Turkey', 'time_zone' => '', 'status' => 1 ],
				'124' => ['name' => 'Tuvalu', 'time_zone' => '', 'status' => 0 ],
				'125' => ['name' => 'Ukraine', 'time_zone' => '', 'status' => 0 ],
				'126' => ['name' => 'United Kingdom', 'time_zone' => '', 'status' => 1 ],
				'127' => ['name' => 'Uruguay', 'time_zone' => '', 'status' => 1 ],
				'128' => ['name' => 'Uzbekistan', 'time_zone' => '', 'status' => 1 ],
				'129' => ['name' => 'Vatican City', 'time_zone' => '', 'status' => 1 ],
				'130' => ['name' => 'Venezuela', 'time_zone' => '', 'status' => 1 ],
				'131' => ['name' => 'Vietnam', 'time_zone' => '', 'status' => 1 ],
				'132' => ['name' => 'Yemen', 'time_zone' => '', 'status' => 1 ],
				'133' => ['name' => 'Zimbabwe', 'time_zone' => '', 'status' => 0 ],
				'134' => ['name' => 'United Arab Emirates', 'time_zone' => '', 'status' => 1 ]
		];
		foreach ( $country as $value ) {
			Country::create ( [ 
					'country_name' => $value['name'],
					'time_zone' => $value['time_zone'],
			         'status' => $value['status']
			]
			 );
		}
	}
}
