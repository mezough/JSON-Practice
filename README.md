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

### Access Array

To access elements in an array, you use the index of the element, starting from 0. In the provided example, myArray[0] accesses the first element "John", and myArray[3] accesses the fourth element 36.

```javascript
let myArray = ["John", "Doe", 69000, 36, "M", true];
console.log(myArray[0]); // Output: John
console.log(myArray[3]); // Output: 36
```

### Access Nested Data

To access nested data in an object or array, you use dot notation for objects and array indexing for arrays. In your example, myObj.tsmith[2] accesses the third element (42) from the array stored in the tsmith key.

```javascript
let myObj = {
  ref: { name: 0, last: 1, age: 2 },
  jdoe: ["John", "Doe", 39],
  tsmith: ["Tom", "Smith", 42],
};
console.log(myObj.ref.last); // Output: 1
console.log(myObj.tsmith[2]); // Output: 42
```

### Parsing Techniques

**Parsing techniques** in JSON involve converting JSON strings into JavaScript objects using _JSON.parse()_ and vice versa using _JSON.stringify()_.

```javascript
const obj = JSON.parse('{"name":"Ram", "age":25, "city":Kolkata"}');
console.log(obj.name); // Output: Ram
// OR
let myJsonText = '{ "name": "abdel", "address": "france" }';
let myJsObject = JSON.parse(myJsonObject);
```

### Parsing JSON Arrays

Parsing JSON arrays is done using JSON.parse(), which converts a JSON string representing an array into a JavaScript array.

```javascript
const text = '["Ford", "BMW", "Ferrari", "TATA"]';
const myArr = JSON.parse(text);
console.log(myArr[0]); // Output: Ford
```

### Encoding JSON in PHP (json_encode)

PHP _json_encode()_ function is used for encoding JSON in PHP. This function returns the JSON representation of a value on success or FALSE on failure.

```php
<?php
$phpArray=['name', 'address'];
var_dump($phpArray);

$json=json_encode($phpArray);
var_dump($json);
?>
```

Will result:

```php
// array(2) { [0]=> string(4) "name" [1]=> string(7) "address" }
// string(18) "["name","address"]"
```

If you want to print on the page:

```php
<?php
foreach($phpArray as $arr){
    echo $arr. '<br>';
    }
?>
```

will result:

```php
// name
// address
```

### Decoding JSON in PHP (json_decode)

PHP _json_decode()_ function is used for decoding JSON in PHP. This function returns the value decoded from json to appropriate PHP type.

```php
<?php
$json='["name", "address"]';
var_dump($json);

$phpArray= json_decode($json);
var_dump($phpArray);
?>
```

Will result:

```php
// string(19) "["name", "address"]"
// array(2) { [0]=> string(4) "name" [1]=> string(7) "address" }
```

If you want to print on the page:

```php
<?php
foreach($phpArray as $arr){
echo $arr. '<br>';
}
?>
```

will result:

```php
// name
// address
```

### Load JSON Data With _jQuery_ by **$getJSON**

> _comment:_ it should be loaded with the live server

The _getJSON()_ method is used to get JSON-encoded data from the server using an AJAX HTTP GET request.
**Syntax**

> $(selector).getJSON(url,data,success(data,status,xhr))

**Parameters:** This method accepts three parameters as mentioned above and described below:

- **url:** It is a required parameter. It is used to specify the URL in the form of a string to which the request is sent
- **data:** It is an optional parameter that specifies data that will be sent to the server.
- **callback function:** It is also an optional parameter that runs when the request succeeds.
  - **data:** contains the data returned from the server.
  - **status:** contains a string containing request status ("success", "notmodified", "error", "timeout", or "parsererror").
  - **xhr:** contains the XMLHttpRequest object

**Return Value:** It returns XMLHttpRequest object.
