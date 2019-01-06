# Edgar

Dear Disqo team,

please find how to launch the application and the structure of the API bellow .



## Application launching

	1)Create virtual host which refers to public folder or open terminal from project folder and run php artisan:serve  
    2)Run php artisan:migrate --seed
    3)run php artisan passport:install

## Api structure

- URL  
	api/login
- HTTP Method  
	POST
- Operation  
	Send password and email for getting token
- Api Call Example 
	api/login
- cURL Example
    curl --request POST \
  --url http://127.0.0.1:8000/api/login \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --header 'Postman-Token: e078ef37-3bb0-48ca-9307-616fa4d5cb02' \
  --header 'cache-control: no-cache' \
  --data 'title=test%20updated231&note=fsddsdfASD&password=first365224&email=first%40gmail.com&undefined='

- URL  
	api/logout
- HTTP Method  
	POST
- Operation  
	Logging Out
- Api Call Example 
	api/logout
- cURL Example
    curl --request POST \
      --url http://127.0.0.1:8000/api/logout \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQ4YjcyOTdiOWU3YTcwYTU1N2QwOGZiYjE0ODBiZWY0NzA3NjcyMTM4YTM5YTdkNDU3NTRkOGJjYzZiMDk4ZTllZjI0NTM3NjAyNThlOTBhIn0.eyJhdWQiOiIzIiwianRpIjoiZDhiNzI5N2I5ZTdhNzBhNTU3ZDA4ZmJiMTQ4MGJlZjQ3MDc2NzIxMzhhMzlhN2Q0NTc1NGQ4YmNjNmIwOThlOWVmMjQ1Mzc2MDI1OGU5MGEiLCJpYXQiOjE1NDY3ODczNTEsIm5iZiI6MTU0Njc4NzM1MSwiZXhwIjoxNTc4MzIzMzUxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.NRdcUP5kkbZbGSBlvwT9S0oZgx2f8r4IaC79Df3ufDNWLXhgrObkmvPfcZXOJ7hBZ7NSkbORpLgLKRzr8_pr8NEa17FXzYZ1Xe-3oysd5dzmf-5-E2RQ_E5YJd2hrm3dwDFWi4iwYsia13BAEoAYW5FOBXgcty8HJ_j8z6HNDnE3yGysvV2f9TEz-GgIJCRWE4u-zr5OXAkkFxWkHtnikBiYmueRUvsL4HO6tUHjDAF4UC0-DK9TAxGYlnlaX-WbZD87-EF032c-z2-l1jN0JBM8Iabzw0mrPslisYAl6rVXZUJEJakKu3BO_ePc1AnqKRvBGPNe1sRsUbpHh4OOrnZPuKQb-T5v1BxB_zgi1o0wI67dhV0RR0v70xUfx3bJaSl2tFn7aHXC9HlVh9xdGX-gpwb_asNMoSR3hF0-xqJ1SQLjAbEszv8LuiEkykt4Ek9g1cZUg8ZcIL8qnj_UZ4gMoEz45RqMmEl5usahyPWyqPWq8stSI7JT51_tf4Kmndy77DH3FZogvI3TU1_DkbTMPQADEUlrPlDlrjHR56maGW_zufwQNr07CoPgpYRorW79RbIsDqRIE7F5-A0nLMuYodqFE6l-zELhq4kp-omCRBWD7voNgkkGPTC5yGREt34z77Sjn0WHpfoptbVjDbDo1EVuXmWOMzeit9a7wcg' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: 2870ec78-6b87-401a-83ff-f34a54a4f276' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&note=fsddsdfASD&password=first365224&email=first%40gmail.com&undefined='



- URL  
	/api/notes/:note 
- HTTP Method  
	GET
- Operation  
	Returns  note with given id if it owned by Auth user
- Api Call Example 
	api/notes/1
