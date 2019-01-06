# Edgar

Dear Disqo team,

please find how to launch the application and the structure of the API bellow .



## Application launching

	1)Create virtual host which refers to public folder or open terminal from project folder and run php artisan:serve  
    2)Run php artisan:migrate --seed
    3)run php artisan passport:install

## Api structure

- URL  
	/api/notes/:note 
- HTTP Method  
	GET
- Operation  
	Returns  note with given id if it owned by Auth user
- Api Call Example 
	api/notes/1

	
- URL  
	/api/notes
- HTTP Method 
	GET
- Operation
	Returns all notes if they owned by Auth user
- Api Call Example 
	api/notes

	
- URL  
	api/notes
- HTTP Method  
	POST
- Operation  
	Create note and assign it to Auth user 
- Api Call Example 
	api/notes



- URL  
	api/notes/:note
- HTTP Method  
	PUT
- Operation  
	Update given note if it owned by Auth user 
- Api Call Example 
	api/notes/1
	
- URL  
	api/notes/:note
- HTTP Method  
	DELETE
- Operation  
	Delete given note if it owned by Auth user 
- Api Call Example 
	api/notes/1	


## Design Principles and Design Patterns

1)Repository  
2)Dependency Injection
3)SOLID
4)DRY


## Functionality to pay attention

1)Scope (See Note Model)
2)RepositoryServiceProvider (See App\Providers\)