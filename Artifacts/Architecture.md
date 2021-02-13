Project: Price Review

# Program Organization

This document is in reference to the [System Context diagram](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/System%20Context%20diagram%20for%20Price%20Review.png), [Container Diagram](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/Container%20diagram%20for%20Price%20Review.png), and [Component diagram](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/Component%20Diagram%20for%20Price%20Review%20-%20API%20Application.png) for API app.

These documents work from the highest level down to a specific level of each of the components of the system.

The System Context diagram shows the highest level which could be used to explain the system to someone with little technological knowledge. It showcases how our software system will work with outside systems and the user.

The Container diagram "zooms" in and shows more complexity in the organization of our website. This shows how the user will interact with the website and how responsibilities are split up among the components. This stage also showcases how the containers manage data responsibilities so that it is secure as well as how our API will handle different requests.

The Component Diagram for the API application shows the inner workings of the API and the different presenters that work on different requests. There are 6 lower level containers that are encapsulated by the API application itself. Each of these breaks down different requests and shows how the containers work with each other.

# [Code Design](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/COP4331_LowLevel_UML.jpg)

Generic Class Product:
Stores private data on products such as quantity and price. Allows editing and removing of a product.
Generic Class User:
Stores user data such as email and product. Can save products and search for other verified users.
Generic Class Categories:
Organizes the products with different tags.
Generic Class Review:
Contains the information of the review description and the original user who posted. Methods for interacting with a review with adding, deleting, and rating reviews.
Generic Class TopReview:
Will create special descriptive tags for trendy products.

# [Data Design](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/Database%20ER%20Diagram.png)

In the database diagram we will have three different sections to hold in the database. Firstly, we will have a Product section that will hold a product ID that will be the primary key to differentiate amongst different products. Then simple descriptive items that will describe the product and store in the data base. Following we will have a review portion to the database, and this is where the reviews will be held. The primary keys that will belong in this portion will include the product ID, user ID, and the review ID to easily allocate reviews in case of verification of policy terms. In the review portion we will include times posted, username of the poster, a yes or no if the user is verified, etc. Lastly, we will have the user section of the database which will hold the user ID, the usernames passwords, and personal information.

# Business Rules

Check reviews integrity and verify customer's email address.

# [User Interface Design](https://github.com/CSTeam19/TeamProject/blob/main/Artifacts/UI_Diagram.pdf)

The application will be a website, so the user will click and navigate, and be able to type when needed. When user arrives to the main page, they can login if they are not already logged in. If logged in, then they can view their profile. Clicking on view their profile takes user to their account page where they can view their posts/comments, their items and their reviews. Both of them can be filtered additionally with newest, oldest and top(most liked) posts, items or reviews. User can view their profile pic and name, and they can also edit their info. On the main page again user can view trending posts, clicking on this takes the user to a trending posts page where they can view top post, and additional posts under. Trending posts will consist of posts of the same day, and top post will be ranked by most comments/interactions. On main page user can click on top reviews and top posts, which will take them to a top posts and a top reviews page respectively. In each, they are able to view by a list of each post/review and when clicked on will take them to either a “view post” or “view review” page. On each page, user can view the user of the poster/reviewer, their text, and the comments under related to the post/review. Clicking on user profile takes the user to view that persons page, which will be similar to the “my account info” of the user except that they will be able to report user instead of having the “edit my info” feature. The next feature on the main page is “Top items”, which they can click and be prompted to a top items page where they can view a list of items or search for an item. Clicking on an item will take them to a view item page. The view item page will show an image of item, along with info of the product such as a description and cost etc. Under the item one can view top posts and reviews. This will prompt the user to the top posts and top reviews page respectively, for that specific item, which will eventually take user to the View post/view review. Back to the main page, user is able to make a post, in order to make a post, the user has to be signed in. After being signed in, or being signed in already, user will be taken to make post/review page where they will be able to add text, and then info that is applicable such as retail site which they used, the cost and then the actual rating. User can also add pictures of the product.

# Resource Management

In the system the resource management will be more focused on database connections.
As an example : Consumer Group    Memory Resource Allocation:
Review: 50%
Products: 35%
Users: 15%

# Security

Security will include password hashing, security questions to change password and user input validation.

# Performance

Implement an efficient search algorithm.

# Scalability

Our idea has large scalability potential. In the beginning we will have a handful of products and reviews and as time progresses more users will continuously add more products. Thus nonetheless giving us no choice but to increase the size of the database and server volume.

# Interoperability

It does not apply to our system for now

# Internationalization/Localization

As a start the product will be local

# Input/Output

The input/output architecture of our design will be a look-behind approach. Due to the fact that input and output will be user reviews and will have to be verified before being posted to the public.

# Error Processing

Most of our error checking will be primarily corrective and protective. Corrective as it will prevent invalid data being inputted to prevent unwanted user data and passive because there is no error prediction.

# Fault Tolerance

Most of errors will be input handling. To overcome the problem we will inform the user for re-input as a well as providing correct input example.

# Architectural Feasibility

Our project is feasible the only concern is data scalability.

# Overengineering

The design does not face any redundancies.

# Build-vs-Buy Decisions

Third party products are : use Keepa API to get amazon products list

# Reuse

In the project a lot of system calls will be reused, considering that the page layouts will be the same. Every page will just have the corresponding product with their own reviews.

# Change Strategy

We are implementing Agile methodology, so, changes are welcome any time.