- cURL Example
    curl --request GET \
      --url http://127.0.0.1:8000/api/notes/1 \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiNjA0MGQwYzJkMWZmZTAzZWJlYjU5NmI2NzI2ODQ2ODcwNDE0ZjVlOGJjMWIxNDY3Yjk4Zjk3NGVhZTRkMDYwODgyMWQ4NTM1OTUxZmQ4In0.eyJhdWQiOiIzIiwianRpIjoiYWI2MDQwZDBjMmQxZmZlMDNlYmViNTk2YjY3MjY4NDY4NzA0MTRmNWU4YmMxYjE0NjdiOThmOTc0ZWFlNGQwNjA4ODIxZDg1MzU5NTFmZDgiLCJpYXQiOjE1NDY3ODY3MzksIm5iZiI6MTU0Njc4NjczOSwiZXhwIjoxNTc4MzIyNzM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.HrFi1u0C0P3QtwPFeSNjtWslkRkhsj6v-vvpCLSGl9ylp6gyseo-Tj7XOn5-xMUzmXYufx0kmLCdsR6nW00Wr0SwPB9XKn7nkbvGTcsMoeOzVWdmkNq03rjFtmC_fAgw7TboMssaqg9EZX8okQ_I9yAJywqbSDAXBJp8-A1HoQLfHgsLd6BIGA2QgQIB2Yj5d9cyK-bdY7_aZvlr7icku18Y9IPnmWxNrlScuKqqS9qoVnlt25tuigK7ZaTmX9mAXbfltr2h6Qrn0Myjfwa72arDIThxsYBpDp2RneYq7Gokg63hdhRAJK4x6bLEFac1iduJuzgjFo9kXB7Tt8L4IYvWTZQ5WG62fR7Su1pZqOzWeOKRP7Bvzl9wwKD557ohJgqKHP6UfEf4R3zzcUjmk4stlwuPVQLSCkjVjKp7QLhQFIixVTVAT7x5A1oNfnYVzKEwDr0D2GDbAOlKO130tRoXBgjvSJykirZXHWbeK4_GP9S46_J5Ksp2LCyA58SE0Czw6-xddWWcQNuRo3Mq0HonRs-A2ESSZ5uV9CbuMwL7OSIXuJh5pQW9i4urf7pbwrZsL703MGDgahS-PsxWjq3fY7p3209_d2GkEmLJKTxWKAuHB0RvOiJi6pxpT9H8ClicPlqvok6B7-Hdq0iEcTY6Jrx4JmC8A9gHTZFFdfk' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: d2d82082-1246-4270-9897-153494aa4e10' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&password=first365224&email=first%40gmail.com&undefined='	
	
	

	
- URL  
	/api/notes
- HTTP Method 
	GET
- Operation
	Returns all notes if they owned by Auth user
- Api Call Example 
	api/notes
- cURL Example
    curl --request GET \
      --url http://127.0.0.1:8000/api/notes \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiNjA0MGQwYzJkMWZmZTAzZWJlYjU5NmI2NzI2ODQ2ODcwNDE0ZjVlOGJjMWIxNDY3Yjk4Zjk3NGVhZTRkMDYwODgyMWQ4NTM1OTUxZmQ4In0.eyJhdWQiOiIzIiwianRpIjoiYWI2MDQwZDBjMmQxZmZlMDNlYmViNTk2YjY3MjY4NDY4NzA0MTRmNWU4YmMxYjE0NjdiOThmOTc0ZWFlNGQwNjA4ODIxZDg1MzU5NTFmZDgiLCJpYXQiOjE1NDY3ODY3MzksIm5iZiI6MTU0Njc4NjczOSwiZXhwIjoxNTc4MzIyNzM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.HrFi1u0C0P3QtwPFeSNjtWslkRkhsj6v-vvpCLSGl9ylp6gyseo-Tj7XOn5-xMUzmXYufx0kmLCdsR6nW00Wr0SwPB9XKn7nkbvGTcsMoeOzVWdmkNq03rjFtmC_fAgw7TboMssaqg9EZX8okQ_I9yAJywqbSDAXBJp8-A1HoQLfHgsLd6BIGA2QgQIB2Yj5d9cyK-bdY7_aZvlr7icku18Y9IPnmWxNrlScuKqqS9qoVnlt25tuigK7ZaTmX9mAXbfltr2h6Qrn0Myjfwa72arDIThxsYBpDp2RneYq7Gokg63hdhRAJK4x6bLEFac1iduJuzgjFo9kXB7Tt8L4IYvWTZQ5WG62fR7Su1pZqOzWeOKRP7Bvzl9wwKD557ohJgqKHP6UfEf4R3zzcUjmk4stlwuPVQLSCkjVjKp7QLhQFIixVTVAT7x5A1oNfnYVzKEwDr0D2GDbAOlKO130tRoXBgjvSJykirZXHWbeK4_GP9S46_J5Ksp2LCyA58SE0Czw6-xddWWcQNuRo3Mq0HonRs-A2ESSZ5uV9CbuMwL7OSIXuJh5pQW9i4urf7pbwrZsL703MGDgahS-PsxWjq3fY7p3209_d2GkEmLJKTxWKAuHB0RvOiJi6pxpT9H8ClicPlqvok6B7-Hdq0iEcTY6Jrx4JmC8A9gHTZFFdfk' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: bd433078-e738-4516-8113-04649931d984' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&password=first365224&email=first%40gmail.com&undefined='

	
