<?php

include "./Database/Query.php";
include "./Database/forumCommentQuery.php";

function createUserTableIfNeeded($db)
{
    $query = "CREATE TABLE IF NOT EXISTS users (
                              firstname nvarchar(20),
                              lastname nvarchar(20),
                              email nvarchar(50) not null, 
                              password nvarchar(256),
                              PRIMARY KEY(email))";
    $result = $db->query($query);
}

function createThreadTableIfNeeded($db)
{
    $query = "CREATE TABLE IF NOT EXISTS thread (
                              threadID int NOT NULL AUTO_INCREMENT,
                              title nvarchar(200),
                              description nvarchar(1500),
                              email nvarchar(50) not null,
                              threaddate datetime,
                              PRIMARY KEY(threadID),
                              FOREIGN KEY(email) REFERENCES users(email) ON DELETE CASCADE ON UPDATE CASCADE)";
    $result = $db->query($query);
}

function createCommentTableIfNeeded($db)
{
    $query = "CREATE TABLE IF NOT EXISTS comment (
                              commentID int NOT NULL AUTO_INCREMENT,
                              message nvarchar(1500),
                              threadID int,
                              email nvarchar(50) not null,
                              commentdate datetime,
                              PRIMARY KEY(commentID),
                              FOREIGN KEY(email) REFERENCES users(email) ON DELETE CASCADE ON UPDATE CASCADE,
                              FOREIGN KEY(threadID) REFERENCES thread(threadID) ON DELETE CASCADE ON UPDATE CASCADE
                              )";
    $result = $db->query($query);
}

function insertUserIfRequired($db, $firstName, $lastName, $email, $password) {
    $userID = checkUserLogin($db, $firstName, $password);
    if ($userID == null) {
        insertUser($db, $firstName, $lastName, $email, $password);
    }
    $userID = checkUserLogin($db, $firstName, $password);
    return $userID;
}

function insertThreadIfRequired($db, $title, $description, $userID) {
    $threadID = checkIfThreadExists($db, $title, $description, $userID);
    if ($threadID == null) {
        insertThread($db, $title, $description, $userID);
    }
    $threadID = checkIfThreadExists($db, $title, $description, $userID);
    return $threadID;
}

function insertCommentIfRequired($db, $message, $threadID, $userID) {
    $commentID = checkIfCommentExists($db, $message, $threadID, $userID);
    if ($commentID == null) {
        insertComment($db, $message, $threadID, $userID);
    }
    $commentID = checkIfCommentExists($db, $message, $threadID, $userID);
    return $commentID;
}

createUserTableIfNeeded($db);
createThreadTableIfNeeded($db);
createCommentTableIfNeeded($db);

// Populate Users
$harryUserID = insertUserIfRequired($db, "Harry", "Scott","harry@lex-enterprises.com","harrypassword");
$sallyUserID = insertUserIfRequired($db, "Sally", "England","sally@lex-enterprises.com","sallypassword");
$johnUserID = insertUserIfRequired($db, "John", "Wales", "john@lex-enterprises.com","johnpassword");

// Populate Threads
$threadHarryID = insertThreadIfRequired($db, "Feeling lightheaded/dizzy",
    "I recently became a vegetarian and have been getting light headed and dizzy. Can anyone recommend 
    any dietary changes that might address this? Your help is greatly appreciated! Thanks", $harryUserID);
$threadSallyID = insertThreadIfRequired($db, "What did you cook or bake today?",
    "This thread is for sharing food that you have cooked or baked. Please also feel free to post any photos 
    that you wish to share.", $sallyUserID);
$threadJohnID = insertThreadIfRequired($db, "Health Challenge",
    "I really need to try to get back to a more healthy lifestyle. Right now it is really hard though! I am
     a comfort eater and my food of choice is sweets! I am lucky that I have my treadmill to at least keep me a bit
      active. I would love to walk in the parks in this wonderful weather but I am trying to be \"good\" and stay home
       as much as possible.", $johnUserID);

// Populate Comments
insertCommentIfRequired($db,
    "- Make sure you're eating enough calories for your body type/size and your activity level.
- Make sure you're getting enough iron.
- Make sure you have a good source of vitamin B12 in your diet or that you take supplements that provide this.",
    $threadHarryID, $sallyUserID);
insertCommentIfRequired($db,
    "Eat More! This just happened to me this evening. I’ve been traveling, my meals have been grab and go, 
    and tonight when I finally had a chance to eat a “real meal” I found I was light-headed while looking at the menu 
    and knew I needed to order quickly.

For new veg*ns, I also recommend that you carry with you something to eat at all times - a Cliff bar, some peanuts in 
a baggie, a pb&j tucked in your purse, a clementine - just have something so you don’t have to go without or feel 
like you have no options.",
    $threadHarryID, $johnUserID);

insertCommentIfRequired($db,
    "I’m going to go with the southern traditional black eyed peas. I just don’t know what I’m going to do 
    with them. I might just open a can and throw some in a bowl of my vegetable soup that I made yesterday.",
    $threadSallyID, $harryUserID);
insertCommentIfRequired($db,
    "So I didn't make this today, but a couple days ago I made vegan mac & cheese BLT. The recipe is from the 
    newest edition of VwaV, which I bought with a gift card after Christmas... my original edition is falling apart. 
    And this new edition has a few new recipes in it! The mac & cheese BLT was delicious. It didn't taste like cheese 
    to me, but it was good. H liked it too.",
    $threadSallyID, $johnUserID);

insertCommentIfRequired($db,
    "I try to get back on exercising and walking.
This week has been hard. Yesterday I was in pain and couldn't do anything else than streching and yoga. Today I have 
slept pretty much all day, because I'm a stress sleeper.
I'll try to dance a little bit before bed time (I could probably sleep 24/7).",
    $threadJohnID, $harryUserID);
insertCommentIfRequired($db,
    "My plan is to continue to increase my exercise levels and calorie consumption.
Keep up with my PT which is mostly jaw and neck exercises. (I've been lax)
Two to three dog walks a day. With one being longer than a mile.
2000 to 2200 calories a day.
And some kind of morning routine 2 - 4 days a week.
Yesterday I did the NYT Scientific 7-Minute workout. Boy am I out of shape.

Today I want to go on a long dog walk. Maybe 2 - 3 miles. It's really cold outside right now so I'll wait till it warms up",
    $threadJohnID, $sallyUserID);