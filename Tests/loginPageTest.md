#Manual Tests for Login Page (login.html)

| No.  | Steps to Reproduce  | Expected Behaviour |
| :-----: |:-----------------------------------------------------| :-----------------------------------------------------------------------|
| 1 | Type and enter pricereview.cf/login.html into browser        | The login screen should be displayed   |
| 2 | Tap on the "Login" button without login credentials     	   | Ask user to input an email    |
| 3 | Tap on the "Login" button without password credentials       | Ask user to input a password    |
| 4 | Tap on the "Login" button with login  credentials     	   | Allow user access to their account    |
| 5 | Tap on the "Forgot Password" button                          | Redirects to the reset_pass.html     |
| 6 | Tap on the "Sign Up" button with only first name credentials | Asks user to enter a full name     |
| 7 | Tap on the "Sign Up" button with only full name credentials  | Ask for email    |
| 8 | Tap on the "Sign Up" button with full name and email credentials     | Ask user to input a phone number    |
| 9 | Tap on the "Sign Up" button with full name, email, and phone number credentials     | Ask user to input a password    |
| 10 | Tap on the "Sign Up" button with full name, email, and phone number credentials without inputting two matching passwords | Tell the user the passwords don't match |
| 11 | Tap on the "Sign Up" button with all credentials filled properly | Redirect user to index.html |
| 12 | Tap on the "Sign Up" button with an invalid email | Asks the user "Please enter your email address in format:
mail@example.com" |
