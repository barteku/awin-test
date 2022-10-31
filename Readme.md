#Coffee Break Preferences Task
The aim of the task was tp create a system where users can store their coffee break preferences.

##Solution
At the beginning I wanted to use provided files as a symfony bundle, but after a while I've ended up with changing too much and decided to just use fragments of the provided code and built a new symfony app.<br/>

##Running the app
Made the hosting with docker. Running the app should be possible with docker-compose:
```
docker-compose build
docker-compose up
```
because I wanted to have my vendors locally to get the autocomplete in my ide, after running the image in docker, installing vendors is required after very first run on the app.
```
docker exec -it awin-test_php_1 composer install
```
For testing purpose I've created fixtures
```
docker exec -it awin-test_php_1 bin/console doctrine:fixtures:load
```

##APP
Based on the original app, I've kept the following dependencies:
<ul>
<li>symfony/http-foundation: ^3.4</li>
<li>doctrine/orm: ^2.5</li>
</ul>
In addition I've created na OfficeTeam entity, which allowed me to group users by notification service.<br/> 
I've made two notification services available<br/>
<ul>
<li>slack</li>
<li>email</li>
</ul>


Two routes are available
<ul>
<li>/today.{_format} - with the team preferences</li>
<li>/notification/{staffMemberId} - to send team member notification</li>
</ul>


