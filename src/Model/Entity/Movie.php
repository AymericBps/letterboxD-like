<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Movie extends Entity{
    protected $_accessible = [
        'id' => false,
        '*' => true,
    ];



}
