<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(iri="http://schema.org/Dealer")
 * @ORM\Entity(repositoryClass="App\Repository\DealerRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Dealer extends User
{
    /**
     * @ORM\PrePersist
     */
    public function setDefaultRole()
    {
        $this->addRole(self::ROLE_DEALER);
    }
}
