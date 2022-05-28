<?php


function barber($type, $int): void
{
    echo "Вы хотели $int стрижку $type, без проблем\n";
}

call_user_func('barber', "под горшок", 1);
call_user_func('barber', "наголо", 4);

