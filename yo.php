<?php

$curr=array (

 

        'ALL' => 'Albania Lek',

 

        'AFN' => 'Afghanistan Afghani',

 

        'ARS' => 'Argentina Peso',

 

        'AWG' => 'Aruba Guilder',

 

        'AUD' => 'Australia Dollar',

 

        'AZN' => 'Azerbaijan New Manat',

 

        'BSD' => 'Bahamas Dollar',

 

        'BBD' => 'Barbados Dollar',

 

        'BDT' => 'Bangladeshi taka',

 

        'BYR' => 'Belarus Ruble',

 

        'BZD' => 'Belize Dollar',

 

        'BMD' => 'Bermuda Dollar',

 

        'BOB' => 'Bolivia Boliviano',

 

        'BAM' => 'Bosnia and Herzegovina Convertible Marka',

 

        'BWP' => 'Botswana Pula',

 

        'BGN' => 'Bulgaria Lev',

 

        'BRL' => 'Brazil Real',

 

        'BND' => 'Brunei Darussalam Dollar',

 

        'KHR' => 'Cambodia Riel',

 

        'CAD' => 'Canada Dollar',

 

        'KYD' => 'Cayman Islands Dollar',

 

        'CLP' => 'Chile Peso',

 

        'CNY' => 'China Yuan Renminbi',

 

        'COP' => 'Colombia Peso',

 

        'CRC' => 'Costa Rica Colon',

 

        'HRK' => 'Croatia Kuna',

 

        'CUP' => 'Cuba Peso',

 

        'CZK' => 'Czech Republic Koruna',

 

        'DKK' => 'Denmark Krone',

 

        'DOP' => 'Dominican Republic Peso',

 

        'XCD' => 'East Caribbean Dollar',

 

        'EGP' => 'Egypt Pound',

 

        'SVC' => 'El Salvador Colon',

 

        'EEK' => 'Estonia Kroon',

 

        'EUR' => 'Euro Member Countries',

 

        'FKP' => 'Falkland Islands (Malvinas) Pound',

 

        'FJD' => 'Fiji Dollar',

 

        'GHC' => 'Ghana Cedis',

 

        'GIP' => 'Gibraltar Pound',

 

        'GTQ' => 'Guatemala Quetzal',

 

        'GGP' => 'Guernsey Pound',

 

        'GYD' => 'Guyana Dollar',

 

        'HNL' => 'Honduras Lempira',

 

        'HKD' => 'Hong Kong Dollar',

 

        'HUF' => 'Hungary Forint',

 

        'ISK' => 'Iceland Krona',

 

        'INR' => 'India Rupee',

 

        'IDR' => 'Indonesia Rupiah',

 

        'IRR' => 'Iran Rial',

 

        'IMP' => 'Isle of Man Pound',

 

        'ILS' => 'Israel Shekel',

 

        'JMD' => 'Jamaica Dollar',

 

        'JPY' => 'Japan Yen',

 

        'JEP' => 'Jersey Pound',

 

        'KZT' => 'Kazakhstan Tenge',

 

        'KPW' => 'Korea (North) Won',

 

        'KRW' => 'Korea (South) Won',

 

        'KGS' => 'Kyrgyzstan Som',

 

        'LAK' => 'Laos Kip',

 

        'LVL' => 'Latvia Lat',

 

        'LBP' => 'Lebanon Pound',

 

        'LRD' => 'Liberia Dollar',

 

        'LTL' => 'Lithuania Litas',

 

        'MKD' => 'Macedonia Denar',

 

        'MYR' => 'Malaysia Ringgit',

 

        'MUR' => 'Mauritius Rupee',

 

        'MXN' => 'Mexico Peso',

 

        'MNT' => 'Mongolia Tughrik',

 

        'MZN' => 'Mozambique Metical',

 

        'NAD' => 'Namibia Dollar',

 

        'NPR' => 'Nepal Rupee',

 

        'ANG' => 'Netherlands Antilles Guilder',

 

        'NZD' => 'New Zealand Dollar',

 

        'NIO' => 'Nicaragua Cordoba',

 

        'NGN' => 'Nigeria Naira',

 

        'NOK' => 'Norway Krone',

 

        'OMR' => 'Oman Rial',

 

        'PKR' => 'Pakistan Rupee',

 

        'PAB' => 'Panama Balboa',

 

        'PYG' => 'Paraguay Guarani',

 

        'PEN' => 'Peru Nuevo Sol',

 

        'PHP' => 'Philippines Peso',

 

        'PLN' => 'Poland Zloty',

 

        'QAR' => 'Qatar Riyal',

 

        'RON' => 'Romania New Leu',

 

        'RUB' => 'Russia Ruble',

 

        'SHP' => 'Saint Helena Pound',

 

        'SAR' => 'Saudi Arabia Riyal',

 

        'RSD' => 'Serbia Dinar',

 

        'SCR' => 'Seychelles Rupee',

 

        'SGD' => 'Singapore Dollar',

 

        'SBD' => 'Solomon Islands Dollar',

 

        'SOS' => 'Somalia Shilling',

 

        'ZAR' => 'South Africa Rand',

 

        'LKR' => 'Sri Lanka Rupee',

 

        'SEK' => 'Sweden Krona',

 

        'CHF' => 'Switzerland Franc',

 

        'SRD' => 'Suriname Dollar',

 

        'SYP' => 'Syria Pound',

 

        'TWD' => 'Taiwan New Dollar',

 

        'THB' => 'Thailand Baht',

 

        'TTD' => 'Trinidad and Tobago Dollar',

 

        'TRY' => 'Turkey Lira',

 

        'TRL' => 'Turkey Lira',

 

        'TVD' => 'Tuvalu Dollar',

 

        'UAH' => 'Ukraine Hryvna',

 

        'GBP' => 'United Kingdom Pound',

 

        'USD' => 'United States Dollar',

 

        'UYU' => 'Uruguay Peso',

 

        'UZS' => 'Uzbekistan Som',

 

        'VEF' => 'Venezuela Bolivar',

 

        'VND' => 'Viet Nam Dong',

 

        'YER' => 'Yemen Rial',

 

        'ZWD' => 'Zimbabwe Dollar'

 

    );

 

 

 

 