- URL  
	api/notes
- HTTP Method  
	POST
- Operation  
	Create note and assign it to Auth user 
- Api Call Example 
	api/notes
- cURL Example
    curl --request POST \
      --url http://127.0.0.1:8000/api/notes \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiNjA0MGQwYzJkMWZmZTAzZWJlYjU5NmI2NzI2ODQ2ODcwNDE0ZjVlOGJjMWIxNDY3Yjk4Zjk3NGVhZTRkMDYwODgyMWQ4NTM1OTUxZmQ4In0.eyJhdWQiOiIzIiwianRpIjoiYWI2MDQwZDBjMmQxZmZlMDNlYmViNTk2YjY3MjY4NDY4NzA0MTRmNWU4YmMxYjE0NjdiOThmOTc0ZWFlNGQwNjA4ODIxZDg1MzU5NTFmZDgiLCJpYXQiOjE1NDY3ODY3MzksIm5iZiI6MTU0Njc4NjczOSwiZXhwIjoxNTc4MzIyNzM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.HrFi1u0C0P3QtwPFeSNjtWslkRkhsj6v-vvpCLSGl9ylp6gyseo-Tj7XOn5-xMUzmXYufx0kmLCdsR6nW00Wr0SwPB9XKn7nkbvGTcsMoeOzVWdmkNq03rjFtmC_fAgw7TboMssaqg9EZX8okQ_I9yAJywqbSDAXBJp8-A1HoQLfHgsLd6BIGA2QgQIB2Yj5d9cyK-bdY7_aZvlr7icku18Y9IPnmWxNrlScuKqqS9qoVnlt25tuigK7ZaTmX9mAXbfltr2h6Qrn0Myjfwa72arDIThxsYBpDp2RneYq7Gokg63hdhRAJK4x6bLEFac1iduJuzgjFo9kXB7Tt8L4IYvWTZQ5WG62fR7Su1pZqOzWeOKRP7Bvzl9wwKD557ohJgqKHP6UfEf4R3zzcUjmk4stlwuPVQLSCkjVjKp7QLhQFIixVTVAT7x5A1oNfnYVzKEwDr0D2GDbAOlKO130tRoXBgjvSJykirZXHWbeK4_GP9S46_J5Ksp2LCyA58SE0Czw6-xddWWcQNuRo3Mq0HonRs-A2ESSZ5uV9CbuMwL7OSIXuJh5pQW9i4urf7pbwrZsL703MGDgahS-PsxWjq3fY7p3209_d2GkEmLJKTxWKAuHB0RvOiJi6pxpT9H8ClicPlqvok6B7-Hdq0iEcTY6Jrx4JmC8A9gHTZFFdfk' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: 4254cc58-6bfc-49ea-ae58-35c52fab6b95' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&password=first365224&email=first%40gmail.com&undefined='	



- URL  
	api/notes/:note
- HTTP Method  
	PUT
- Operation  
	Update given note if it owned by Auth user 
- Api Call Example 
	api/notes/1
- cURL Example
    curl --request POST \
      --url http://127.0.0.1:8000/api/notes/3 \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiNjA0MGQwYzJkMWZmZTAzZWJlYjU5NmI2NzI2ODQ2ODcwNDE0ZjVlOGJjMWIxNDY3Yjk4Zjk3NGVhZTRkMDYwODgyMWQ4NTM1OTUxZmQ4In0.eyJhdWQiOiIzIiwianRpIjoiYWI2MDQwZDBjMmQxZmZlMDNlYmViNTk2YjY3MjY4NDY4NzA0MTRmNWU4YmMxYjE0NjdiOThmOTc0ZWFlNGQwNjA4ODIxZDg1MzU5NTFmZDgiLCJpYXQiOjE1NDY3ODY3MzksIm5iZiI6MTU0Njc4NjczOSwiZXhwIjoxNTc4MzIyNzM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.HrFi1u0C0P3QtwPFeSNjtWslkRkhsj6v-vvpCLSGl9ylp6gyseo-Tj7XOn5-xMUzmXYufx0kmLCdsR6nW00Wr0SwPB9XKn7nkbvGTcsMoeOzVWdmkNq03rjFtmC_fAgw7TboMssaqg9EZX8okQ_I9yAJywqbSDAXBJp8-A1HoQLfHgsLd6BIGA2QgQIB2Yj5d9cyK-bdY7_aZvlr7icku18Y9IPnmWxNrlScuKqqS9qoVnlt25tuigK7ZaTmX9mAXbfltr2h6Qrn0Myjfwa72arDIThxsYBpDp2RneYq7Gokg63hdhRAJK4x6bLEFac1iduJuzgjFo9kXB7Tt8L4IYvWTZQ5WG62fR7Su1pZqOzWeOKRP7Bvzl9wwKD557ohJgqKHP6UfEf4R3zzcUjmk4stlwuPVQLSCkjVjKp7QLhQFIixVTVAT7x5A1oNfnYVzKEwDr0D2GDbAOlKO130tRoXBgjvSJykirZXHWbeK4_GP9S46_J5Ksp2LCyA58SE0Czw6-xddWWcQNuRo3Mq0HonRs-A2ESSZ5uV9CbuMwL7OSIXuJh5pQW9i4urf7pbwrZsL703MGDgahS-PsxWjq3fY7p3209_d2GkEmLJKTxWKAuHB0RvOiJi6pxpT9H8ClicPlqvok6B7-Hdq0iEcTY6Jrx4JmC8A9gHTZFFdfk' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: 394c7b1f-daa0-408d-9989-15eeb6305fb9' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&note=fsddsdfASD&_method=PUT&password=first365224&email=first%40gmail.com&undefined='
        
        
