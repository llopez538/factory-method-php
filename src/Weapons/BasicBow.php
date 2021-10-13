<?php

namespace Styde\Weapons;

use Styde\Weapon\Bow;
use Styde\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $description = ':unit ataca con la espada a :opponent';
}