<?php

function my_asset($filepath = null)
{
    return url('/') . '/' . $filepath;
}
