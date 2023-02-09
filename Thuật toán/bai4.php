<h5 class="mt-3">Bài 4: In ra mảng gồm các phần tử là tất cả các bộ ba giá trị có tổng = 0</h5>
<p>Nhập các số cách nhau 1 dấu cách</p>
<div class="input-group mb-3">
    <input type="Nhập mảng" name="input4" class="form-control" value="<?php echo (isset($_GET['input4'])) ? $_GET['input4'] : '';?>">
    <button class="btn btn-outline-secondary">In ra kết quả</button>
</div>

<?php

    function checkArray($nums) {
        $n = count($nums);
        if ($n < 3 || $n > 3000) {
            return false;
        }
        foreach ($nums as $num) {
            if ($num < -100000 || $num > 100000) {
                return false;
            }
        }
        return true;
    }

    if (isset($_GET['input4'])) {
        $input = explode(' ', trim($_GET['input4']));
        if (checkArray($input)) {
            sort($input);
            $output = array();
            for ($i = 0; $i < count($input) - 2; $i++) {
                if ($i > 0 && $input[$i] == $input[$i - 1]) {
                    continue;
                }
                $left = $i + 1;
                $right = count($input) - 1;
                while ($left < $right) {
                    $sum = $input[$left] + $input[$i] + $input[$right];
                    if ($sum == 0) {
                        $output[] = array($input[$i], $input[$left], $input[$right]);
                        while ($left < $right && $input[$left] == $input[$left + 1]) {
                            $left++;
                        }
                        while ($left < $right && $input[$right] == $input[$right - 1]) {
                            $right--;
                        }
                        $left++;
                        $right--;
                    } elseif ($sum < 0) {
                        $left++;
                    } else {
                        $right--;
                    }
                }
            }
        }
    }
    echo "Output : [";
    foreach ($output as $values) {
        echo '[' . implode(', ', $values) . ']';
    }
    echo "]";
