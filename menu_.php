<?php
//menu.php

//$totalPrice = array_sum($_POST('Price'));

//Toppings array[]
$typeMeat = new Meat(1,"Beef Burger","100% all beef ⅓ lbs. Burger pattie",2.99);
$meats[] = $typeMeat;

$typeMeat = new Meat(2,"Beef Dog","100% all beef ¼ lbs. Beef hot dog",1.99);
$meats[] = $typeMeat;

$typeMeat = new Meat(3,"Turkey Burger","100% ⅓ lbs. turkey pattie",3.49);
$meats[] = $typeMeat;

$typeMeat = new Meat(4,"Turkey Dog","100% ¼ lbs. turkey dog",2.49);
$meats[] = $typeMeat;

$typeMeat = new Meat(5,"Sausage Burger","100% ⅓ lbs. pork pattie",2.49);
$meats[] = $typeMeat;

$typeMeat = new Meat(6,"Sausage Dog","100% ¼ lbs. pork link",1.49);
$meats[] = $typeMeat;

$typeMeat = new Meat(7,"Lamb Burger","100% ⅓ lbs. lamb pattie",3.99);
$meats[] = $typeMeat;

$typeMeat = new Meat(8,"Chicken Burger","100% ⅓ lbs. chicken pattie",2.99);
$meats[] = $typeMeat;

$typeMeat = new Meat(9,"Chicken Dog","100% ¼ lbs. chicken link",2.49);
$meats[] = $typeMeat;

//Toppings array[]
$typeTopping = new Toppings(1,"Onions","Chopped white onions",0.25);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(2,"Pickles","Dill pickles",0.25);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(3,"Relish","Pickle relish",0.25);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(4,"Tomato","Fresh red heirloom tomatoes",0.25);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(5,"Condiments","Ketchup, mustard, and mayo are all free",0.00);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(6,"Cheddar","Vermont cheddar cheese",0.50);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(7,"Monterey Jack","Wisconsin monterey jack cheese",0.50);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(8,"Swiss","Switzerland swiss cheese",0.50);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(9,"Gouda","Holland smoked gouda cheese",0.99);
$toppings[] = $typeTopping;

$typeTopping = new Toppings(10,"Velveeta","Liquid American cheese",0.25);
$toppings[] = $typeTopping;

//Sides array[]
$typeSides = new Sides(1,"Fries","Fresh cut potatoes",1.99);
$sides[] = $typeSides;

$typeSides = new Sides(2,"Seasoned Fries","Cajun-style fries",2.49);
$sides[] = $typeSides;

$typeSides = new Sides(3,"Chips","Fresh cut potato chips",1.99);
$sides[] = $typeSides;

$typeSides = new Sides(4,"Onion Rings","Beer-battered onion rings",2.99);
$sides[] = $typeSides;

$typeSides = new Sides(5,"Daily Soups","Specialty soup (made daily)",3.99);
$sides[] = $typeSides;

$typeSides = new Sides(6,"Chili","Chunky homemade chili",3.99);
$sides[] = $typeSides;

//DrinksNDesserts array[]
$typeDrinksNDesserts = new DrinksNDesserts(1,"Small Drink","Pepsi products",0.99);
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(2,"Medium Drink","Pepsi products",1.49);
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(3,"Large Drink","Pepsi products",1.99);
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(4,"Small Milkshake","Handmade ice cream shakes",2.99);
$typeDrinksNDesserts->addFlavor("Vanilla");
$typeDrinksNDesserts->addFlavor("Chocolate");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(5,"Medium Milkshake","Handmade ice cream shakes",3.49);
$typeDrinksNDesserts->addFlavor("Vanilla");
$typeDrinksNDesserts->addFlavor("Chocolate");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(6,"Large Milkshake","Handmade ice cream shakes",3.99);
$typeDrinksNDesserts->addFlavor("Vanilla");
$typeDrinksNDesserts->addFlavor("Chocolate");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(7,"Small Sundae","Handmade ice cream sundaes",3.49);
$typeDrinksNDesserts->addFlavor("Hot fudge");
$typeDrinksNDesserts->addFlavor("Banana split");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(8,"Medium Sundae","Handmade ice cream sundaes",3.99);
$typeDrinksNDesserts->addFlavor("Hot fudge");
$typeDrinksNDesserts->addFlavor("Banana split");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(9,"Large Sundae","Handmade ice cream sundaes",4.99);
$typeDrinksNDesserts->addFlavor("Hot fudge");
$typeDrinksNDesserts->addFlavor("Banana split");
$typeDrinksNDesserts->addFlavor("Strawberry");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(10,"Brownie","Double chocolate fudge",1.99);
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(11,"Cookie","Fresh baked cookies",1.99);
$typeDrinksNDesserts->addFlavor("Chocolate chip");
$typeDrinksNDesserts->addFlavor("Peanut butter");
$drinks[] = $typeDrinksNDesserts;

$typeDrinksNDesserts = new DrinksNDesserts(12,"Coffee Cake","Homemade coffee cakes",1.99);
$drinks[] = $typeDrinksNDesserts;

//utilizing the var_dump() function
echo '<pre>';
var_dump($meats);
var_dump($toppings);
var_dump($sides);
var_dump($drinks);
echo '</pre>';


class Meat{//start Meat class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Meat Class

class Toppings{//start Toppings class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Toppings class

class Sides{//start Sides class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
}//end Sides class

class DrinksNDesserts{//start DrinksNDessert class
    //properties
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Flavor = '';
    
    public function __construct($ID,$Name,$Description,$Price){//start constructor
        //variables
        $this->ID = (int)$ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = (float)$Price;
    }//end constructor
    
    public function addFlavor($flavor){//start addExtra
        //variables
        $this->Flavor[] = $flavor;
        
    }//end addExtra()
}//end DrinksNDessert class
