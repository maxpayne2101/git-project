<?

class Validation
{

	public function checkAllFields($arr){
		if (count($arr) === 0) {
			return false;
		}
		foreach ($arr as $rule => $value) {
			if (!self::checkEmpty($value) || !self::checkType($value) || !self::checkLength($value)) {
				return false;
			}
			switch ($rule) {
				case 'login':
					if (!self::checkLogin($value)) {
						return false;
					}
					break;
				case 'passwd':
					if (!self::checkPasswd($value)) {
						return false;
					}
					break;
				case 'email':
					if (!self::checkEmail($value)) {
						return false;
					}
					break;	
			}
		}
		return true;
	}

	public function checkType($data, $type="string"){
		if (gettype($data) == $type) {
			return true;
		}
		return false;
	}

	public function checkEmpty($data){
		if ($data==="") {
			echo "empty";
			return false;
		}
		return true;
	}	

	public function checkLength($data, $min = 6, $max = 255){
		if (iconv_strlen($data) < $min || iconv_strlen($data) > $max) {
			return false;
		}
		return true;
	}

	public function checkLogin($login){
		
		if (preg_match('|^[\w]{3,127}$|', $login)) {
			return true;
		}	
		
		return false;
	}
	public function checkPasswd($passwd){
		if (preg_match('|^[\w]{3,127}$|',$passwd)) {
			return true;
		}
		return false;
	}
	public function checkEmail($email){
		if (preg_match('|^[\w]{3,127}$|',$email)) {
			return true;
		}
		return false;
	}
	public function checkTel(){

	}
	public function checkText(){

	}
	public function checkFile(){

	}
}
