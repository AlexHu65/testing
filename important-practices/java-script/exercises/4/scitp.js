/**
 * Created by alejandro.chavez on 6/2/2017.
 */


function sum(x) {

    if (validateSumNumber(x)) {
        x = x || 0;
        return this.number + x;
    }

    return alert('Sum is not valid or is a string');
}

function validateSumNumber(number) {
    if (typeof number === "string") {
        return false;
    }
    return true;

}


myObject = new Object();
myObject.number = 5;

result = sum.call(myObject, 20);
console.log(result);




