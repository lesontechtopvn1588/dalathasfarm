<?php

/**
 * 
 */
class IndexController
{
	
	/* one way:
	 for case two array same length (trường hợp hai mảng có chiều dài bằng nhau)
	*/
	public function compare_array_case_1($arr_1, $arr_2) {
		$point_arr_1 = 0;
		$point_arr_2 = 0;
		if (!is_array($arr_1) || !is_array($arr_2)) {
			echo "Enter arr_1 or arr_2 wrong";
			exit;
		} else {
			for ($i = 0; $i < count($arr_1); $i++) {
				if ($arr_1[$i] > $arr_2[$i]) {
					$point_arr_1++;
				} elseif ($arr_1[$i] < $arr_2[$i]) {
					$point_arr_2++;
				} 
			}
			return array($point_arr_1, $point_arr_2);
		}
	}

	/* two way:
	 for case two array different length (trường hợp hai mảng có chiều dài khác nhau)
	*/
	public function compare_array_case_2($arr_1, $arr_2) {
		$point_arr_1 = 0;
		$point_arr_2 = 0;
		$length = count($arr_1) < count($arr_2) ? count($arr_1) : count($arr_2);
		if (!is_array($arr_1) || !is_array($arr_2)) {
			echo "Enter arr_1 or arr_2 wrong";
			exit;
		} else {
			for ($i = 0; $i < $length; $i++) {
				if ($arr_1[$i] > $arr_2[$i]) {
					$point_arr_1++;
				} elseif ($arr_1[$i] < $arr_2[$i]) {
					$point_arr_2++;
				} 
			}
			return array($point_arr_1, $point_arr_2);
		}
	}

	/* three way:
	 for case two array different length (trường hợp hai mảng có chiều dài khác nhau. nếu phần tử của mảng ít hơn không có thì gán giá trị bằng 0 để so sánh)
	*/
	public function compare_array_case_3($arr_1, $arr_2) {
		$point_arr_1 = 0;
		$point_arr_2 = 0;
		$length = count($arr_1) > count($arr_2) ? count($arr_1) : count($arr_2);
		if (!is_array($arr_1) || !is_array($arr_2)) {
			echo "Enter arr_1 or arr_2 wrong";
			exit;
		} else {
			for ($i = 0; $i < $length; $i++) {
				$arr_1[$i] = isset($arr_1[$i]) ? $arr_1[$i] : 0;
				$arr_2[$i] = isset($arr_2[$i]) ? $arr_2[$i] : 0;
				if ($arr_1[$i] > $arr_2[$i]) {
					$point_arr_1++;
				} elseif ($arr_1[$i] < $arr_2[$i]) {
					$point_arr_2++;
				} 
			}
			return array($point_arr_1, $point_arr_2);
		}
	}

}

$ob = new IndexController;

//case 1
// $arr_1 = [5, 6, 7];
// $arr_2 = [3, 6, 10];
// $points = $ob->compare_array_case_1($arr_1, $arr_2);
// echo "A nhận được ".$points[0]." điểm. B nhận được ".$points[1]." điểm <br>";
// //echo "<pre>";
// print_r($points);
// //echo "</pre>";

//case 2
// $arr_1 = [5, 6, 7, 8, 9];
// $arr_2 = [3, 6, 10, 8, 3, 9, 4, 12];
// $points = $ob->compare_array_case_2($arr_1, $arr_2);
// echo "A nhận được ".$points[0]." điểm. B nhận được ".$points[1]." điểm <br>";
// echo "<pre>";
// print_r($points);
// echo "</pre>";

//case 3
$arr_1 = [5, 6, 7, 8, 9];
$arr_2 = [3, 6, 10, 8, 3, 9, 4, 12];
$points = $ob->compare_array_case_3($arr_1, $arr_2);
echo "A nhận được ".$points[0]." điểm. B nhận được ".$points[1]." điểm <br>";
echo "<pre>";
print_r($points);
echo "</pre>";


