# Laravel API Client
Laravel Api Client is a web application that makes use of a Web API _(USGCS earthquake data)_ by consuming the data from the API and performing CRUD on it.

## Hosting 
This application is hosted on [this address](https://laravel-api-client.herokuapp.com) and can be accessed freely.

## Fetching/Reading earthquake data
Earthquake data from a start date to an end date can be accessed using the following route 

https://laravel-api-client.herokuapp.com/fetch?starttime=[StartDate]&endtime=[EndDate]

OR 

For earthquake between 2019-05-01 and 2019-05-02

https://laravel-api-client.herokuapp.com/fetch

## NB
The date used here follows the ISO-8601 timestamps format(YYYY-MM-DD). 
eg. 2019-05-01


## License
[MIT](https://choosealicense.com/licenses/mit/)
