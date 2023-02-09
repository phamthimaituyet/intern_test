<h5 class="mt-3">Bài 2: In ra số duy nhất xuất hiện 1 trong mảng</h5>
<p>Nhập các số cách nhau 1 dấu cách</p>
<div class="input-group mb-3">
    <input type="Nhập mảng" name="input2" class="form-control" value="<?php echo (isset($_GET['input2'])) ? $_GET['input2'] : '';?>">
    <button class="btn btn-outline-secondary">In ra kết quả</button>
</div>

<?php
    if (isset($_GET['input2'])) {
        $input = explode(' ', trim($_GET['input2']));
        $count_values = array_count_values($input);
        $output = array_filter($count_values, function ($item) {
            return $item == 1;
        });
        
        echo "Output : " . array_keys($output)[0];
    }
?>
