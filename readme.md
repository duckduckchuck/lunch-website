# FOR ROY'S EYES ONLY
## (not really)

I think running the setup.sql file should get everything sorted out.

I tried to do what you suggested— putting the actually events to display in a separate table, but I actually have been facing some trouble with putting the users in.


this is where the code isn't working— I was attempting to set up a nested loop, but the logic isn't working right and I can tell that it's wrong. I just don't exactly know how to fix it!

```php
<div class='rsvp'>
   for ($user_number = 1; $user_number <= 6; $user_number++){
            $user_id = select("user_id", "display", "event_id", $index);
            $firstname = select("firstname", "user", "user_id", $user_number);
            $rsvp = select_two("$rsvp", "display", "event_id", $index, "user_id", $user_number);
            if ($rsvp == 1) {
               echo"<p class='going'>$firstname</p>"
            } else if ($rsvp == 2) {
               echo"<p class='not_going'>$firstname</p>"
            }
         }
</div>
```
I was *wondering* if you knew how better to set this
