<?php

namespace Mraahe\Nepalib;

class Nepalib {

	public function nepalitext($num){
		$eka =["मात्र",
		"एक","दुई","तीन","चार","पाँच","छ","सात","आठ","नौ","दश",
		"एघार","बाह्र","तेह्र","चौध","पन्ध्र","सोह्र","सत्र","अठार","उन्नाइस","बीस",
		"एक्काइस्","बाइस","तेइस","चौबीस","पच्चीस","छब्बीस","सत्ताइस","अठ्ठाइस","उन्नतीस","तीस",
		"एकतीस","बत्तीस","तेत्तीस","चौंतीस","पैतीस","छत्तीस","सठ्तीस","अठ्तीस","उन्नचालीस","चालीस",
		"एकचालीस","बयालीस","त्रिचालीस","चौवालीस","पैतालीस","छयालीस","सठ्चालीस","अठ्चालीस","उन्नपचास","पचास",
		"एक्काउन्न","बाउन्न","त्रीपन्न","चौवन्न","पच्पन्न","छपन्न","सन्ताउन","अन्ठाउन्न","उन्नसाठ्ठी","साठ्ठी",
		"एकसाठ्ठी","बासठ्ठी","त्रीसठ्ठी","चौंसठ्ठी","पैसठ्ठी","छैसठ्ठी","सत्सठ्ठी","अठ्सठ्ठी","उन्नसत्तरी","सत्तरी",
		"एकत्तर","बहत्तर","त्रीयत्तर","चौहत्तर","पचहत्तर","छयत्तर","सतत्तर","अठत्तर","उन्नअसी","असी",
		"एकासी","बयासी","त्रीयासी","चौरासी","पचासी","छयासी","सतासी","अठासी","उन्ननम्बे","नम्बे",
		"एकानम्बे","बयानम्बे","त्रीयानम्बे","चौरानम्बे","पन्चानम्बे","छयानम्बे","सन्तानम्बे","अन्ठानम्बे","उन्नसय"
		];
		$saye=["","खर्ब","अर्ब","करोड","लाख","हजार","सय",""];
		$str="";
		$count=0;
		$div=100000000000;
		for($i=1;$i<8;++$i){
			$temp=floor($num/$div);
			if($temp!=0){	
				$str=$str.$eka[$temp]." ".$saye[$i]." ";
				$count++;
			}
			$num=$num-$temp*$div;
			if($i==1){	$div/=100;	}
			if($i==2){	$div/=100;	}
			if($i==3){	$div/=100;	}
			if($i==4){	$div/=100;	}
			if($i==5){	$div/=10;	}
			if($i==6){	$div/=100;	}
		}
		return $str;
	}
	
  
  public function englishtext($num) {
		$ones =["Zero",
		"One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten",
		"Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixtenn","Seventeen","Eighteen","Ninteen","Twenty",
		"Twenty One","Twenty Two","Twenty Three","Twenty Four","Twenty Five","Twenty Six","Twenty Seven","Twenty Eight","Twenty Nine","Thirty",
		"Thirty One","Thirty Two","Thirty Three","Thirty Four","Thirty Five","Thirty Six","Thirty Seven","Thirty Eight","Thirty Nine","Fourty",
		"Fourty One","Fourty Two","Fourty Three","Fourty Four","Fourty Five","Fourty Six","Fourty Seven","Fourty Eight","Fourty Nine","Fifty",
		"Fifty One","Fifty Two","Fifty Three","Fifty Four","Fifty Five","Fifty Six","Fifty Seven","Fifty Eight","Fifty Nine","Sixty",
		"Sixty One","Sixty Two","Sixty Three","Sixty Four","Sixty FIve","Sixty Six","Sixty Seven","Sixty Eight","Sixty Nine","Seventy",
		"Seventy One","Seventy Two","Seventy Three","Seventy Four","Seventy Five","Seventy Six","Seventy Seven","Seventy Eight","Seventy Nine","Eighty",
		"Eighty One","Eighty Two","Eighty Three","Eighty Four","Eighty Five","Eighty Six","Eighty Seven","Eighty Eight","Eighty Nine","Ninty",
		"Ninty One","Ninty Two","Ninty Three","Ninty Four","Ninty Five","Ninty Six","Ninty Seven","Ninty Eight","Ninty Nine"
		];
		$saye=["","Kharba","Arba","Crore","Lakh","Thousand","Hundred",""];
		$str="";
		$count=0;
		$div=100000000000;
		for($i=1;$i<8;++$i)
		{
			$temp=floor($num/$div);
			if($temp!=0) {
				$str=$str.$ones[$temp]." ".$saye[$i]." ";
				$count++;
			}
			$num=$num-$temp*$div;
			//echo $num;
			if($i==1){	$div/=100;	}
			if($i==2){	$div/=100;	}
			if($i==3){	$div/=100;	}
			if($i==4){	$div/=100;	}
			if($i==5){	$div/=10;	}
			if($i==6){	$div/=100;	}
		}
		return $str;
		}

}

?>
