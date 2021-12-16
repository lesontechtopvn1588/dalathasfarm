class Test:
	def __init__(self, arg):
		super(Test, self).__init__()
		self.arg = arg

	def compare_array_case_1(arr_1, arr_2):
		point_arr_1 = 0
		point_arr_2 = 0
		length = len(arr_1) if len(arr_1) < len(arr_2) else len(arr_2)
		for i in range(0, length):
			if arr_1[i] > arr_2[i]:
				point_arr_1 += 1
			elif arr_1[i] < arr_2[i]:
				point_arr_2 += 1
		return [point_arr_1, point_arr_2]
				
ob = Test;
arr_1 = [5, 6, 7];
arr_2 = [3, 6, 10];
points = ob.compare_array_case_1(arr_1, arr_2)
print("A nhận được",points[0],"điểm. B nhận được",points[1],"điểm")
print(points)
