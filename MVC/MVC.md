# MVC Research
## Topics 
1. [Model-View-Controller Architecture](#model-view-controller-architecture)
1. [Model in MVC](#model-in-mvc)
1. [View in MVC](#view-in-mvc)
1. [Controller in MVC](#controller-in-mvc)
1. [Separation of Concerns in MVC](#separation-of-concerns-in-mvc)


### Model-View-Controller Architecture
The Model-View-Controller (MVC) framework is an architectural/design pattern that separates an application into three main logical components Model, View, and Controller. Each architectural component is built to handle specific development aspects of an application. It isolates the business logic and presentation layer from each other. It was traditionally used for desktop graphical user interfaces (GUIs). Nowadays, MVC is one of the most frequently used industry-standard web development frameworks to create scalable and extensible projects. It is also used for designing mobile apps.

MVC was created by Trygve Reenskaug. The main goal of this design pattern was to solve the problem of users controlling a large and complex data set by splitting a large application into specific sections that all have their own purpose.

Features of MVC :
It provides a clear separation of business logic, UI logic, and input logic.
It offers full control over your HTML and URLs which makes it easy to design web application architecture.
It is a powerful URL-mapping component using which we can build applications that have comprehensible and searchable URLs.
It supports Test Driven Development (TDD).
![](data:image/png;base64,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)

### Model in MVC
- The Model object knows all about all the data that need to be displayed.
- The Model represents the application data and business rules that govern to an update of data.
- Model is not aware about the presentation of data and How the data will be display to the browser.

### View in MVC
- The Model object knows all about all the data that need to be displayed.
- The Model represents the application data and business rules that govern to an update of data.
- Model is not aware about the presentation of data and How the data will be display to the browser.

### Controller in MVC
- Whenever the user sends a request for something, it always goes through Controller.
- A controller is responsible for intercepting the request from view and passes to the model for appropriate action.
- After the action has been taken on the data, the controller is responsible for directly passes the appropriate view to the user.
- In graphical user interfaces, controller and view work very closely together.

### Separation of Concerns in MVC
Separation of Concerns (SoC) is a fundamental principle in software engineering and design aimed at breaking down complex systems into smaller, more manageable parts. The goal is to organize a system’s components in a way that each part addresses a single concern, or a cohesive aspect of functionality, rather than mixing multiple concerns together. This approach enhances modularity, maintainability, and scalability of software systems.

**someone said on Stackoverflow**

"Later, if I need to adjust to show their name+small avatar, I can just update this one method and hey-presto, my app is updated."

Think about just that little piece for moment. Now take a look at Stack Overflow and notice all of the places that your username appears. Does it look the same in each case? No, at the top you've just got an envelope next to your username followed by your reputation and badges. In a question thread you've got your avatar followed by your username with your reputation and badges below it. Do you think that there is a user object with methods like getUserNameWithAvatarInFrontOfItAndReputationAndBadgesUnderneath() ? Nah.

An object is concerned with the data it represents and methods that act on that data. Your user object will probably have firstName and lastName members, and the necessary getters to retrieve those pieces. It might also have a convenience method like toString() (in Java terms) that would return the user's name in a common format, like the first name followed by a space and then the last name. Aside from that, the user object shouldn't do much else. It is up to the client to decide what it wants to do with the object.

Take the example that you've given us with the user object, and then think about how you would do the following if you built a "UI" into it:

Create a CSV export showing all users, ordered by last name. E.g. Lastname, Firstname.
Provide both a heavyweight GUI and a Web-based interface to work with the user object.
Show an avatar next to the username in one place, but only show the username in another.
Provide an RSS list of users.
Show the username bold in one place, italicized in another, and as a hyperlink in yet another place.
Show the user's middle initial where appropriate.
If you think about these requirements, they all boil down to providing a user object that is only concerned with the data that it should be concerned with. It shouldn't try to be all things to everyone, it should just provide a means to get at user data. It is up to each of the many views you will create to decide how it wants to display the user data.

## References
- [Model-View-Controller Architecture](https://www.geeksforgeeks.org/mvc-framework-introduction/)
- [Model in MVC](https://www.javatpoint.com/php-mvc-architecture)
- [View in MVC](https://www.javatpoint.com/php-mvc-architecture)
- [Controller in MVC](https://www.javatpoint.com/php-mvc-architecture)
- [Separation of Concerns in MVC](https://www.geeksforgeeks.org/separation-of-concerns-soc/)