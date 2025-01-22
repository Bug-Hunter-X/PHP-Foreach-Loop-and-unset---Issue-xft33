# PHP Foreach Loop and unset() Issue

This repository demonstrates a common, yet subtle, error in PHP when using the `unset()` function within a `foreach` loop that iterates over an array.  The example code shows how `unset()` can disrupt the loop's iteration, leading to unexpected behavior and skipped elements.  The solution provides a safer and more reliable alternative.

## The Bug

The `bug.php` file contains the problematic code.  It aims to remove the element with the value `2` from the array.  However, due to the way `unset()` interacts with the internal array pointer of the `foreach` loop, subsequent elements are skipped after removing the element with value `2`.