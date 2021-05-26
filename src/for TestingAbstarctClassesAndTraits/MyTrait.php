<?php
namespace forTestingAbstractClassesAndTraits;

trait MyTrait
{
    public function traitMethod(int $number)
    {
        return $number+10;
    }
}