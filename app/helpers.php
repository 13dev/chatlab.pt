<?php

function random_avatar(?string $name = null)
{
    if($name === null) {
        $name = urlencode(Faker\Factory::create()->firstName);
    }

    return 'https://eu.ui-avatars.com/api/?background=random&name='.$name;
}
