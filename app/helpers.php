<?php

function random_avatar()
{
    return 'https://eu.ui-avatars.com/api/?background=random&name='. urlencode(Faker\Factory::create()->firstName);
}
