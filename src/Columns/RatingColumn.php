<?php

namespace Mokhosh\FilamentRating\Columns;

use Filament\Tables\Columns\Column;
use Mokhosh\FilamentRating\Concerns\HasColor;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasTheme;

class RatingColumn extends Column
{
    use HasColor;
    use HasStars;
    use HasTheme;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.static';
    }
}
