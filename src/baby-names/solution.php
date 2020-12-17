<?php

function valid_name(array $names): string {
    if (count($names) === 0) {
        return 'You must test at least one name.';
    }

    if (count($names) === 1) {
        return 'Congratulations, you can choose any name you like!';
    }

    for ($index = 1; $index < count($names); $index++) {
        $currentName = $names[$index];
        $previousName = $names[$index - 1];

        if (strtolower($currentName[0]) !== strtolower($previousName[-1])) {
            return 'Back to the drawing board, your baby names are not compatible.';
        }
    }

    return 'Congratulations, your baby names are compatible!';
}

