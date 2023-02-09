<h5 class="mt-3">Bài 3: In ra tổng lớn nhất của các giá trị không liền kề trong mảng</h5>
<p>Nhập các số cách nhau 1 dấu cách</p>
<div class="input-group mb-3">
    <input type="Nhập mảng" name="input3" class="form-control" value="<?php echo (isset($_GET['input3'])) ? $_GET['input3'] : '';?>">
    <button class="btn btn-outline-secondary">In ra kết quả</button>
</div>

<?php
    if (isset($_GET['input3'])) {
        $input = explode(' ', trim($_GET['input3']));
        $old_array = getArrayFilter($input, 'old');
        $even_array = getArrayFilter($input);
        echo "Output : ";
        echo (array_sum($old_array) > array_sum($even_array) ? array_sum($old_array) : array_sum($even_array));
    }

    function getArrayFilter ($arr = [], $filter = 'even') {
        $result = array_filter($arr, function($key) use ($filter) {
            return $filter == 'even' ? $key % 2 == 0 : $key % 2 == 1;
        }, ARRAY_FILTER_USE_KEY);

        return $result;
    }
