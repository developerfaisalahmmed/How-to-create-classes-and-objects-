How to create classes and objects?

Object-oriented programming is a programming style in which it is customary to group all of the variables and functions of a particular topic into a single class. Object-oriented programming is considered to be more advanced and efficient than the procedural style of programming. This efficiency stems from the fact that it supports better code organization, provides modularity, and reduces the need to repeat ourselves. That being said, we may still prefer the procedural style in small and simple projects. However, as our projects grow in complexity, we are better off using the object oriented style.
With this chapter, we are going to take our first steps into the world of object oriented PHP by learning the most basic terms in the field:

    Class
    Object
    Method
    Property

    How to create classes?
    In order to create a class, we group the code that handles a certain topic into one place. For example, we can group all of the code that handles the users of a blog into one class, all of the code that is involved with the publication of the posts in the blog into a second class, and all the code that is devoted to comments into a third class.
    To name the class, it is customary to use a singular noun that starts with a capital letter. For example, we can group a code that handles users into a User class, the code that handles posts into a Post class, and the code that is devoted to comments into a Comment class.
    For the example given below, we are going to create a Car class into which we will group all of the code which has something to do with cars.
    class Car {
    // The code
    }

    class Car {
    // The code
    }

     We declare the class with the class keyword.
    We write the name of the class and capitalize the first letter.
    If the class name contains more than one word, we capitalize each word. This is known as upper camel case. For example, JapaneseCars, AmericanIdol, EuropeTour, etc.
     We circle the class body within curly braces. We put our code within the curly braces.

How to add properties to a class?
We call properties to the variables inside a class. Properties can accept values like strings, integers, and booleans (true/false values), like any other variable. Let’s add some properties to the Car class.
class Car {
public $comp;
public $color = "beige";
public $hasSunRoof = true;
}
class Car {
public $comp;
public $color = "beige";
public $hasSunRoof = true;
}

    We put the public keyword in front of a class property.
    The naming convention is to start the property name with a lower case letter.
    If the name contains more than one word, all of the words, except for the first word, start with an upper case letter. For example, $color or $hasSunRoof.
     A property can have a default value. For example, $color = ‘beige’.
     We can also create a property without a default value. See the property $comp in the above example

How to create objects from a class?
We can create several objects from the same class, with each object having its own set of properties.
In order to work with a class, we need to create an object from it. In order to create an object, we use the new keyword. For example:
$bmw = new Car ();

    We created the object $bmw from the class Car with the new key word.
     The process of creating an object is also known as instantiation

We can create more than one object from the same class.
$bmw = new Car ();
$mercedes = new Car ();

In fact, we can create as many objects as we like from the same class, and then give each object its own set of properties.
Objects, what are they good for?
While in the procedural style of programming, all of the functions and variables sit together in the global scope in a way that allows their use just by calling their name, the use of classes makes anything inside the classes hidden from the global scope. That’s because the code inside the classes is encapsulated within the class scope, outside the reach of the global scope. So, we need a way to allow the code from the global scope to use the code within the class, and we do this by creating objects from a class.
I say objects, and not object, because we can create as many objects as we would like from the same class and they all will share the class’s methods and properties. See the image below:
exampleofclass
From the same Car class, we created three individual objects with the name of: Mercedes, Bmw, and Audi.
Although all of the objects were created from the same class and thus have the class’s methods and properties, they are still different. This is not only, because they have different names, but also because they may have different values assigned to their properties. For example, in the image above, they differ by the color property – the Mercedes is green while the Bmw is blue and the Audi is orange.
The message to take home is:

A class holds the methods and properties that are shared by all of the objects that are created from it.
Although the objects share the same code, they can behave differently because they can have different values assigned to them.
How to get an object’s properties?
Once we create an object, we can get its properties. For example:
echo $bmw -> color;
echo $mercedes -> color;
echo $bmw -> color;
echo $mercedes -> color;

    In order to get a property, we write the class name, and then dash greater than (->), and then the property name.
     Note that the property name does not start with the $ sign; only the object name starts with a $.

Result: beige
beige
How to set an object property?
In order to set an object property, we use a similar approach.
For example, in order to set the color to ‘blue’ in the bmw object:
$bmw -> color = 'blue';

and in order to set the value of the $comp property for both objects:
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

Once we set the value of a property, we can get its value. In order to get the color of the $bmw, we use the following line of code:
 echo $bmw -> color;
 echo $bmw -> color;

Result: blue
We can also get the company name and the color of the second car object
echo $mercedes -> color;
echo $mercedes -> comp;
echo $mercedes -> color;
echo $mercedes -> comp;

Result: beige
Mercedes Benz
How to add methods to a class?
The classes most often contain functions. A function inside a class is called a method. Here we add the method hello() to the class with the prefix public.
class Car {
public $comp;
public $color = "beige";
public $hasSunRoof = true;
public function hello()
{
return "beep";
}
}
class Car {
public $comp;
public $color = "beige";
public $hasSunRoof = true;
public function hello()
{
return "beep";
}
}

    We put the public keyword in front of a method.
    The naming convention is to start the function name with a lower case letter.
     If the name contains more than one word, all of the words, except for the first word, start with an upper case letter. For example, helloUser() or flyPanAm().

We can approach the methods similar to the way that we approach the properties, but we first need to create at least one object from the class.
$car1 = new Car ();
$car2 = new Car ();
echo $car1 -> hello();
echo $car2 -> hello();
$car1 = new Car ();
$car2 = new Car ();
echo $car1 -> hello();
echo $car2 -> hello();

Result: beep
beep
Here is the full code that we have written during this tutorial:

<?php
// Declare the class
class Car {
// Properties
public $comp;
public $color = "beige";
public $hasSunRoof = true;
// Method that says hello
public function hello()
{
return "beep";
}
}
// Create an instance
$bmw = new Car ();
$mercedes = new Car ();
// Get the values
echo $bmw -> color; // beige
echo "<br />";
echo $mercedes -> color; // beige
echo "<hr />";
// Set the values
$bmw -> color = "blue";
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
How to create classes and objects? 12
// Get the values again
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";
// Use the methods to get a beep
echo $bmw -> hello(); // beep
echo "<br />";
echo $mercedes -> hello(); // beep
