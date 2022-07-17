## E-commerce Laravel RESTful API <img height="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

Making a Request
----------------

All requests start with http://127.0.0.1:8000/api

## Available requests

`oauth`
- `POST /oauth/token` - Log In
- `GET /api/user` - Get Token

`products`
- `GET /api/products` - Get all products. Pagination available. No authentication required.
- `GET /api/products/{product}` - Get single products, no authentication required.
- `POST /api/products` - Create a new product, authentication required.
- `PUT /api/products/{product}` - Update only own products, authentication required.
- `DELETE /api/products/{product}` - Delete only own products, authentication required.

`products reviews`
- `GET /api/products/{product}/reviews` - Get all product reviews, no authentication required.
- `POST /api/products/{product}/reviews` - Create new product review, no authentication required.
- `PUT /api/products/{product}/reviews/{review}` - Update product review, no authentication required.
- `DELETE /api/products/{product}/reviews/{review}` - Delete product review, no authentication required.

## Errors
The actions you can access in the API are dependent upon the permission levels assigned to your account. If you find yourself receiving "message": "Unauthenticated."" | Status: <i>401 Unauthorized</i>, please confirm your permission level.

If you find a typo or an error, please send a pull request. You can also submit an issue (which will require a GitHub account) and I will look into it.

If you have questions or trouble implementing the API, you can reach me at 5dzoni5@gmail.com and I will help you out. 

Status Code Explanations
-------

* 400: Bad Request – verify your URL address(route) is correct 
* 401: Invalid or unauthorized API user – verify your API user is valid and authorized to access the API. Contact me if you'd like assistance.
* 404: Model/Review not found - check if the requested product/review exists
* 5xx: Server error - please double-check your JSON payload for formatting errors, data integrity, etc.

Want to Chat?
-------------
Have you found a bug? Do you have an API feature request? [Submit an issue](https://github.com/dzonidevv/Laravel-Passport-API/issues) (requires a GitHub account)
