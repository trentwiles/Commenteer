# Commenteer
Random Comments for the masses.


## What is it?

Commenteer is a collection of comments I have collected from YouTube that I have released for the public. Use them for entertainment, training AIs, whatever you want (just don't use them for bots please!).

## Installing

You can always just download the JSON file of comments, or you can use our PHP library.

```
composer require riversiderocks/commenteer=dev-master
```

### Usage

After including the library, autoload it with composer and then use the youtube function to get a random comment.

```

youtube(); // Echos a random comment

youtube("bob"); // Echos a random comment by Bob

```

## The Comments

These comments are random comments from random videos. The only requirement was that a comment had to be generic and could not have terminology or names related to the video. For example, a comment that said `Great video Riverside Rocks!` would not be selected, while a comment like `Great video!` would be.