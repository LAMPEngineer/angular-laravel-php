/*!
 * Highest Profit v0.0.1
 */

let highestProfit = (arr,k) => {
    let sum = 0;
   // let values = [];
    for (let i =0; i< k; i++) {
        let highestIndex = arr.indexOf(Math.max(...arr));    
        sum += arr[highestIndex];
      //  values.push(arr[highestIndex]);
        arr[highestIndex] = arr[highestIndex] - 1;
    }
//    console.log(values);
    return sum;
    
}