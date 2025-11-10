## Exercise 1 level 1
In this release, I've refactored the OlympicGames program according to the S principle of SOLID, which states that each class should have its own responsibilities, 
freeing them from excess functions and generating clearer, cleaner code. At this point, the Athletess class represents the athletes and their information, as does the Events class, which represents the events. 
The Results class is responsible for collecting all the information, while the OlympicGames class displays it in an organized manner.

## Exercise 2 level 1
In this second installment, I've refactored the program that manages different types of payments. 
To do this, I've used an interface implemented by the classes that reference payment types, such as bank transfer, PayPal, and Stripe. 
Finally, I've added a PaymentProcessor class, which handles processing payments for each payment method.

## Exercise 1 level 2
In this first exercise, I created an abstract Instrument class and implemented a ToPlay interface for it. 
From there, I simply represented each instrument with its own class. 
This system is more efficient because it allows me to extend the code as much as I want without having to modify the core of my program. 
Tomorrow I could add a violin class, and the day after a trumpet class, and so on.

## Exercise 2 level 2
In this case, I've refactored the code so that it's not necessary to introduce unnecessary functions into the different classes. 
We have a Washing Machine class and a Water Heater class. What we've done is create three different interfaces to give each appliance the functions it needs, such as washing for the washing machine or heating for the water heater. 
But we've also included a two-function interface that represents turning a machine on and off, an interface that both classes share.
