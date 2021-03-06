<?php

namespace Sasin91\LaravelTrinityCoreInteractions\Interactions\Soap;

use Laravel\Spark\Contracts\Repositories\AnnouncementRepository;

/**
 * Class Announce
 * @package Sasin91\LaravelTrinityCoreInteractions\Interactions\Soap;
 */
class Announce implements AnnounceContract
{
    use InteractsWithSoap;

    /**
     * Handle the interaction.
     *
     * @param mixed $message
     * @return mixed
     */
    public function handle($message)
    {
        return $this->soapCommand('announce', $message);
    }
    
}