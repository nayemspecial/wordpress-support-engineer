**প্রথম কোড সেট:**

```
function getInfo(param1, param2) {
    param1.name = "Nayemur Rahman";
    param2 = 2023;
}

const person = { name: "Nayem", year: 2022 };
const year = 2000;

getInfo(person, year);
console.log(person.name);
console.log(person.year);
console.log(year);
```
এই কোডে, `param1` হলো একটি অবজেক্ট (বা `person`), এবং `param2` হলো একটি প্রাইমিটিভ মান (অথবা `year`)। ফাংশনটি `param1` এর `name` প্রোপার্টি মডিফাই করে এবং `param2` এ নতুন মান (`2023`) অ্যাসাইন করে।

ফাংশন কল করার পরে, `person` অবজেক্টের `name` এবং `year` প্রোপার্টির মান লগ করা হয় এবং এক্সট্রা একটি ভ্যারিয়েবল `year` এর মান লগ করা হয়।

**দ্বিতীয় কোড সেট:**

```
function getInfo(obj, year) {
  obj.name = "tanvir";
  obj.year = 2022;
  year = 2023;
  return year;
}

const person = { name: "abdullah", year: 2000 };
const year = 1990;

console.log(getInfo(person, year)); 
console.log(person.name);
console.log(person.year);
```

এই কোডে, `getInfo` ফাংশনটি সহজে অবজেক্ট `obj` এবং প্রাইমিটিভ মান `year` এর মান মডিফাই করে। এটির সাথে `year` ভ্যারিয়েবলকে ফাংশনের ভিতরেও পরিবর্তন করা হয় এবং এর আপডেটেড মানটি **রিটার্ন** করা হয়।

ফাংশন কল করার পরে, আপনি দেখতে পাচ্ছেন যে, প্রথম লগটি এক্সেস করলে `year` এর আপডেটেড মানটি দেখা যাচ্ছে, এবং তারপরে `person` অবজেক্টের `name` এবং `year` প্রোপার্টির মানগুলি লগ করা হচ্ছে।

**মুখ্য পার্থক্যগুলি:**

1. **রিটার্ন ভ্যালু:**
   - প্রথম কোড সেটে, `getInfo` কোনো ভ্যালু রিটার্ন করে না (`undefined`)।
   - দ্বিতীয় কোড সেটে, `getInfo` প্রথম `year` এর আপডেটেড মানটি রিটার্ন করে।

2. **`year` এর পরিবর্তন:**
   - প্রথম কোড সেটে, standalone ভ্যারিয়েবল `year` ফাংশন কল করার পরেও অপরিবর্তিত রয়েছে।
   - দ্বিতীয় কোড সেটে, standalone ভ্যারিয়েবল `year` ফাংশনের ভিতরে পরিবর্তন হয় এবং এর আপডেটেড মানটি রিটার্ন করা হয়।
