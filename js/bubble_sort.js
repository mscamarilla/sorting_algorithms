//O(n^2)
function buble_sort(arr) {
    for (let j = 0; j < arr.length; j++) {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] > arr[i + 1]) {
                [arr[i], arr[i + 1]] = [arr[i + 1], arr[i]];
            }
        }
    }

    return arr;
}

let arr = [41, 32, 40, 90, 18, 7, 77, 49, 49, 92, 16];
console.log(arr);
console.log(buble_sort(arr));