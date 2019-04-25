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
+ Trying to submit the form without data threw some error feedback as expected
+ Submitting the form with one field entered threw error as expected
+ If an input is asking for a number, try entering some of the following combinations: decimal numbers, negative numbers, letters, symbols, an extremely large number, etc.
+ Try and access a URL on their site that likely does not exist (e.g. http://a3.domain.com/asdjfks)
+ Etc.

__Summarize what you tried, and describe any unexpected/undesirable outcomes.__

(Even if you don't find any issues, having the reviewee see what you tried might give them insight into things they did not think to test.)



## 3. Code: Routes
Skim through the student's code on Github.

Find their routes file (`routes/web.php`). Thinking about ideal Route/Controller organization&mdash; is there any code in this file that should be happening in a Controller?

If yes, describe.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Is template inheritance used?
+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
+ Did they do anything in PHP that could have been done in Blade?
+ Did they use any Blade syntax/techniques you were unfamiliar with?

## 5. Code: General
Address as many of the following points as applicable:

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
+ Are there any best practices discussed in course material that you feel were not addressed in the code?
+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
+ Are there any parts of the code that you don't understand?

## 6. Misc
Do you have any additional comments not covered in the above questions?