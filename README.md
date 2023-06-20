
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

  GET|HEAD   api/user 
  GET|HEAD   authors/{author} 
  GET|HEAD   categories/{category}
  GET|HEAD   post/{post} ......... postdetails › PostController@show
  GET|HEAD   posts/{category_id?} ............... index › HomeController@index