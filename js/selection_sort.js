//O(n^2)
function selection_sort(arr) {
    for (let i = 0; i < arr.length; i++) {
        let min = 1e9;
        let minIndex = -1;

        for (let j = i; j < arr.length; j++) {
            if (arr[j] < min) {
                min = arr[j];
                minIndex = j;
            }
        }
        [arr[i], arr[minIndex]] = [arr[minIndex], arr[i]];
    }
    return arr;
}


let arr = [41, 32, 40, 90, 18, 7, 77, 49, 49, 92, 16];
console.log(arr);
console.log(selection_sort(arr));