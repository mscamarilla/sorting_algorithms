//O(n log n)
function quick_sort(arr, l = 0, r = arr.length - 1) {
    let l1 = l;
    let r1 = r;
    let x = arr[(l + r) >> 1];

    while (l <= r) {
        while (arr[l] < x) l++;
        while (arr[r] > x) r--;

        if (l <= r) {
            [arr[l], arr[r]] = [arr[r], arr[l]];
            l++;
            r--;
        }
    }

    if (l1 < r) {
        quick_sort(arr, l1, r);
    }

    if (l < r1) {
        quick_sort(arr, l, r1);
    }

    return arr;

}

let arr = [41, 32, 40, 90, 18, 7, 77, 49, 49, 92, 16];
console.log(arr);
console.log(quick_sort(arr));