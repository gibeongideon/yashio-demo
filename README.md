
Test 3
1. Create a Laravel route that maps to a controller action named "HomeController@index".
2. In the HomeController, write a method named "index" that retrieves the latest five posts from the "Post" model and passes them to a view for display.
3. Create a view to display the retrieved posts in a list format.
4. Add a route parameter to the route created in step 1, allowing the user to pass a category ID to retrieve only posts from a specific category.
5. Update the HomeController@index method to handle the optional category parameter and retrieve posts accordingly.




Task 1
1. Create a new tag model.
2. Prepare columns for id, name in the TAG table.
3. Associate the tag model with the Post model.
4. This relationship between the Post model and the tag model is Many to Many: the Post model can have multiple tags, and the tag model can have multiple posts.
5. Tags associated with Post should be displayed as follows.


ROUTES:



  GET|HEAD  dashboard ..................................................................................................................... dashboard
  POST      email/verification-notification .................................. verification.send › Auth\EmailVerificationNotificationController@store
  GET|HEAD  forgot-password .............................................................. password.request › Auth\PasswordResetLinkController@create
  POST      forgot-password ................................................................. password.email › Auth\PasswordResetLinkController@store
  GET|HEAD  login ................................................................................ login › Auth\AuthenticatedSessionController@create
  POST      login ......................................................................................... Auth\AuthenticatedSessionController@store  
  POST      logout ............................................................................. logout › Auth\AuthenticatedSessionController@destroy
  PUT       password ............................................................................... password.update › Auth\PasswordController@update
  GET|HEAD  post/{post} ........................................................................................... postdetails › PostController@show
  GET|HEAD  posts/{category_id?} ....................................................................................... index › HomeController@index
  GET|HEAD  profile ........................................................................................... profile.edit › ProfileController@edit
  PATCH     profile ....................................................................................... profile.update › ProfileController@update
  DELETE    profile ..................................................................................... profile.destroy › ProfileController@destroy
  GET|HEAD  register ................................................................................ register › Auth\RegisteredUserController@create
  POST      register ............................................................................................ Auth\RegisteredUserController@store
  POST      reset-password ........................................................................ password.store › Auth\NewPasswordController@store
  GET|HEAD  reset-password/{token} ............................................................... password.reset › Auth\NewPasswordController@create
  GET|HEAD  sanctum/csrf-cookie ................................................... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
  GET|HEAD  verify-email ............................................................... verification.notice › Auth\EmailVerificationPromptController
  GET|HEAD  verify-email/{id}/{hash} ............................................................... verification.verify › Auth\VerifyEmailController