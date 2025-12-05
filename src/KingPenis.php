<?php

namespace Cnnom\LibPenis;

class KingPenis
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }

    public function getLengthFix(string $s): int
    {
        return mb_strlen($s);
    }
}