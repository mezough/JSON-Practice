## JSON practice

## **Accessing JSON Data**

Accessing JSON data involves using keys to retrieve values from an object or array. In most programming languages, this can be done using dot notation or bracket notation to access nested elements.

### Access Object

Accessing an object in JavaScript involves using either dot notation (object.key) or bracket notation (object["key"]).

```javascript
let person = {
  firstName: "Michael",
  lastName: "Brown",
  age: 34,
  gender: "M",
  income: 85000,
  isMarried: true,
};

person.firstName; // "Michael"
person["lastName"]; // "Brown"
person.age; // 34
person.other; // undefined
person[0]; // undefined
```

### Access Array of Objects

To access an array of objects in JavaScript, you would typically reference the object first and then access its properties using dot or bracket notation.

```javascript
let myObj = {
  name: "John",
  age: 36,
  married: true,
};
console.log(myObj.name); // Output: John
console.log(myObj.age); // Output: 36
```