// set API Endpoint and API key

$endpoint = 'latest';

$access_key = '2ab7c6ee5a9204762277c5e141bb3d50';

 

// Initialize CURL:

$ch = curl_init('http://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 

// Store the data:

$json = curl_exec($ch);

curl_close($ch);

 

// Decode JSON response:

$exc = json_decode($json, true);

 

// Access the exchange rate values, e.g. GBP:

?>

<head>

 

<meta charset="UTF-8">

 

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 

<title>Document</title>

 

</head>

 

<body>

 

<form action="yo.php" method="post">

 

    <fieldset>

 

        <legend>Currency Exchange Rate</legend>

 

        <label for="amount" value='1'>Amount :</label>

 

        <input type="number" name="amt" id="amt">

 

        <label for="From">From :</label>

 

        <select name="from_currency" id="from_currency">

 

            <?php

 

                foreach($curr as $id=>$value){

 

                    echo "<option value='$id'>$value</option>";

 

                }

 

            ?>

 

        </select>

 

        <label for="to">To :</label>

 

        <select name="to_currency" id="to_currency">

 

            <?php

 

                foreach($curr as $id=>$value){

 

                    echo "<option value='$id'>$value</option>";

 

                }

 

            ?>

 

        </select>

 

        <button id="submit" name="submit" >Convert</button>

 

    </fieldset>

 

    

 

</form>    

 

 

 

 

 

</body>

 

</html>

 

 

 

<?php

if(isset($_POST['submit'])){

 

$amt = $_POST['amt'];

 

$from = $_POST['from_currency'];

 

$to = $_POST['to_currency'];

 

 

if($from!="USD" or $to!="USD"){

 

    $fromrate = $exc['rates'][$from];

 

    $torate=$exc['rates'][$to];

 

    $exchange = ($torate)/($fromrate);

 

    $total= $exchange*$amt;

 

    echo"<div>

 

    <h1>$total; </h1>

 

</div>";

 

}

 

}

?>