- URL  
	api/notes/:note
- HTTP Method  
	DELETE
- Operation  
	Delete given note if it owned by Auth user 
- Api Call Example 
	api/notes/1	
- cURL Example
    curl --request DELETE \
      --url http://127.0.0.1:8000/api/notes/2 \
      --header 'Accept: application/json' \
      --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiNjA0MGQwYzJkMWZmZTAzZWJlYjU5NmI2NzI2ODQ2ODcwNDE0ZjVlOGJjMWIxNDY3Yjk4Zjk3NGVhZTRkMDYwODgyMWQ4NTM1OTUxZmQ4In0.eyJhdWQiOiIzIiwianRpIjoiYWI2MDQwZDBjMmQxZmZlMDNlYmViNTk2YjY3MjY4NDY4NzA0MTRmNWU4YmMxYjE0NjdiOThmOTc0ZWFlNGQwNjA4ODIxZDg1MzU5NTFmZDgiLCJpYXQiOjE1NDY3ODY3MzksIm5iZiI6MTU0Njc4NjczOSwiZXhwIjoxNTc4MzIyNzM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.HrFi1u0C0P3QtwPFeSNjtWslkRkhsj6v-vvpCLSGl9ylp6gyseo-Tj7XOn5-xMUzmXYufx0kmLCdsR6nW00Wr0SwPB9XKn7nkbvGTcsMoeOzVWdmkNq03rjFtmC_fAgw7TboMssaqg9EZX8okQ_I9yAJywqbSDAXBJp8-A1HoQLfHgsLd6BIGA2QgQIB2Yj5d9cyK-bdY7_aZvlr7icku18Y9IPnmWxNrlScuKqqS9qoVnlt25tuigK7ZaTmX9mAXbfltr2h6Qrn0Myjfwa72arDIThxsYBpDp2RneYq7Gokg63hdhRAJK4x6bLEFac1iduJuzgjFo9kXB7Tt8L4IYvWTZQ5WG62fR7Su1pZqOzWeOKRP7Bvzl9wwKD557ohJgqKHP6UfEf4R3zzcUjmk4stlwuPVQLSCkjVjKp7QLhQFIixVTVAT7x5A1oNfnYVzKEwDr0D2GDbAOlKO130tRoXBgjvSJykirZXHWbeK4_GP9S46_J5Ksp2LCyA58SE0Czw6-xddWWcQNuRo3Mq0HonRs-A2ESSZ5uV9CbuMwL7OSIXuJh5pQW9i4urf7pbwrZsL703MGDgahS-PsxWjq3fY7p3209_d2GkEmLJKTxWKAuHB0RvOiJi6pxpT9H8ClicPlqvok6B7-Hdq0iEcTY6Jrx4JmC8A9gHTZFFdfk' \
      --header 'Content-Type: application/x-www-form-urlencoded' \
      --header 'Postman-Token: cbec7c62-e54d-4391-ad18-cbdeff0a7559' \
      --header 'cache-control: no-cache' \
      --data 'title=test%20updated231&note=fsddsdfASD&password=first365224&email=first%40gmail.com&undefined='	


## Design Principles and Design Patterns

1)Repository  
2)Dependency Injection
3)SOLID
4)DRY


## Functionality to pay attention

1)Scope (See Note Model)
2)RepositoryServiceProvider (See App\Providers\)

The last 1-2 hour i spent on trying to write feature tests for all api endpoints which required logging in with Oauth in order to write tests

If  i had more time i would do that 