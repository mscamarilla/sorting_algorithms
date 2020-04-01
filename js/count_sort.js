//O(n)
function count_sort(arr) {

    //нужно знать самое большое число в массиве
    let MAXN = Math.max.apply(null, arr);

    let count = Array(MAXN + 1).fill(0);

    for (let i = 0; i < arr.length; i++) {
        count[arr[i]]++;
    }

    let index = 0;
    for (let i = 0; i <= MAXN; i++) {
        if (count[i]) {
            let k = count[i];
            while (k-- > 0) arr[index++] = i;
        }
    }

    return arr;
}

let arr = [41, 32, 40, 90, 18, 7, 77, 49, 49, 92, 16];
console.log(arr);
console.log(count_sort(arr));