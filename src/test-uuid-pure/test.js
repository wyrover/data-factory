var newId = require("uuid-pure").newId;

console.log(newId());

console.log(newId(15));

// 8 字符二进制
console.log(newId(8, 2));

// 8 字符十进制
console.log(newId(8, 10));

// 8 字符十六进制
console.log(newId(8, 16));


var uuid = require("uuid-pure");
var itemId = uuid.withPrefix("/item/");
console.log(itemId());