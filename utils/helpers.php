<?php

function printLine(string $label, string $value): void
{
    echo "$label: $value<br>";
}

function printSeparator(): void
{
    echo str_repeat('-', 28) . "<br>";
}
