#Movie Rater v0.1

## Description
The client wants a way to get ratings for their movies. 

They have collected the ratings for a movie in different categories from esteemed critics all over the world. 
Now they want a script which presents the movies final and overall valid score for all eternity. One score to rule them all!

## Requirements from the client:
 - A movie is rated from 1 to 5 in 4 different categories. 
 - The final score for a movie need to be calculated weighted by a very scientific key:

| category | weight |
|---|---|
|sound|0.20|
|acting|0.30|
|effects|0.45|
|music|0.05|

When running the index.php file, it should be possible to input a movie's title, and get score and the calculated total score out!

The scores are supplied in the resources folder in either JSON or CSV format.

The task is therefore, implement the functionality for this in the project, using the clients supplied files. 
The script has already been created, where public/index.php should execute and output, and classes/Movierater.php can be used for the logic if you wish. 

Is does not matter if the script is run in the terminal or the browser. Frontend team will figure out how to present the result.

##Running the script
First, install: 
Run  
`$ composer install`  
In the projects root

If PHP is installed locally, you can simple execute the index.php

`$ php public/index.php`

A testsuite has been initialized as well, can be run by executing:
`$ vendor/bin/phpunit`

If you dont have PHP installed locally, you can use the docker image to execute in

```bash
$ docker build -t sample-project .
$ docker run --rm -v ${PWD}:/usr/src/movierater sample-project
$ docker run --rm -v ${PWD}:/usr/src/movierater sample-project vendor/bin/phpunit
```
