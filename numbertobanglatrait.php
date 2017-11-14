<?php
namespace Numbertobangla\Numbertobangla;
/**
 * summary
 */
class Numbertobangla
{
    /**
     * convert english integer to bangla integer
     */

    private $bnaglaArray = [1=>"১",2=>"২",3=>"৩",4=>"৪",5=>"৫",6=>"৬",7=>"৭",8=>"৮",9=>"৯",0=>"০"];
    
    

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
        'Jan'=>'জুন',
        'Mar'=>'মার্চ',
        'Feb'=>'ফেব্রুয়ারি',
        'Apr'=>'এপ্রিল',
        'Aug'=>'অগাস্ট',
        'Sep'=>'সেপ্টেম্বর',
        'Oct'=>'অক্টোবর',
        'Nov'=>'নভেম্বর',
        'Dec'=>'ডিসেম্বর'
    ];
    private $banglamonth = [1=>'জানুয়ারী',2=>'ফেব্রুয়ারি',3=>'মার্চ',4=>'এপ্রিল',5=>'মে',6=>'জুন',7=>'জুলাই',8=>'অগাস্ট',9=>'সেপ্টেম্বর',10=>'অক্টোবর',11=>'নভেম্বর',12=>'ডিসেম্বর'];

    private $day;
    private $month;
    private $year;
    private $error;


    public function monthtobangla($date)
    {
        if (strpos($date, '-') !== false) 
        {
            $dateArray = explode('-', $date);

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

}

$bangla = new Numbertobangla();
$abc = $bangla->number(9856565656);
echo $abc.'<br/>';
$date = $bangla->monthtobangla('7-31-2017');
echo $date;
