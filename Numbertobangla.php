<?php

class Numbertobangla
{
    /**
     * convert english integer to bangla integer
     */

    private $bnaglaArray = [
        '1'=>"১",
        '2'=>"২",
        '3'=>"৩",
        '4'=>"৪",
        '5'=>"৫",
        '6'=>"৬",
        '7'=>"৭",
        '8'=>"৮",
        '9'=>"৯",
        '0'=>"০",
        '01'=>"০১",
        '02'=>"০২",
        '03'=>"০৩",
        '04'=>"০৪",
        '05'=>"০৫",
        '06'=>"০৬",
        '07'=>"০৭",
        '08'=>"০৮",
        '09'=>"০৯",
];
    
    

    public function number($num)
    {
    	$banglanumber = [];

        if (!is_array($num)) 
        {

        	$number = array_map('intval', str_split($num));

        	foreach ($number as $n) 
        	{
        		if(array_key_exists($n, $this->bnaglaArray))
        		{
        			array_push($banglanumber, $this->bnaglaArray[$n]);
        		}
        	}
        	return implode("", $banglanumber);
        }
    }

    private $banglish = [
        'January'=>'জানুয়ারী',
        'March'=>'মার্চ',
        'February'=>'ফেব্রুয়ারি',
        'April'=>'এপ্রিল',
        'May'=>'মে',
        'June'=>'জুন',
        'July'=>'জুলাই',
        'August'=>'অগাস্ট',
        'September'=>'সেপ্টেম্বর',
        'October'=>'অক্টোবর',
        'November'=>'নভেম্বর',
        'December'=>'ডিসেম্বর',
        'Jan'=>'জানু',
        'Mar'=>'মার্চ',
        'Feb'=>'ফেব্রুয়ারি',
        'Apr'=>'এপ্রিল',
        'Aug'=>'অগাস্ট',
        'Sep'=>'সেপ্টেম্বর',
        'Oct'=>'অক্টোবর',
        'Nov'=>'নভেম্বর',
        'Dec'=>'ডিসেম্বর'
    ];

    private $banglamonth = [
        "1"=>'জানুয়ারী',
        "2"=>'ফেব্রুয়ারি',
        "3"=>'মার্চ',
        "4"=>'এপ্রিল',
        "5"=>'মে',
        "6"=>'জুন',
        "7"=>'জুলাই',
        "8"=>'অগাস্ট',
        "9"=>'সেপ্টেম্বর',
        "10"=>'অক্টোবর',
        "11"=>'নভেম্বর',
        "12"=>'ডিসেম্বর',
        "01"=>'জানুয়ারী',
        "02"=>'ফেব্রুয়ারি',
        "03"=>'মার্চ',
        "04"=>'এপ্রিল',
        "05"=>'মে',
        "06"=>'জুন',
        "07"=>'জুলাই',
        "08"=>'অগাস্ট',
        "09"=>'সেপ্টেম্বর',
    ];

    private $day;
    private $month;
    private $year;
    private $error;


    public function monthtobangla($date)
    {
        if (strpos($date, '-') !== false) 
        {
            $dateArray = explode('-', $date);
            return $this->array2bangladate($dateArray);

        }elseif(strpos($date, '/') !== false)
        {
            $dateArray = explode('/', $date);
            return $this->array2bangladate($dateArray);

        }
    }


    private function array2bangladate($dateArray)
    {
        if($dateArray[1] < 13)
            {
                if(array_key_exists($dateArray[1],$this->banglamonth))
                {
                    $this->month = $this->banglamonth[$dateArray[1]];
                }
                elseif (array_key_exists($dateArray[1],$this->banglish))
                {
                    $this->month = $this->banglish[$dateArray[1]];
                }else
                {
                    $this->error = "Wrong month formate";
                }


                $this->day  = $this->number($dateArray[0]);
                $this->year = $this->number($dateArray[2]);
                
                return $this->day.'-'.$this->month.'-'.$this->year;

            }else{
                if(array_key_exists($dateArray[0],$this->banglamonth))
                {
                    $this->month = $this->banglamonth[$dateArray[0]];
                }
                elseif (array_key_exists($dateArray[0],$this->banglish))
                {
                    $this->month = $this->banglish[$dateArray[0]];
                }else{
                    $this->error =  "Wrong month formate";
                }

                $this->day  = $this->number($dateArray[1]);
                $this->year = $this->number($dateArray[2]);

                return $this->month .'-'.$this->day.'-'.$this->year;
            }
    }

}
