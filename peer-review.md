## P3 Peer Review

+ Reviewer's name: Kehinde Afolabi
+ Reviwee's name: Jeremy S
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/jeremysouthgate/p3>*


## 1. Interface
Address as many of the following points as applicable:

+ The interface was pretty simple and easy to navigate
+ The were hints displaying the various functions of each part so no parts were confusing
+ The check box to add text background did not keep its state(remain checked) after form submission.
+ The interface is perfect for me


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

Examples...
+ Trying to submit the form without data threw some error feedback as expected, form not submitted
+ Submitting the form with one field entered threw error as expected and the form is not submitted
+ this project has no number field
+ Accessing a non-existing url on the project site threw a laravel 404 error
+ I tried checking the add a background checkbox without choosing a background selects a default background which is perfect because i did not expect the image background to be empty when a add text background is checked



## 3. Code: Routes
I skimmed through the routing script and i can say the routing code is perfect

If yes, describe.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ template inheritance is used
+ there are no separation of concern issues
+ the reviewee strictly stuck to the blade development logic
+ I am familiar with all the blade syntax used

## 5. Code: General
Address as many of the following points as applicable:

+ The codes were consistent with the course notes on code style
+ there were no errors when i ran the project url through the w3c html validator
+ The code sty;e shows the reviewee has a good grasp of the code techiques required for this project

## 6. Misc
The reviewee did a good job