<?php

function getSixDigitNumber(int $id){
    return str_pad($id, 6, '0', STR_PAD_LEFT);
}
