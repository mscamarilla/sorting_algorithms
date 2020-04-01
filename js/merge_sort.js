//O(n log n)
function merge_sort(arr) {

    let len = arr.length;

    if (len < 2) {
        return arr;
    }

    let middle = Math.floor(len / 2);
    let left = arr.slice(0, middle);
    let right = arr.slice(middle);

    return merge(merge_sort(left), merge_sort(right))

}

function merge(left, right) {
    let result = [],
        i = 0,
        j = 0;

    while (i < left.length && j < right.length) {

        if (left[i] < right[j]) {
            result.push(left[i++]);
        } else {
            result.push(right[j++]);
        }
    }

    return result.concat(left.slice(i)).concat(right.slice(j))

}

let arr = [41, 32, 40, 90, 18, 7, 77, 49, 49, 92, 16];
console.log(arr);
console.log(merge_sort(arr));