<?php


class Princesse extends Personnage
{
    private Bool $saved;

    public function __construct()
    {
        parent::__construct();
        $this->saved = false;
        $this->x = 450;
        $this->y = 450;
    }

    /**
     * return saved
     * @return bool
     */
    public function isSaved(): bool
    {
        return $this->saved;
    }

    /**
     * set saved
     * @param bool $saved
     */
    public function setSaved(bool $saved): void
    {
        $this->saved = $saved;
    }


}