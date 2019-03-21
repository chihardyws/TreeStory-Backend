<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use MsgPhp\User\Entity\Role as BaseRole;

/**
 * @ORM\Entity()
 *
 * @final
 */
class Role extends BaseRole
{
    /** @ORM\Id() @ORM\Column(length=191) */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
