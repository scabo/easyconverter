<?php

namespace Afterest\EasyConverter;

interface Convertible
{
    public function convertTo($direction, $value);
}