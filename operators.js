"use strict";

/* =====================================================
   JAVASCRIPT OPERATORS – NODE.JS (FULL DEMO)
   ===================================================== */

console.log("=== JAVASCRIPT OPERATORS DEMO (NODE.JS) ===\n");

/* -----------------------------------------------------
   1. ARITHMETIC OPERATORS
----------------------------------------------------- */
let a = 10, b = 3;
console.log("1. Arithmetic Operators");
console.log("a + b =", a + b);
console.log("a - b =", a - b);
console.log("a * b =", a * b);
console.log("a / b =", a / b);
console.log("a % b =", a % b);
console.log("a ** b =", a ** b);
console.log();

/* -----------------------------------------------------
   2. ASSIGNMENT OPERATORS
----------------------------------------------------- */
let x = 5;
console.log("2. Assignment Operators");
x += 2; console.log("x += 2 →", x);
x -= 1; console.log("x -= 1 →", x);
x *= 3; console.log("x *= 3 →", x);
x /= 2; console.log("x /= 2 →", x);
x %= 4; console.log("x %= 4 →", x);
console.log();

/* -----------------------------------------------------
   3. COMPARISON OPERATORS
----------------------------------------------------- */
console.log("3. Comparison Operators");
console.log("5 == '5'  →", 5 == "5");
console.log("5 === '5' →", 5 === "5");
console.log("5 != 3    →", 5 != 3);
console.log("5 !== '5' →", 5 !== "5");
console.log("5 > 3     →", 5 > 3);
console.log("5 <= 3    →", 5 <= 3);
console.log();

/* -----------------------------------------------------
   4. LOGICAL OPERATORS
----------------------------------------------------- */
let p = true, q = false;
console.log("4. Logical Operators");
console.log("p && q →", p && q);
console.log("p || q →", p || q);
console.log("!p     →", !p);
console.log();

/* -----------------------------------------------------
   5. BITWISE OPERATORS
----------------------------------------------------- */
let m = 5, n = 1;
console.log("5. Bitwise Operators");
console.log("m & n  →", m & n);
console.log("m | n  →", m | n);
console.log("m ^ n  →", m ^ n);
console.log("~m     →", ~m);
console.log("m << 1 →", m << 1);
console.log("m >> 1 →", m >> 1);
console.log();

/* -----------------------------------------------------
   6. INCREMENT / DECREMENT OPERATORS
----------------------------------------------------- */
let i = 10;
console.log("6. Increment / Decrement");
console.log("i++ →", i++);
console.log("after i++ →", i);
console.log("++i →", ++i);
console.log("i-- →", i--);
console.log("after i-- →", i);
console.log();

/* -----------------------------------------------------
   7. CONDITIONAL (TERNARY) OPERATOR
----------------------------------------------------- */
let age = 18;
console.log("7. Ternary Operator");
let eligibility = (age >= 18) ? "Eligible to Vote" : "Not Eligible";
console.log(eligibility);
console.log();

/* -----------------------------------------------------
   8. TYPE OPERATORS
----------------------------------------------------- */
console.log("8. Type Operators");
console.log("typeof age →", typeof age);
console.log("age instanceof Number →", age instanceof Number);
console.log();

/* -----------------------------------------------------
   9. STRING OPERATOR
----------------------------------------------------- */
let s1 = "Hello", s2 = "World";
console.log("9. String Operator");
console.log(s1 + " " + s2);
console.log();

/* -----------------------------------------------------
   10. NULLISH COALESCING OPERATOR
----------------------------------------------------- */
let value = null;
console.log("10. Nullish Coalescing Operator");
console.log(value ?? "Default Value");
console.log();

/* -----------------------------------------------------
   11. OPTIONAL CHAINING OPERATOR
----------------------------------------------------- */
let user = { profile: { name: "Sathya" } };
console.log("11. Optional Chaining Operator");
console.log(user?.profile?.name);
console.log(user?.address?.city);
console.log();

/* -----------------------------------------------------
   END
----------------------------------------------------- */
console.log("=== END OF PROGRAM ===");
