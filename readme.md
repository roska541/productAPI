## Products API 

A simple Product RESTful API containing: 
- Products
- Users
- Users Products

### Installation: 

- Clone the repo to your local environment 
- Set up your .env file to match your database 
- Seed the database running ``` php artisan db:seed
                            ```

### Routing 

You can view the available routes in the command ``` php artisan route:list ```


### Database:

- Products consists on the following columns: Name, Brand, Size  (small, medium, large, xl) and color
- Users consists on: Name, Email and Password
- User Products consists : product id , user id and the quantity of the products.

Retrieve all Products:
``` GET /api/products ```

Retrieve a single product
``` GET /api/products/{PRODUCT ID} ```

Retrieve user products: 
 ``` GET /api/user_products/{USER ID} ```
 
Delete a Product 
 ``` DELETE /api/products/{PRODUCT ID} ```
