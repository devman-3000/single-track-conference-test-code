<?php

declare(strict_types=1);

namespace ConferenceApp;

class AgendaView
{
    /**
     * @var Agenda
     */
    private $agenda;

    /**
     * @param Agenda $agenda
     */
    public function __construct(Agenda $agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * @return int
     */
    public function getNumberOfSlots(): int
    {
        /**
         * @todo: Implement it
         */
        return $this->agenda->count();
    }

    /**
     * return int
     */
    public function getDurationInMinutes(): int
    {
        /**
         * @todo: Implement it. Remember to include all breaks between slots to overall agenda duration.
         */

        
    }
}
