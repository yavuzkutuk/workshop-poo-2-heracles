<?php


class Shield
{
    private int $protection=10;
    private string $image='shield.svg';

    /**
     * @return int
     */
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * @param int $protection
     */
    public function setProtection(int $protection): void
    {
        $this->protection = $protection;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
