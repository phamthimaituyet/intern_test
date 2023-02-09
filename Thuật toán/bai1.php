<?php
    $output = [];
    if (isset($_GET['input1'])) {
        $input = explode(' ', trim($_GET['input1']));
        $input_unique = array_unique($input);   // ham kiem tra trung lap trong mang
        $sub_array = array_fill(count($input_unique), count($input) - count($input_unique), "*");   // dien "" vao mang
        $output = array_merge($input_unique, $sub_array);   // ghep mang
    }
?>

<h5 class="mt-3">Bài 1: Loại bỏ các số trùng nhau trong mảng</h5>
<p>Nhập các số cách nhau 1 dấu cách</p>
<div class="input-group mb-3">
    <input type="Nhập mảng" name="input1" class="form-control" value="<?php echo (isset($_GET['input1'])) ? $_GET['input1'] : '';?>">
    <button class="btn btn-outline-secondary">In ra kết quả</button>
</div>
Output: <?php echo '[' . implode(', ', $output) . ']'; ?>
