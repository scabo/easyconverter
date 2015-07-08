<?php

namespace Afterest\EasyConverter;

class SpeedConverter implements Convertible
{

    private $recipes = null;

    public function convertTo($direction, $value)
    {
        $recipe = $this->getRecipe($direction);
        return $recipe($value);
    }

    private function getRecipe($direction) {

        if (null === $this->recipes) {
            $this->recipes = [
                "kmh:mh" => function($value) {
                    return $value * 1000;
                },
                'mh:kmh' => function($value) {
                    return $value / 1000;
                }
            ];
        }

        return $this->recipes[$direction];
    }
}