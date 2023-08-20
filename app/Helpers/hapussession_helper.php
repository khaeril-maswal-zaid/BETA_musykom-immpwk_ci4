<?php

function hapussession($data, $name)
{
    $_SESSION = [];
    $data->remove($name);
    $data->destroy();
}
